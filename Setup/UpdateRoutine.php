<?php
/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

namespace D3\Unzer\Setup;

use D3\ModCfg\Application\Model\Installwizzard\d3installdbcommon;
use D3\ModCfg\Application\Model\Installwizzard\d3installdbrecordmultilang;
use D3\Unzer\Application\Model\channelIdClassMapper;
use D3\Unzer\Application\Model\Configuration\ModProfile;
use D3\Unzer\Application\Model\Constants;
use D3\Unzer\Application\Model\Factory;
use D3\Unzer\Application\Model\Payment\Btobbillpurchase;
use D3\Unzer\Application\Model\Payment\Creditcard;
use D3\Unzer\Application\Model\Payment\Debitcard;
use D3\Unzer\Application\Model\Payment\Directdebit;
use D3\Unzer\Application\Model\Payment\Easycredit;
use D3\Unzer\Application\Model\Payment\Eps;
use D3\Unzer\Application\Model\Payment\Giropay;
use D3\Unzer\Application\Model\Payment\Ideal;
use D3\Unzer\Application\Model\Payment\Invoice\Secured;
use D3\Unzer\Application\Model\Payment\Invoice\Unsecured;
use D3\Unzer\Application\Model\Payment\Masterpass;
use D3\Unzer\Application\Model\Payment\Paypal;
use D3\Unzer\Application\Model\Payment\Postfinance;
use D3\Unzer\Application\Model\Payment\Prepayment;
use D3\Unzer\Application\Model\Payment\Przelewy24;
use D3\Unzer\Application\Model\Payment\Sofortueberweisung;
use D3\Unzer\Application\Model\paymentIdClassMapper;
use D3\Unzer\Application\Model\Settings\Channels\Channels;
use D3\Unzer\Application\Model\Settings\Channels\Directdebit\Unsecured as DirectDebitUnsecured;
use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Install\d3install_updatebase;
use Doctrine\DBAL\DBALException;
use Exception;
use OxidEsales\Eshop\Application\Model\Payment;
use OxidEsales\Eshop\Application\Model\Shop;
use OxidEsales\Eshop\Core\Database\Adapter\DatabaseInterface;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\ConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\InputException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Core\Model\BaseModel;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;
use ReflectionException;

class UpdateRoutine extends d3install_updatebase
{
    protected $_aUpdateMethods = [
        [
            'check' => 'hasModCfgConfiguration',
            'do'    => 'showModCfgMigrationMessage',
        ],
        [
            'check' => 'profileHasOldClassNames',
            'do'    => 'changeProfileToClassIdents',
        ]
    ];

    /**
     * @throws ConnectionException
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws StandardException
     * @throws ReflectionException
     */
    public function migrateModCfgConfiguration(): bool
    {
        startProfile(__METHOD__);

        if ($this->hasModCfgConfiguration() && $this->_getAction() !== 'checklist') {
            $sCurrentShopId        = Registry::getConfig()->getShopId();
            $currentLanguage       = Registry::getLang();
            $currentBaseLanguageId = $currentLanguage->getBaseLanguage();
            foreach ($this->getShopListByActiveModule('d3unzer') as $oShop) {
                /** @var $oShop BaseModel */
                $this->_changeToShop($oShop->getId());

                $shopLanguage = Registry::getLang();
                /** @var bool $hasMultilangOption */
                $hasMultilangOption = (bool)Registry::getConfig()->getShopConfVar('d3hp_allowMultipleLanguages', null, 'd3unzer');
                $languages = [0]; //0 = base language

                if ($hasMultilangOption) {
                    foreach ($shopLanguage->getLanguageArray() as $language) {
                        if (in_array($language->id, $languages)) {
                            continue;
                        }

                        $languages[] = $language->id;
                    }
                }

                foreach ($languages as $language) {
                    $shopLanguage->setBaseLanguage($language);
                    $d3CfgMod  = d3_cfg_mod::getNoCache('d3unzer');
                    $valueList = unserialize($d3CfgMod->getValue('d3heidelpay_aPaymentList'));

                    if (empty($valueList) || false == is_array($valueList)) {
                        $d3CfgMod->deleteValue('d3heidelpay_aPaymentList');
                        foreach ($this->getOldChannelList() as $oldChannelname) {
                            $d3CfgMod->deleteValue($oldChannelname);
                        }

                        $d3CfgMod->save();
                        continue;
                    }

                    $isTestMode = (bool)$d3CfgMod->getLogStatus('test');

                    /** @var Factory $factory */
                    $factory    = oxNew(Factory::class)->setModuleConfiguration($d3CfgMod);
                    $modProfile = $factory->getModProfile();

                    foreach ($valueList as $oxPaymentId => $heidelpayClassName) {
                        $mapHeidelpayClassnameToChannel = $this->_mapHeidelpayClassnameToChannel(
                            $heidelpayClassName,
                            $d3CfgMod
                        );

                        if (empty($mapHeidelpayClassnameToChannel)) {
                            continue;
                        }

                        $escapedParameter = [
                            'isActive'       => 1,
                            'isTestConfig'   => $isTestMode,
                            'title'          => $this->_mapOxpaymentIdToPaymentName($oxPaymentId),
                            'paymentType'    => $this->_mapHeidelpayClassnameToChannelsettingsClass(
                                $heidelpayClassName,
                                $factory
                            ),
                            'channel'        => $mapHeidelpayClassnameToChannel,
                            'oxidpaymentIds' => [$oxPaymentId],
                        ];

                        $newConfiguration = $this->retrieveNewConfiguration($escapedParameter);
                        $newConfiguration->setId(Registry::getUtilsObject()->generateUId());
                        $this->saveConfigToModProfile($modProfile, $newConfiguration);
                    }

                    $d3CfgMod->deleteValue('d3heidelpay_aPaymentList');
                    foreach ($this->getOldChannelList() as $oldChannelname) {
                        $d3CfgMod->deleteValue($oldChannelname);
                    }

                    $d3CfgMod->save();
                }
            }

            $this->_changeToShop($sCurrentShopId);
            $currentLanguage             = Registry::getLang();
            $currentLanguage->setBaseLanguage($currentBaseLanguageId);
        }

        stopProfile(__METHOD__);

        return true;
    }

    /**
     * @return bool|DatabaseInterface
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws ConnectionException
     * @throws SystemComponentException
     */
    public function hasModCfgConfiguration(): bool
    {
        startProfile(__METHOD__);
        $result = false;

        $sCurrentShopId = Registry::getConfig()->getShopId();
        foreach ($this->getShopListByActiveModule('d3unzer') as $oShop) {
            /** @var $oShop BaseModel */
            $this->_changeToShop($oShop->getId());
            $value = d3_cfg_mod::getNoCache('d3unzer')->getValue('d3heidelpay_aPaymentList');
            if ($value) {
                $result = true;
                break;
            }
        }

        $this->_changeToShop($sCurrentShopId);
        stopProfile(__METHOD__);

        return $result;
    }

    /**
     * @return bool
     * @throws ConnectionException
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws ReflectionException
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    public function showModCfgMigrationMessage()
    {
        $this->setConfirmMessageSessionRequest('D3HeidelpaySetupUpdateRoutinemigrateModCfgConfiguration', true);
        $executeType =  Registry::get(Request::class)->getRequestEscapedParameter('exectype');
        if (empty($executeType) && !str_starts_with(PHP_SAPI, 'cli')) {
            return $this->_confirmMessage('D3_UNZER_UPDATE_CHANNELCONFIGURATIONS');
        }

        if (str_starts_with(PHP_SAPI, 'cli')) {
            $this->_confirmMessage('D3_UNZER_UPDATE_CHANNELCONFIGURATIONS');
        }

        return $this->migrateModCfgConfiguration();
    }

    /**
     * @param $escapedParameter
     *
     * @return Channels
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws InputException
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    protected function retrieveNewConfiguration(array $escapedParameter)
    {
        if (false == class_exists($escapedParameter['paymentType'])) {
            $message = 'class not found: '.$escapedParameter['paymentType'].': '.PHP_EOL.var_export(
                $escapedParameter,
                true
            );
            /** @var InputException $exception */
            $exception = oxNew(InputException::class, nl2br($message));
            throw $exception;
        }

        if (false === stristr($escapedParameter['paymentType'], 'D3\Unzer\Application\Model\Settings\Channels')) {
            $message = 'this is not a configuration class: '.$escapedParameter['paymentType'].': '.PHP_EOL.var_export(
                $escapedParameter,
                true
            );
            /** @var InputException $exception */
            $exception = oxNew(InputException::class, nl2br($message));
            throw $exception;
        }

        $difference = array_diff_key(
            call_user_func($escapedParameter['paymentType'].'::getClassDefinition'),
            $escapedParameter
        );

        $escapedParameter = array_merge($escapedParameter, $difference);

        /** @var Channels $newConfiguration */
        $newConfiguration = oxNew($escapedParameter['paymentType'], $escapedParameter);

        /** @var Factory $factory */
        $factory = oxNew(Factory::class)->setModuleConfiguration(d3_cfg_mod::getNoCache('d3unzer'));
        if ($factory->isBasicLicence()) {
            $heidelpayment = $newConfiguration->getHeidelPaymentFromChannel();
            if (in_array($heidelpayment, $factory::PREMIUMHEIDELPAYMENTCLASSNAMES)) {
                $escapedParameter['isActive'] = 0;
                $newConfiguration             = oxNew($escapedParameter['paymentType'], $escapedParameter);
            }
        }

        return $newConfiguration;
    }

    /**
     *
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws Exception
     */
    protected function saveConfigToModProfile(ModProfile $modprofile, Channels $currentChannel)
    {
        $modprofile->setValue($currentChannel->getId(), (string)$currentChannel);

        $modprofile->prepareSaveData();

        // set oxid if inserted
        if (false === $modprofile->save()) {
            $message = 'Failed to save profile!'.PHP_EOL;
            $message .= 'The entered configuration may not saved.'.PHP_EOL;
            $message .= 'Please approach your technical contact person and tell them how to repruduce this message.';

            /** @var InputException $exception */
            $exception = oxNew(InputException::class, nl2br($message));
            throw $exception;
        }
    }

    /**
     * @param         $heidelpayClassName
     *
     * @return string
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws ReflectionException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    protected function _mapHeidelpayClassnameToChannelsettingsClass($heidelpayClassName, Factory $factory)
    {
        $settingsClassName = "";

        $classAlias = [
                "d3_d3heidelpay_models_payment_invoice_unsecured"   => Unsecured::class,
                "d3_d3heidelpay_models_payment_invoice_secured"     => Secured::class,
                "d3_d3heidelpay_models_payment_sofortueberweisung"  => Sofortueberweisung::class,
                "d3_d3heidelpay_models_payment_prepayment"          => Prepayment::class,
                "d3_d3heidelpay_models_payment_paypal"              => Paypal::class,
                "d3_d3heidelpay_models_payment_ideal"               => Ideal::class,
                "d3_d3heidelpay_models_payment_giropay"             => Giropay::class,
                "d3_d3heidelpay_models_payment_eps"                 => Eps::class,
                "d3_d3heidelpay_models_payment_directdebit"         => Directdebit::class,
                "d3_d3heidelpay_models_payment_directdebit_secured" => Directdebit\Secured::class,
                "d3_d3heidelpay_models_payment_debitcard"           => Debitcard::class,
                "d3_d3heidelpay_models_payment_creditcard"          => Creditcard::class,
                "d3_d3heidelpay_models_payment_btobbillpurchase"    => Btobbillpurchase::class,
                "d3_d3heidelpay_models_payment_easycredit"          => Easycredit::class,
                "d3_d3heidelpay_models_payment_masterpass"          => Masterpass::class,
                "d3_d3heidelpay_models_payment_postfinance"         => Postfinance::class,
                "d3_d3heidelpay_models_payment_przelewy24"          => Przelewy24::class,
            ];

        if (array_key_exists(strtolower($heidelpayClassName), $classAlias)) {
            $heidelpayClassName = $classAlias[strtolower($heidelpayClassName)];
        }

        $paymentConfigurations      = $factory->getPaymentConfigurations();
        $generatedSettingsClassname = strtolower(str_replace(
            'D3\\Heidelpay\\Models\\Payment\\',
            "D3\\Heidelpay\\Models\\Settings\\Channels\\",
            $heidelpayClassName
        ));
        if ('d3\\heidelpay\\models\\settings\\channels\\directdebit' === $generatedSettingsClassname) {
            $generatedSettingsClassname = 'd3\\heidelpay\\models\\settings\\channels\\directdebit\\unsecured';
        }

        if ('d3\\heidelpay\\models\\settings\\channels\\sofortueberweisung' === $generatedSettingsClassname) {
            $generatedSettingsClassname = 'd3\\heidelpay\\models\\settings\\channels\\sofort';
        }

        foreach ($paymentConfigurations as $paymentConfiguration) {
            if ($generatedSettingsClassname === strtolower($paymentConfiguration)) {
                $settingsClassName = $paymentConfiguration;
                break;
            }
        }

        return $settingsClassName;
    }

    protected function _mapHeidelpayClassnameToChannel($heidelpayClassName, d3_cfg_mod $d3CfgMod)
    {
        $channel        = false;
        $oldChannelList = $this->getOldChannelList();

        $mapping = [
            'd3_d3heidelpay_models_payment_creditcard'          => $oldChannelList['mainChannel'],
            'd3_d3heidelpay_models_payment_debitcard'           => $oldChannelList['mainChannel'],
            'd3_d3heidelpay_models_payment_directdebit'         => $oldChannelList['mainChannel'],
            'd3_d3heidelpay_models_payment_invoice_unsecured'   => $oldChannelList['mainChannel'],
            'd3_d3heidelpay_models_payment_prepayment'          => $oldChannelList['mainChannel'],
            'd3_d3heidelpay_models_payment_sofortueberweisung'  => $oldChannelList['sofortChannel'],
            'd3_d3heidelpay_models_payment_paypal'              => $oldChannelList['paypalChannel'],
            'd3_d3heidelpay_models_payment_giropay'             => $oldChannelList['giropayChannel'],
            'd3_d3heidelpay_models_payment_ideal'               => $oldChannelList['idealChannel'],
            'd3_d3heidelpay_models_payment_invoice_secured'     => $oldChannelList['ivSecuredChannel'],
            'd3_d3heidelpay_models_payment_eps'                 => $oldChannelList['epsChannel'],
            'd3_d3heidelpay_models_payment_directdebit_secured' => $oldChannelList['ddSecuredChannel'],
            'd3_d3heidelpay_models_payment_przelewy24'          => $oldChannelList['p24Channel'],
            'd3_d3heidelpay_models_payment_postfinance'         => $oldChannelList['postfinanceChannel'],
            'd3_d3heidelpay_models_payment_masterpass'          => $oldChannelList['masterpassChannel'],
            'd3_d3heidelpay_models_payment_easycredit'          => $oldChannelList['easycreditChannel'],
            'd3_d3heidelpay_models_payment_btobbillpurchase'    => $oldChannelList['b2bChannel'],

            Creditcard::class           => $oldChannelList['mainChannel'],
            Debitcard::class            => $oldChannelList['mainChannel'],
            Directdebit::class          => $oldChannelList['mainChannel'],
            Unsecured::class            => $oldChannelList['mainChannel'],
            Prepayment::class           => $oldChannelList['mainChannel'],
            Sofortueberweisung::class   => $oldChannelList['sofortChannel'],
            Paypal::class               => $oldChannelList['paypalChannel'],
            Giropay::class              => $oldChannelList['giropayChannel'],
            Ideal::class                => $oldChannelList['idealChannel'],
            Secured::class              => $oldChannelList['ivSecuredChannel'],
            Eps::class                  => $oldChannelList['epsChannel'],
            DirectDebitUnsecured::class => $oldChannelList['ddSecuredChannel'],
            Przelewy24::class           => $oldChannelList['p24Channel'],
            Postfinance::class          => $oldChannelList['postfinanceChannel'],
            Masterpass::class           => $oldChannelList['masterpassChannel'],
            Easycredit::class           => $oldChannelList['easycreditChannel'],
            Btobbillpurchase::class     => $oldChannelList['b2bChannel'],

        ];

        foreach ($mapping as $index => $oldChannelName) {
            if ($heidelpayClassName === $index) {
                $channel = $d3CfgMod->getValue($oldChannelName);
            }
        }

        if (false === $channel) {
            return '';
        }

        return $channel;
    }

    /**
     * @param $oxpaymentId
     *
     * @return string
     * @throws SystemComponentException
     */
    protected function _mapOxpaymentIdToPaymentName($oxpaymentId)
    {
        /** @var Payment $oxidPayment */
        $oxidPayment = oxNew(Payment::class);
        if ($oxidPayment->load($oxpaymentId)) {
            $titel = $oxidPayment->getFieldData('oxdesc');

            return $titel ?: $oxpaymentId;
        }

        return $oxpaymentId;
    }

    protected function getOldChannelList(): array
    {
        $mainChannel        = 'd3heidelpay_sChannel';
        $sofortChannel      = 'd3heidelpay_sChannel__sofort';
        $paypalChannel      = 'd3heidelpay_sChannel__paypal';
        $giropayChannel     = 'd3heidelpay_sChannel__giro';
        $idealChannel       = 'd3heidelpay_sChannel__ideal';
        $ivSecuredChannel   = 'd3heidelpay_sChannel__assuredinv';
        $epsChannel         = 'd3heidelpay_sChannel__eps';
        $ddSecuredChannel   = 'd3heidelpay_sChannel__assureddirectdebit';
        $p24Channel         = 'd3heidelpay_sChannel__przelewy24';
        $postfinanceChannel = 'd3heidelpay_sChannel__postfinance';
        $masterpassChannel  = 'd3heidelpay_sChannel__masterpass';
        $easycreditChannel  = 'd3heidelpay_sChannel__easycredit';
        $b2bChannel         = 'd3heidelpay_sChannel__Btobbillpurchase';

        return [
            'mainChannel'        => $mainChannel,
            'sofortChannel'      => $sofortChannel,
            'paypalChannel'      => $paypalChannel,
            'giropayChannel'     => $giropayChannel,
            'idealChannel'       => $idealChannel,
            'ivSecuredChannel'   => $ivSecuredChannel,
            'epsChannel'         => $epsChannel,
            'ddSecuredChannel'   => $ddSecuredChannel,
            'p24Channel'         => $p24Channel,
            'postfinanceChannel' => $postfinanceChannel,
            'masterpassChannel'  => $masterpassChannel,
            'easycreditChannel'  => $easycreditChannel,
            'b2bChannel'         => $b2bChannel,
        ];
    }

    /**
     * @return bool
     * @throws ConnectionException
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws InputException
     * @throws SystemComponentException
     */
    public function profileHasOldClassNames(): bool
    {
        $factory = oxNew(Factory::class);
        $currentShopId = $factory->getModuleConfiguration()->getShopId();

        /** @var Shop $oShop */
        foreach ($this->getShopListByActiveModule(Constants::OXID_MODULE_ID) as $oShop) {
            $this->_changeToShop($oShop->getId());
            $modProfile = $factory->getModProfile();
            $values     = $modProfile->getAllValues();
            foreach ($values as $configuration) {
                $item = json_decode($configuration, true);
                if (stristr($item['heidelpayPaymentClassname'] . '-' . $item['paymentType'], 'Heidelpay')) {
                    $this->_changeToShop($currentShopId);
                    return true;
                }
            }
        }

        $this->_changeToShop($currentShopId);

        return false;
    }

    public function changeProfileToClassIdents()
    {
        $blRet = true;

        $factory = oxNew(Factory::class);
        $currentShopId = $factory->getModuleConfiguration()->getShopId();

        /** @var Shop $oShop */
        foreach ($this->getShopListByActiveModule(Constants::OXID_MODULE_ID) as $oShop) {
            $this->_changeToShop($oShop->getId());
            $modProfile = $factory->getModProfile();
            $values               = $modProfile->getAllValues();
            $paymentIdClassMapper = oxNew(paymentIdClassMapper::class);
            $channelIdClassMapper = oxNew(channelIdClassMapper::class);

            foreach ($values as $id => $configuration) {
                $item = json_decode($configuration, true);
                if (stristr($item['heidelpayPaymentClassname'], 'Unzer')) {
                    $item['heidelpayPaymentClassname'] = $paymentIdClassMapper->getIdentByOldClassName($item['heidelpayPaymentClassname']);
                }

                if (stristr($item['paymentType'], 'Unzer')) {
                    $item['paymentType'] = $channelIdClassMapper->getIdentByOldClassName($item['paymentType']);
                }

                $modProfile->setValue($id, json_encode($item));
                $modProfile->prepareSaveData();
            }

            $dbRecord = oxNew(d3installdbrecordmultilang::class, $this);
            $dbCommon = oxNew(d3installdbcommon::class, $this);
            $blRet = $dbCommon->executeMultipleQueries([
                  $dbRecord->getChangeTableRecordMultiLangQuery(
                      ['oxvalue' => DatabaseProvider::getDb()->quote($modProfile->getFieldData('oxvalue'))],
                      $modProfile->getCoreTableName(),
                      $modProfile->getCoreTableName(),
                      ['oxid' => $modProfile->getId(),'oxshopid' => $oShop->getId()]
                  )['sSql']
            ]);
        }

        $this->_changeToShop($currentShopId);

        return $blRet;
    }
}
