<?php

namespace D3\Unzer\Modules\Application\Controller;

use D3\Unzer\Application\Controller\MgwOrder;
use D3\Unzer\Application\Controller\Order;
use D3\Unzer\Application\Model\Constants;
use D3\Unzer\Application\Model\Containers\Criterions;
use D3\Unzer\Application\Model\Factory;
use D3\Unzer\Application\Model\Payment\Easycredit;
use D3\Unzer\Application\Model\Payment\Prepayment;
use D3\Unzer\Application\Model\Payment\Invoice\Secured;
use D3\Unzer\Application\Model\Payment\Invoice\Unsecured;
use D3\Unzer\Application\Model\Payment\Exception\PaymentNotReferencedToUnzerException;
use D3\Unzer\Application\Model\Transactionlog\Reader\Unzer as ReaderHeidelpay;
use D3\Unzer\Application\Model\Verify\Exception\AgbNotAcceptedException;
use D3\Unzer\Application\Model\Verify\Exception\CheckSessionChallengeException;
use D3\Unzer\Application\Model\Verify\Exception\UnzerApiException as D3UnzerApiException;
use D3\Unzer\Application\Model\Verify\Exception\NotLoggedInException;
use D3\Unzer\Application\Model\Viewconfig;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Transactionlog\d3transactionlog;
use D3\Unzer\Modules\Application\Model\Order as OrderAlias;
use Doctrine\DBAL\DBALException;
use Exception;
use UnzerSDK\Exceptions\UnzerApiException;
use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\Eshop\Application\Model\Order as OxidOrder;
use OxidEsales\Eshop\Application\Model\Payment;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;
use OxidEsales\Eshop\Core\UtilsView;

/**
 */
class OrderController extends OrderController_parent
{
    /**
     * array of years
     * @var array
     */
    protected $d3HeidelpayCreditYears;

    /**
     * @var array
     */
    protected $d3HeidelpayExceptionRoutings = [
        NotLoggedInException::class                      => 'd3HeidelpayRouteToUser',
        CheckSessionChallengeException::class            => 'd3HeidelpayRouteToOrder',
        AgbNotAcceptedException::class                   => 'd3HeidelpayRouteToOrderWithAGBError',
        PaymentNotReferencedToUnzerException::class  => 'd3HeidelpayRouteToParentExecute',
    ];


    /**
     * @return mixed|string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function render()
    {
        $ret = parent::render();
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);
        if (false === $factory->getModuleConfiguration()->isActive()) {
            return $ret;
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
            $this->addTplParam('isHeidelpayDebugMode', (bool)$factory->getModuleProvider()->isTestMode());

            $oHeidelpayViewConfig = oxNew(
                Viewconfig::class,
                $factory->getModuleConfiguration(),
                Registry::get(Registry::class),
                $factory
            );

            $this->addTplParam('oHeidelpayViewConfig', $oHeidelpayViewConfig);
            $sHeidelpayTemplate = Registry::get(Request::class)->getRequestParameter('heidelpaytemplate');

            if (false == empty($sHeidelpayTemplate)) {
                $this->_sThisTemplate = $sHeidelpayTemplate;
            }
        }

        return $this->_sThisTemplate;
    }

    /**
     * Return route to payment if no d3 secure payment
     *
     * @return string partizielle rueckgabe der klasse
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function show3DSecureFrame()
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);

        if (false == $factory->getModuleConfiguration()->isActive()) {
            $factory->getModuleConfiguration()->d3getLog()->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'module is inactive',
                'module is inactive'
            );

            return '';
        }

        $sReturn   = '';
        $aDynValue = Registry::getSession()->getVariable('dynvalue');

        if (isset($aDynValue['oxuid']) && false == empty($aDynValue['oxuid'])) {
            $logReader   = oxNew(ReaderHeidelpay::class);
            $transaction = oxNew(d3transactionlog::class, $logReader);
            $sUniqueId   = $aDynValue['oxuid'];

            if (false == $transaction->load(DatabaseProvider::getDb()->getOne('SELECT * FROM d3transactionlog WHERE d3reference = ?', [$sUniqueId]))) {
                $factory->getModuleConfiguration()->d3getLog()->warning(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'could not load d3transactionlog for saved payment',
                    print_r(sprintf("SELECT * FROM d3transactionlog WHERE d3reference = '%s'", $sUniqueId), true)
                );
            }
        }


        if (false == $factory->getSettings()->isSecurePayment($factory)) {
            $sReturn = 'payment?payerror=2';
        }

        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'return value',
            var_export($sReturn, true)
        );

        return $sReturn;
    }

    /**
     * Template variable getter. Returns array of years for credit cards
     *
     * @return array
     */
    public function getCreditYears()
    {
        if ($this->d3HeidelpayCreditYears === null) {
            $this->d3HeidelpayCreditYears = range(date('Y'), (int) date('Y') + 10);
        }

        return $this->d3HeidelpayCreditYears;
    }

    /**
     * Returns user stored payment data
     *
     * @param $sPaymentId
     *
     * @return array
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function getUserHPStoreData($sPaymentId)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);

        if (false == $factory->getModuleConfiguration()->isActive()) {
            return [];
        }

        $storeIds = $this->getUserHPStoreIDs($sPaymentId);
        if (empty($storeIds)) {
            return [];
        }

        $storedDataList = [];

        foreach ($storeIds as $storeId) {
            $storedData = $factory->getStoredDataPlain();
            $storedData->load($storeId['OXID']);

            $storedData->aDynValue = unserialize($storedData->d3hpuid__oxpaymentdata->rawValue);
            if (is_array($storedData->aDynValue)) {
                $storedData->aDynValue['oxuid']   = $storedData->getFieldData('oxuid');
                $storedDataList[$storeId['OXID']] = $storedData;
            }
        }

        return $storedDataList;
    }

    /**
     * Returns id of user stored payment data
     *
     * @param $sPaymentId
     *
     * @return array
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function getUserHPStoreIDs($sPaymentId)
    {
        if (! ($sUserID = Registry::getSession()->getVariable("usr"))) {
            return [];
        }

        $shopid = Registry::getConfig()->getShopId();
        return DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getAll(
            sprintf("SELECT `oxid` AS OXID FROM `d3hpuid` WHERE `oxuserid` = '%s' AND `oxpaymentid` = '%s' AND `oxshopid` = '%d'", $sUserID, $sPaymentId, $shopid)
        );
    }

    //<editor-fold desc="TODO:3 ways with existing paymentdata possible. see /tests/acceptance/selenium/dudeWantToPay.graphml">

    /**
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function d3GetAfterStepTemplate()
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $mappedThemeId      = $factory->getModuleConfiguration()->getMappedThemeId();
        $blUseHPStore = Registry::get(Request::class)->getRequestParameter("usehpstore");
        /** @var Basket $oBasket */
        $oBasket    = $this->getBasket();
        $sPaymentid = $oBasket->getPaymentId();

        if ($this->hasUserHPStoreData($sPaymentid) && is_null($blUseHPStore)) {
            return '@' . Constants::OXID_MODULE_ID . '/'.$mappedThemeId.'/storeduid.tpl';
        }

        return '@' . Constants::OXID_MODULE_ID . '/'.$mappedThemeId.'/order_iframe.tpl';
    }

    /**
     * Returns true if user has stored payment data
     *
     * @param $sPaymentId
     *
     * @return bool
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function hasUserHPStoreData($sPaymentId)
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        if (false == $factory->getModuleConfiguration()->isActive()) {
            $factory->getModuleConfiguration()->d3getLog()->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'module is inactive',
                'module is inactive'
            );

            return false;
        }

        // keine Anzeige gespeicherter Registrierungsdaten erlauben?
        if (false == $factory->getModuleProvider()->isUsingStoredCardData()) {
            return false;
        }

        return (bool)$this->getUserHPStoreID($sPaymentId);
    }

    /**
     * Returns id of user stored payment data
     *
     * @param $sPaymentId
     *
     * @return string
     * @throws DatabaseConnectionException
     * @throws SystemComponentException
     */
    public function getUserHPStoreID($sPaymentId)
    {
        if (! ($sUserID = Registry::getSession()->getVariable("usr"))) {
            return '';
        }

        $shopid = Registry::getConfig()->getShopId();

        return DatabaseProvider::getDb()->getOne(
            sprintf("SELECT `oxid` FROM `d3hpuid` WHERE `oxuserid` = '%s' AND `oxpaymentid` = '%s' AND `oxshopid` = '%d'", $sUserID, $sPaymentId, $shopid)
        );
    }

    /**
     * @return string
     * @throws StandardException
     * @throws d3_cfg_mod_exception
     * @throws Exception
     * @throws DatabaseConnectionException
     */
    public function d3PayWithStoreData()
    {
        /** @var Basket $oBasket */
        $oBasket    = $this->getBasket();
        $sPaymentid = $oBasket->getPaymentId();

        $blUseHPStore = Registry::get(Request::class)->getRequestParameter("usehpstore");
        if (!$this->hasUserHPStoreData($sPaymentid)) {
            return "";
        }

        if (!$blUseHPStore) {
            return "";
        }

        return $this->execute();
    }

    //</editor-fold>

    /**
     * try to execute order
     * Returns the following action
     *
     * @throws StandardException
     * @return string Return-Wert fuer weiteren Klassen-Shopaufruf
     * @throws Exception
     */
    public function execute()
    {
        ignore_user_abort();

        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        if (false == $factory->getModuleConfiguration()->isActive()) {
            $factory->getModuleConfiguration()->d3getLog()->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'module is inactive',
                'module is inactive'
            );

            return parent::execute();
        }

        try {
            /** @var Payment $mPayment */
            $mPayment = $this->getPayment();

            if (false === $mPayment) {
                $factory->getModuleConfiguration()->d3getLog()->warning(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'payment is not set, execute parent',
                    print_r(var_export($mPayment, true), true)
                );

                return parent::execute();
            }

            $mResult = true;
            if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
                $sUseHPStore = Registry::get(Request::class)->getRequestParameter("usehpstore");
                if ($this->hasUserHPStoreData($mPayment->getId()) && $sUseHPStore) {
                    $this->d3LoadHeidelpayStoreData($sUseHPStore);

                    return parent::execute();
                }

                $oHeidelPayment = $factory->getSettings()->getPayment($mPayment);

                /** @var Order $controllerFacade */
                $controllerFacade = oxNew(
                    Order::class,
                    Registry::get(Registry::class),
                    $factory->getModuleConfiguration(),
                    $factory
                );
                $mResult          = $controllerFacade->execute($oHeidelPayment);

                $factory->getModuleConfiguration()->d3getLog()->info(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'Unzer Order return value',
                    print_r(var_export($mResult, true), true)
                );
            }

            if (true === $mResult || $factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
                $factory->getModuleConfiguration()->d3getLog()->info(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'execute parent::execute'
                );
                return parent::execute();
            }

            if (is_string($mResult)) {
                $urlparameter = $this->d3GetHeidelpayURLParameter();
                $urlparameter = http_build_query($urlparameter, '', '&');

                return $mResult . ('&' . $urlparameter);
            }
        } catch (StandardException $standardException) {
            foreach ($this->d3HeidelpayExceptionRoutings as $className => $d3HeidelpayExceptionRouting) {
                if ($standardException::class === $className) {
                    return $this->$d3HeidelpayExceptionRouting($standardException);
                }
            }

            $factory->getModuleConfiguration()->d3getLog()->error(
                self::class,
                __FUNCTION__,
                __LINE__,
                'unexpected exception',
                $standardException::class . PHP_EOL . $standardException->getMessage() . PHP_EOL . $standardException->getTraceAsString()
            );
        }

        /** @var StandardException $exception */
        oxNew(StandardException::class, Registry::getLang()->translateString('d3heidelpay_execute_error'));
        Registry::get(UtilsView::class)->addErrorToDisplay($standardException);

        $factory->getModuleConfiguration()->d3getLog()->error(
            self::class,
            __FUNCTION__,
            __LINE__,
            'exceptional handling',
            "the module couldn't interpret the shop actions. Possible reasons are: ".PHP_EOL
            . '1. return of parent method OrderController::execute returns a invalid value'.PHP_EOL
            . '2. in the parent method OrderController::execute has thrown a unknown exception'
        );

        return '';
    }

    /**
     * @return array
     * @throws SystemComponentException
     */
    protected function d3GetHeidelpayURLParameter()
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        return $factory->getModuleProvider()->getAdditionalUrlParameter();
    }

    /**
     * @return array
     * @throws SystemComponentException
     */
    public function d3GetHeidelpayPostparameter()
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);
        return $factory->getModuleProvider()->getOrderExecutePostFields();
    }

    /**
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function d3ValidateTransactionlogParameters()
    {
        $d3TransactionLogId = Registry::get(Request::class)->getRequestParameter('d3trlgid');
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'Validate Transactionlog Parameters',
            '$d3TransactionLogId is ' . $d3TransactionLogId
        );

        /** @var Order $controllerFacade */
        $controllerFacade = oxNew(
            Order::class,
            Registry::get(Registry::class),
            $factory->getModuleConfiguration(),
            $factory
        );

        $return = $controllerFacade->validateTransactionlogParameters($this, $d3TransactionLogId);

        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'return of Validate Transactionlog Parameters',
            'return is ' . empty($return) !== '' ? 'order' : $return
        );

        return $return;
    }

    /**
     * @param $templateName
     *
     * @return string
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function d3GetTemplateName($templateName)
    {
        if (!is_string($templateName)) {
            return '';
        }

        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $mappedThemeId = $factory->getModuleConfiguration()->getMappedThemeId();

        return '@' . Constants::OXID_MODULE_ID . '/'.$mappedThemeId.'/'.$templateName.'.tpl';
    }

    /**
     * @return null
     * @throws PaymentNotReferencedToUnzerException
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function getHeidelpayEasyCreditInformations()
    {
        /** @var Basket $basket */
        $basket    = $this->getBasket();
        $sPaymentid = $basket->getPaymentId();

        /** @var Factory $factory */
        $factory   = oxNew(Factory::class);
        $settings = $factory->getSettings();

        /** @var Payment $payment */
        $payment  = oxNew(Payment::class);
        $payment->load($sPaymentid);
        if (false == $factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
            return null;
        }

        $heidelpayment = $settings->getPayment($payment);

        if ($heidelpayment instanceof Easycredit) {
            /** @var d3transactionlog $transaction */
            $transaction = $factory->getLatestTransactionByObject();

            if (false === ($transaction instanceof ReaderHeidelpay)) {
                return null;
            }

            /** @var Criterions $criterionContainer */
            /** @var ReaderHeidelpay $reader */
            $reader = $transaction->getTransactiondata();
            $criterionContainer = oxNew(Criterions::class, oxNew(Criterions\Easycredit::class));

            return $criterionContainer->getSelectedCriterions($reader->getCriterionTags());
        }

        return null;
    }

    /**
     * @param int $iSuccess
     *
     * @return mixed|string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function getNextStep($iSuccess)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $d3Log = $factory->getModuleConfiguration()->d3getLog();
        if (false == $factory->getModuleConfiguration()->isActive()) {
            $d3Log->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'module is inactive',
                'module is inactive'
            );

            return parent::getNextStep($iSuccess);
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            $sPaymentid = $this->getBasket()->getPaymentId();
            /** @var Payment $payment */
            $payment = oxNew(Payment::class);
            $heidelPaySettings = $factory->getSettings();

            if ($payment->load($sPaymentid) && $heidelPaySettings->isAssignedToHeidelPayment($payment) &&
                $iSuccess === OxidOrder::ORDER_STATE_ORDEREXISTS &&
                Registry::getSession()->getVariable(Constants::MGW_ORDERINPROGRESS)
            ) {
                $result = 'payment?payerror=2';
                $d3Log->info(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: nextStep: '. $result
                );
                return $result;
            }

            Registry::getSession()->deleteVariable( OrderAlias::MGW_ORDERINPROGRESS);
            $result = parent::getNextStep($iSuccess);

            $d3Log->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'mgw: nextStep: '. $result
            );

            if (false !== stristr($result, 'thankyou')) {
                /** @var Payment $payment */
                $payment = $this->getPayment();
                if (false === $payment || false === $factory->getSettings()->isAssignedToHeidelPayment($payment)) {
                    $d3Log->info(
                        self::class,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: get next step parent: no payment assigned or found',
                        sprintf('success: %d, payment: ', $iSuccess) . var_export($payment, true)
                    );
                    return $result;
                }

                $orderId = $this->getBasket()->getOrderId();
                /** @var OrderAlias $order */
                $order = oxNew(OxidOrder::class);
                if (empty($orderId) || false == $order->load($orderId)) {
                    $d3Log->error(
                        self::class,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: order not found or order id is empty',
                        sprintf('success: %d, orderid: ', $iSuccess) . var_export($orderId, true) . PHP_EOL
                        . "Normally, the ID of the generated purchase order is saved in the session.". PHP_EOL
                        . ('If this is not the case, please check third-party modules to make sure if the method "' . Basket::class . '::getOrderId()" is affected.')
                    );

                    return $result;
                }

                $order->assign([
                    'oxtransstatus' => $factory::HeidelpayOrderStatePending,
                ]);
                $type = "pending";

                $order->save();
                $d3Log->info(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: order set to '.$type,
                    sprintf('ordernr: %s, orderid: %s', $order->getFieldData('oxordernr'), $orderId)
                );

                /** @var MgwOrder $controllerFacade */
                $controllerFacade = oxNew(MgwOrder::class, $factory);
                $heidelPayment    = $factory->getSettings()->getPayment($payment);
                $session          = $factory->getOxidProvider()->getSession();
                $getParameter     = '?stoken='.$session->getSessionChallengeToken();
                try {
                    $d3Log->info(
                        self::class,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: begin execute payment'
                    );
                    $mResult =
                        $controllerFacade->execute(
                            $heidelPayment,
                            $order,
                            $this->getViewConfig()->getModuleUrl(
                                'd3unzer',
                                $heidelPayment->getResponseFile()
                            ).$getParameter
                        );

                    $d3Log->info(
                        self::class,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: end execute payment',
                        'result: ' . $mResult
                    );
                } catch (UnzerApiException $exception) {
                    $d3Log->error(
                        self::class,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: unexpected exception',
                        $exception->getClientMessage().PHP_EOL.$exception->getMerchantMessage()
                    );
                    /** @var D3UnzerApiException $standardException */
                    $standardException = oxNew(D3UnzerApiException::class, $exception->getClientMessage());

                    return $this->d3HeidelpayRouteToPayment($standardException);
                }

                if (Factory::RESPONSE_REDIRECT === $mResult) {
                    $redirectUrl = $controllerFacade->getRedirectUrl();
                    $d3Log->info(
                        self::class,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: goToExternalSite',
                        $redirectUrl
                    );
                    $session->setVariable($factory::HeidelpayOrderResultSessionName, $result);
                    Registry::getUtils()->redirect($redirectUrl, false);
                }
            }

            return $result;
        }

        if ($iSuccess === 'Show3DSecureFrame') {
            $sTemplateFor3DSecure = 'd3_unzer_views_azure_tpl_order_3ds_iframe.tpl';

            $d3Log->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'next step is Show3DSecureFrame',
                "set return: 'order?fnc=Show3DSecureFrame&heidelpaytemplate=" . $sTemplateFor3DSecure . "'"
            );

            return 'order?fnc=Show3DSecureFrame&heidelpaytemplate=' . $sTemplateFor3DSecure;
        }

        $sReturn = parent::getNextStep($iSuccess);

        /** @var Order $controllerFacade */

        $controllerFacade = oxNew(
            Order::class,
            Registry::get(Registry::class),
            $factory->getModuleConfiguration(),
            $factory
        );

        $mNextStep = $controllerFacade->getNextOrderStep($sReturn, $iSuccess);

        $d3Log->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'return value',
            sprintf('success: %d, sReturn: %s, nextstep: ', $iSuccess, $sReturn) . var_export($mNextStep, true)
        );

        return $mNextStep;
    }

    /**
     *
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3HeidelpayRouteToUser(StandardException $exception)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'exception handling',
            $exception::class.PHP_EOL.$exception->getMessage().PHP_EOL.$exception->getTraceAsString()
        );

        return 'user';
    }

    /**
     *
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3HeidelpayRouteToPayment(StandardException $exception)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'exception handling',
            $exception::class.PHP_EOL.$exception->getMessage().PHP_EOL.$exception->getTraceAsString()
        );
        if (oxNew(Factory::class)->getModuleProvider()->isShowServiceErrors()) {
            return "payment?payerror=-1&payerrortext=" . $exception->getMessage();
        }

        return "payment?payerror=2";
    }

    /**
     *
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3HeidelpayRouteToOrder(StandardException $exception)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'exception handling',
            $exception::class.PHP_EOL.$exception->getMessage().PHP_EOL.$exception->getTraceAsString()
        );

        return '';
    }

    /**
     *
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3HeidelpayRouteToOrderWithAGBError(StandardException $exception)
    {
        $this->_blConfirmAGBError = 1;

        return $this->d3HeidelpayRouteToOrder($exception);
    }

    /**
     *
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3HeidelpayRouteToParentExecute(StandardException $exception)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'exception handling',
            $exception::class.PHP_EOL.$exception->getMessage().PHP_EOL.$exception->getTraceAsString()
        );

        return parent::execute();
    }

    /**
     * @param $sUseHPStore
     *
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3LoadHeidelpayStoreData($sUseHPStore)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'load user storage data',
            $sUseHPStore
        );
        $userStoredData = $factory->getStoredDataPlain();
        if ($userStoredData->load($sUseHPStore)) {
            $userStoredData->aDynValue          = unserialize($userStoredData->d3hpuid__oxpaymentdata->rawValue);
            $userStoredData->aDynValue['oxuid'] = $userStoredData->getFieldData('oxuid');
            Registry::getSession()->setVariable('dynvalue', $userStoredData->aDynValue);
            $factory->getModuleConfiguration()->d3getLog()->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'set user storage data to session',
                print_r(var_export($userStoredData->aDynValue, true), true)
            );
        }
    }
}
