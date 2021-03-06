<?php

namespace D3\Heidelpay\Modules\Application\Controller;

use D3\Heidelpay\Models\Factory;
use D3\Heidelpay\Models\Parameter\Group\CompanyData;
use D3\Heidelpay\Models\Payment\Btobbillpurchase;
use D3\Heidelpay\Models\Payment\Directdebit;
use D3\Heidelpay\Models\Payment\Directdebit\Secured as DirectdebitSecured;
use D3\Heidelpay\Models\Payment\Easycredit;
use D3\Heidelpay\Models\Payment\Exception\PaymentNotReferencedToHeidelpayException;
use D3\Heidelpay\Models\Payment\Ideal;
use D3\Heidelpay\Models\Payment\Eps;
use D3\Heidelpay\Models\Payment\Invoice\Secured;
use D3\Heidelpay\Models\Payment\Invoice\Unsecured;
use D3\Heidelpay\Models\Payment\Payment as HeidelpayAbstractPayment;
use D3\Heidelpay\Models\Payment\Paypal;
use D3\Heidelpay\Models\Payment\Przelewy24;
use D3\Heidelpay\Models\Transactionlog\Reader\Heidelpay as ReaderHeidelpay;
use D3\Heidelpay\Models\Viewconfig;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Log\d3log;
use D3\ModCfg\Application\Model\Transactionlog\d3transactionlog;
use Doctrine\DBAL\DBALException;
use UnzerSDK\Exceptions\UnzerApiException;
use OxidEsales\Eshop\Application\Model\Address;
use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\Eshop\Application\Model\Country;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Application\Model\Payment;
use OxidEsales\Eshop\Application\Model\Shop;
use OxidEsales\Eshop\Application\Model\User;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;
use OxidEsales\Eshop\Core\UtilsView;
use OxidEsales\Eshop\Core\ViewHelper\JavaScriptRegistrator;
use OxidEsales\Eshop\Core\ViewHelper\StyleRegistrator;

/**
 */
class PaymentController extends PaymentController_parent
{
    /**
     * @var array
     */
    protected $d3HeidelpayMissingUserParameter = [];

    /**
     * Initiate and register module classes
     * intitiate reference number
     * reset payment success
     *
     * @return void
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function init()
    {
        parent::init();
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        $d3log = $factory->getModuleConfiguration()->d3getLog();
        if (false == $factory->getModuleConfiguration()->isActive()) {
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'module is inactive',
                'module is inactive'
            );

            return;
        }

        $this->d3HeidelpaySetErrorMessage($factory);
        $factory->initReferenceNumber();
        $factory->resetPaymentSuccess();
        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
            $oHeidelpayViewConfig = oxNew(
                Viewconfig::class,
                $factory->getModuleConfiguration(),
                Registry::get(Registry::class),
                $factory
            );
            $this->addTplParam('oHeidelpayViewConfig', $oHeidelpayViewConfig);
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            $session = $factory->getOxidProvider()->getSession();
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: begin session cleanup',
                'HeidelpayPaymentIdSessionName: ' . $session->getVariable($factory::HeidelpayPaymentIdSessionName) . PHP_EOL .
                'HeidelpayOrderResultSessionOrderID: ' . $session->getVariable($factory::HeidelpayOrderResultSessionOrderID) . PHP_EOL .
                'HeidelpayResourceIdSessionName: ' . $session->getVariable($factory::HeidelpayResourceIdSessionName) . PHP_EOL .
                'HeidelpayCustomerIdSessionName: ' . $session->getVariable($factory::HeidelpayCustomerIdSessionName) . PHP_EOL
            );

            $orderId = $session->getVariable($factory::HeidelpayOrderResultSessionOrderID);
            if($orderId) {
                /** @var Order $order */
                $order = oxNew(Order::class);
                $message = "Order: $orderId was not deleted";
                if($order->delete($orderId)) {
                    $message = "Order: $orderId was deleted";
                }
                $d3log->log(
                    d3log::INFO,
                    __CLASS__,
                    __FUNCTION__,
                    __LINE__,
                    $message
                );
            }

            $session->deleteVariable($factory::HeidelpayPaymentIdSessionName);
            $session->deleteVariable($factory::HeidelpayOrderResultSessionOrderID);
            $session->deleteVariable($factory::HeidelpayResourceIdSessionName);
            $session->deleteVariable($factory::HeidelpayCustomerIdSessionName);
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: end session cleanup'
            );

            $paymentList = $this->getPaymentList();
            $user        = $this->getUser();
            if ($user && is_array($paymentList) && 1 <= count($paymentList)) {
                $heidelPaymentList  = $factory->getHeidelPaymentList($paymentList);
                $userInputValidator = $factory->getUserInputValidator($user, $heidelPaymentList);
                $missingParameter   = $userInputValidator->getMissingParameter();

                if (false === empty($missingParameter)) {
                    $this->d3HeidelpayMissingUserParameter = $missingParameter;
                }
            }
        }

        $paymentId = Registry::getSession()->getBasket()->getPaymentId();
        if (empty($paymentId)) {
            return;
        }

        /** @var Payment $payment */
        $payment = oxNew(Payment::class);
        if (false == $payment->load($paymentId)) {
            return;
        }

        if ($factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
            Registry::getSession()->deleteVariable('sess_challenge');
        }
    }

    /**
     * @param Factory $factory
     *
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function d3HeidelpaySetErrorMessage(Factory $factory)
    {
        $oldReference = $factory->getReferenceNumber();
        if ($oldReference) {
            $oTransAction = $factory->getLatestTransactionByReference($oldReference);
            if ($oTransAction instanceof d3transactionlog) {
                /** @var ReaderHeidelpay $reader */
                $reader = $oTransAction->getTransactiondata();
                if ($reader->getResult() === "NOK" && $reader->getReturncode()) {
                    $string      = 'd3heidelpay_' . $reader->getReturncode();
                    $translation = Registry::getLang()->translateString($string);

                    if ($translation === $string) {
                        $factory->getModuleConfiguration()->d3getLog()->log(
                            d3log::ERROR,
                            __CLASS__,
                            __FUNCTION__,
                            __LINE__,
                            'Translation not found: ' . $string,
                            $string
                        );
                        $translation = Registry::getLang()->translateString('d3heidelpay_execute_error');
                    }

                    $exception = oxNew(StandardException::class, $translation);
                    Registry::get(UtilsView::class)->addErrorToDisplay($exception);
                }
            }
        }
    }

    /**
     * Injects the Trusted Shops Excellence protection into the POST superglobal
     *
     * @return mixed
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function validatePayment()
    {
        $return = parent::validatePayment();

        if (empty($return) || false === stristr($return, 'order')) {
            return $return;
        }

        $paymentId = $this->getD3PaymentId();

        /** @var Payment $payment */
        $payment = oxNew(Payment::class);
        $payment->load($paymentId);

        /** @var Factory $factory */
        $factory           = oxNew(Factory::class);

        $session = $factory->getOxidProvider()->getSession();
        $session->deleteVariable($factory::HeidelpaySurpressEmailStateSessionName);
        if (false == $factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
            return $return;
        }

        $heidelPaySettings = $factory->getSettings();
        //<editor-fold desc="NGW - part">
        $oxUser = $this->getUser();
        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
            $heidelPayment = $heidelPaySettings->getPayment($payment);
            if ($heidelPayment instanceof Secured
                || $heidelPayment instanceof Unsecured
                || $heidelPayment instanceof DirectdebitSecured
            ) {
                $birthdate = Registry::get(Request::class)->getRequestParameter('d3birthdate');

                if ($this->d3HasInvalidBirthdateInput($birthdate, $paymentId)) {
                    // log message
                    $factory->getModuleConfiguration()->d3getLog()->log(
                        d3log::WARNING,
                        __CLASS__,
                        __FUNCTION__,
                        __LINE__,
                        'birthdate is empty but required',
                        'user didn\'t set the birthdate for invoice payment. input: ' . var_export($birthdate, true)
                    );
                    $this->_sPaymentError = 1;

                    return null;
                }

                $oxUser->assign(
                    ['oxbirthdate' => $birthdate[$paymentId]]
                );

                $oxUser->save();

                return $return;
            }

            if ((
                $heidelPayment instanceof Easycredit
                    || $heidelPayment instanceof Przelewy24
                    || $heidelPayment instanceof Ideal
                || $heidelPayment instanceof Eps
                    || $heidelPayment instanceof Paypal
                    || $heidelPayment instanceof DirectdebitSecured
                    || $heidelPayment instanceof Secured
                ) && false == Registry::get(Request::class)->getRequestParameter('paymentid')
            ) {
                return false;
            }

            if ($heidelPayment instanceof Easycredit) {
                return $this->handleD3HeidelpayEasyCredit($paymentId);
            }

            if ($heidelPayment instanceof Btobbillpurchase) {
                return $this->handleD3HeidelpayBtobbillpurchase($paymentId);
            }
        }
        //</editor-fold>

        if($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            $d3log = $factory->getModuleConfiguration()->d3getLog();
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: begin validate payment'
            );

            $heidelPayment = $heidelPaySettings->getPayment($payment);
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: payment is '.$heidelPayment->getPaymentMethod()
            );

            if($heidelPayment->isMGWPayment()) {
                /** @var Request $request */
                $request         = oxNew(Request::class);
                if($heidelPayment instanceof DirectdebitSecured || $heidelPayment instanceof Directdebit) {
                    $isSepaValidated = (bool)($request->getRequestParameter('heidelpaySepaValidation')[$paymentId]);
                    if(false == $isSepaValidated) {
                        return 'payment?d3heidelpaysepamandatnotchecked=1';
                    }
                }

                $heidelpayResult = $request->getRequestParameter('heidelpay-result');
                $d3log->log(
                    d3log::INFO,
                    __CLASS__,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: payment result',
                    var_export($heidelpayResult, true)
                );
                $reader = $factory->getMgwReader();
                $reader->read($heidelpayResult);
                $heidelpayCustomerId = $reader->getCustomerReference();
                if(empty($heidelpayCustomerId)) {
                    $d3log->log(
                        d3log::INFO,
                        __CLASS__,
                        __FUNCTION__,
                        __LINE__,
                        'no customer ID recieved'
                    );
                    $heidelpayCustomerId = $this->d3UpdateHeidelpayCustomer(
                        $oxUser,
                        $factory
                    );
                    $d3log->log(
                        d3log::INFO,
                        __CLASS__,
                        __FUNCTION__,
                        __LINE__,
                        'create customer + ID recieved',
                        $heidelpayCustomerId
                    );
                }
                $session->setVariable($factory::HeidelpayCustomerIdSessionName, $heidelpayCustomerId);

                $heidelpayResourceId = $reader->getId();
                if(empty($heidelpayResourceId)) {
                    $d3log->log(
                        d3log::ERROR,
                        __CLASS__,
                        __FUNCTION__,
                        __LINE__,
                        'no resource ID received'
                    );
                    /** @var StandardException $exception */
                    $exception = oxNew(StandardException::class, $factory->getOxidProvider()->getLang()->translateString('d3heidelpay_execute_error'));
                    $factory->getOxidProvider()->getRegistry()->getUtilsView()->addErrorToDisplay($exception);

                    return false;
                }

                // update customer with missing fields and send to heidelpay
                $missingParameter         = $this->getD3HeidelpayMissingUserData();
                $wasCustomerFormDisplayed = $this->d3ShowCustomerForm(
                    $factory,
                    (bool)trim($oxUser->getFieldData('oxcompany'))
                );

                if (false == empty($missingParameter[$paymentId]) && false == $wasCustomerFormDisplayed) {
                    $oxUser->assign($missingParameter[$paymentId]);
                    $oxUser->save();

                    //set customer heidelpay resource id in session
                    $this->d3UpdateHeidelpayCustomer(
                        $oxUser,
                        $factory,
                        $heidelpayCustomerId
                    );
                }

                $this->avoidEmptyCustomerName($factory, $heidelpayCustomerId, $oxUser, $d3log);

                $d3log->log(
                    d3log::INFO,
                    __CLASS__,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: set resourceID in session',
                    var_export($heidelpayResourceId, true)
                );
                $factory->getOxidProvider()->getSession()->setVariable(Factory::HeidelpayResourceIdSessionName, $heidelpayResourceId);

                if ($oxUser->hasAccount()) {
                    $d3log->log(
                        d3log::INFO,
                        __CLASS__,
                        __FUNCTION__,
                        __LINE__,
                        'mgw: save d3hpuid',
                        'payment id: ' . $paymentId

                    );
                    $userStoredData = $factory->getStoredDataPlain();

                    $result = $factory->getMgwResourceHandler()->saveResource(
                        $userStoredData, $reader, $oxUser->getId(), $paymentId
                    );
                    if (false === $result) {
                        $d3log->log(
                            d3log::WARNING,
                            __CLASS__,
                            __FUNCTION__,
                            __LINE__,
                            'mgw: d3hpuid entry couldn\'t saved'

                        );
                    }
                }

                $d3log->log(
                    d3log::INFO,
                    __CLASS__,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: send user to order'
                );
                return 'order';
            }
        }

        return $return;
    }

    /**
     * @return mixed
     */
    protected function getD3PaymentId()
    {
        $paymentId = Registry::get(Request::class)->getRequestParameter('paymentid');
        if (empty($paymentId)) {
            $paymentId = $this->getSession()->getVariable('paymentid');
        }

        return $paymentId;
    }

    /**
     * @return array
     */
    protected function getD3HeidelpayMissingUserData()
    {
        return (array)Registry::get(Request::class)->getRequestParameter('d3HeidelpayMissingUserData');
    }

    /**
     * @param $birthdate
     * @param $paymentId
     *
     * @return bool
     */
    protected function d3HasInvalidBirthdateInput($birthdate, $paymentId)
    {
        return empty($birthdate)
            || empty($birthdate[$paymentId])
            || empty($birthdate[$paymentId]['day'])
            || empty($birthdate[$paymentId]['month'])
            || empty($birthdate[$paymentId]['year']);
    }

    /**
     * @param $paymentId
     *
     * @return string
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function handleD3HeidelpayEasyCredit($paymentId)
    {
        $easycreditTransactionIds = Registry::get(Request::class)->getRequestParameter(
            'd3heidelpayEasycreditTransactionLogid'
        );

        if (false == is_array($easycreditTransactionIds) || empty($easycreditTransactionIds[$paymentId])) {
            return 'payment?d3heidelpayeasycreditnotchecked=1';
        }

        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $transactionlog = oxNew(d3transactionlog::class, oxNew(ReaderHeidelpay::class));
        if (false == $transactionlog->load($easycreditTransactionIds[$paymentId])) {
            $factory->getModuleConfiguration()->d3getLog()->log(
                d3log::ERROR,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'could not load d3transactionlog',
                'd3transactionlogid: ' . var_export($easycreditTransactionIds[$paymentId], true)
            );

            return 'payment?paymenterror=-99';
        }

        /** @var ReaderHeidelpay $response */
        $response    = $transactionlog->getTransactiondata();
        $redirectUrl = $response->getRedirecturl();

        if (empty($redirectUrl)) {
            $factory->getModuleConfiguration()->d3getLog()->log(
                d3log::ERROR,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'redirect url is empty:' . $redirectUrl,
                var_export($response, true)
            );

            return 'payment?paymenterror=-99';
        }

        $factory->getModuleConfiguration()->d3getLog()->log(
            d3log::INFO,
            __CLASS__,
            __FUNCTION__,
            __LINE__,
            'redirect customer to url:' . $redirectUrl,
            $redirectUrl
        );
        Registry::getConfig()->pageClose();
        Registry::getUtils()->redirect($redirectUrl, false, 302);

        return '';
    }

    /**
     * @param Payment $payment
     * @param string  $mappedThemeId
     *
     * @return string
     * @throws PaymentNotReferencedToHeidelpayException
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function d3GetPaymentFormTemplateName(Payment $payment, $mappedThemeId = '')
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);
        if (empty($mappedThemeId)) {
            $mappedThemeId = $factory->getModuleConfiguration()->getMappedThemeId();
        }

        $mappedThemeId = strtolower($mappedThemeId);

        /** @var Factory $factory */
        $factory              = oxNew(Factory::class);
        /** @var Viewconfig $heidelpayViewConfig */
        $heidelpayViewConfig = oxNew(
            Viewconfig::class,
            $factory->getModuleConfiguration(),
            Registry::get(Registry::class),
            $factory
        );
        $settings = $heidelpayViewConfig->getSettings();
        $return   = $this->d3GetDefaultPaymentFormTemplateName($payment);
        if ($factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
            $heidelpayPayment = $settings->getPayment($payment);
            $result           = $heidelpayPayment->getTemplateName($mappedThemeId, $factory->getModuleProvider()->getHeidelpayInterfaceType());
            if (false == empty($result)) {
                return $result;
            }
        }

        return $return;
    }

    /**
     * @param Payment $oPayment
     *
     * @return string
     */
    public function d3GetDefaultPaymentFormTemplateName(Payment $oPayment)
    {
        $sPaymentId = $oPayment->getId();

        if ($sPaymentId == "oxidcashondel") {
            return "page/checkout/inc/payment_oxidcashondel.tpl";
        } elseif ($sPaymentId == "oxidcreditcard") {
            return "page/checkout/inc/payment_oxidcreditcard.tpl";
        } elseif ($sPaymentId == "oxiddebitnote") {
            return "page/checkout/inc/payment_oxiddebitnote.tpl";
        } else {
            return "page/checkout/inc/payment_other.tpl";
        }
    }

    /**
     * @param Payment $oPayment
     *
     * @return bool
     * @throws PaymentNotReferencedToHeidelpayException
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function d3IsHeidelpayPaymentMethode(Payment $oPayment)
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        return $factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($oPayment->getId());
    }

    /**
     * @return string
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws SystemComponentException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    public function render()
    {
        $mReturn = parent::render();
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        //<editor-fold desc="NGW - way">
        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
            $this->addTplParam('blD3HeidelpayEasycreditNotChecked', $this->isEasyCreditConsentNotConfirmed());
            $this->addTplParam('iD3HeidelpayEasycreditLimits', $this->getEasyCreditLimits());
            $this->addTplParam(
                'blD3HeidelpayAllowEasyCredit',
                $this->isHeidelpayEasycreditAllowed(Registry::getSession()->getBasket())
            );
            $basket = Registry::getSession()->getBasket();

            $blD3HeidelpayAllowBtoBBillPurchase = $this->isHeidelpayBtoBBillPurchaseAllowed($basket);

            $this->addTplParam('blD3HeidelpayAllowBtoBBillPurchase', $blD3HeidelpayAllowBtoBBillPurchase);
            $this->addTplParam('iD3HeidelpayBtoBBillPurchaseLimits', $this->getBtoBBillPurchaseLimits());
            $this->addTplParam('blD3HeidelpayAllowPostFinance', $this->isPaymentAllowedForCountryAndCurrency('CH', 'CHF'));
            $this->addTplParam('blD3HeidelpayAllowPrzelewy24', $this->isPaymentAllowedForCountryAndCurrency('PL', 'PLN'));
            $this->addTplParam('blD3HeidelpayAllowIdeal', $this->isPaymentAllowedForCountryAndCurrency('NL', 'EUR'));
        $this->addTplParam('blD3HeidelpayAllowEPS', $this->isPaymentAllowedForCountryAndCurrency('AT', 'EUR'));
            $this->addTplParam('iD3HeidelpayInvoiceSecuredLimits', $this->getInvoiceSecuredLimits());
            $this->addTplParam('blD3HeidelpayHasSameAdresses', $this->d3HeidelpayHasSameAdresses());
            $this->addTplParam(
                'blD3HeidelpayAllowInvoiceSecured',
                $this->isHeidelpayInvoiceSecuredAllowed(Registry::getSession()->getBasket())
            );
            $this->addTplParam(
                'd3HeidelpayParameters',
                $this->getSession()->getVariable('d3HeidelpayParameters')
            );

            $this->addHeidelpayFormularParameter();
        }
        //</editor-fold>

        //<editor-fold desc="MGW - way">
        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive() && $this->hasD3HeidelpayMGWAssignments()) {
            $factory->getModuleConfiguration()->d3getLog()->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: begin set frontend parameter'
            );
            $this->d3AddHeidelpayCorsHeader();
            $this->d3AddHeidelpayFrontendResources();
            $this->addTplParam('d3HeidelpayPublicKey', $factory->getModuleProvider()->getMgwPublicKey());
            $this->addTplParam('d3HeidelpayLanguageLocale', $factory->getLanguageLocale());
            $oxUser         = $this->getUser();
            $userStoredData = $factory->getMgwResourceHandler()->loadUserStoredData(
                $oxUser->getId(),
                $this->getConfig()->getShopId()
            );
            $this->addTplParam('d3HeidelpayResourceIds', $userStoredData);
            $this->addTplParam(
                'd3HeidelpayShowSepaGuranteedCustomerFormular',
                $this->d3ShowCustomerForm($factory, (bool)trim($oxUser->getFieldData('oxcompany')))
            );
            $this->addTplParam('d3HeidelpayMissingUserParameter', $this->d3HeidelpayMissingUserParameter);
            $this->addTplParam('d3HeidelpayMappedThemeId', $factory->getModuleConfiguration()->getMappedThemeId());

            $factory->getModuleConfiguration()->d3getLog()->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: end set frontend parameter'
            );
            $translateString = $factory->getOxidProvider()->getLang()->translateString(
                'D3HEIDELPAY_PAYMENT_MGW_SEPA_MANDAT_TEXT'
            );

            $shopId         = $factory->getOxidProvider()->getConfig()->getShopId();
            /** @var Shop $shop */
            $shop = oxNew(Shop::class);
            $shop->load($shopId);
            $translateString = str_replace('{NAME_OF_MERCHANT}', $shop->getFieldData('oxcompany'), $translateString);
            $this->addTplParam('d3HeidelpaySepaMandatText', $translateString);
            $this->addTplParam('isD3HeidelpaySepaMandatNotConfirmed', $this->isSepaMandatNotConfirmed());
        }

        //</editor-fold>

        return $mReturn;
    }

    /**
     * @return bool
     */
    protected function isEasyCreditConsentNotConfirmed()
    {
        return (bool)Registry::get(Request::class)->getRequestParameter('d3heidelpayeasycreditnotchecked');
    }

    /**
     * @return bool
     */
    protected function isSepaMandatNotConfirmed()
    {
        return (bool)Registry::get(Request::class)->getRequestParameter('d3heidelpaysepamandatnotchecked');
    }

    /**
     * @param Basket $oxBasket
     *
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function isHeidelpayEasycreditAllowed(Basket $oxBasket)
    {
        if (false == $this->isPaymentAllowedForCountryAndCurrency('DE', 'EUR')) {
            return false;
        }

        /** @var Easycredit $easyCreditPayment */
        $easyCreditPayment = oxNew(Easycredit::class, 'TODO: get the correct oxPaymentId');

        if (false == $this->isHeidelpayBasketAmountInLimits($oxBasket, $easyCreditPayment)) {
            return false;
        }

        $basketUser       = $oxBasket->getBasketUser();
        $possiblePSFields = array('oxfname', 'oxlname', 'oxstreet', 'oxstreetnr', 'oxcity');

        foreach ($possiblePSFields as $field) {
            if (false === stristr(strtolower($basketUser->getFieldData($field)), 'packstation')) {
                continue;
            }

            return false;
        }

        return true;
    }

    /**
     * @param $sCountryIsoAlpha2
     * @param $sCurrencyName
     *
     * @return bool
     * @throws SystemComponentException
     */
    public function isPaymentAllowedForCountryAndCurrency($sCountryIsoAlpha2, $sCurrencyName)
    {
        $sCountryId = $this->getUser()->getFieldData('oxcountryid');

        /** @var $oCountry Country * */
        $oCountry = oxNew(Country::class);
        if ($oCountry->load($sCountryId) && $oCountry->getFieldData('oxisoalpha2') == $sCountryIsoAlpha2 //
            && $this->getActCurrency()->name == $sCurrencyName
        ) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     * @throws SystemComponentException
     */
    protected function d3HeidelpayHasSameAdresses()
    {
        $oDelAdress = $this->getD3HeidelpayDeliveryAddress();
        if (false === $oDelAdress->isLoaded()) {
            return true;
        }
        $oUser = $this->getUser();

        $userAdress = array(
            $oUser->getFieldData('oxfname'),
            $oUser->getFieldData('oxlname'),
            $oUser->getFieldData('oxcompany'),
            $oUser->getFieldData('oxstreet'),
            $oUser->getFieldData('oxstreetnr'),
            $oUser->getFieldData('oxzip'),
            $oUser->getFieldData('oxcity')
        );

        $deliverAdress = array(
            $oDelAdress->getFieldData('oxfname'),
            $oDelAdress->getFieldData('oxlname'),
            $oDelAdress->getFieldData('oxcompany'),
            $oDelAdress->getFieldData('oxstreet'),
            $oDelAdress->getFieldData('oxstreetnr'),
            $oDelAdress->getFieldData('oxzip'),
            $oDelAdress->getFieldData('oxcity')
        );

        if ($userAdress == $deliverAdress) {
            return true;
        }

        return false;
    }

    /**
     * @param Basket $oxBasket
     *
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function isHeidelpayInvoiceSecuredAllowed(Basket $oxBasket)
    {
        if (false == $this->d3HeidelpayHasSameAdresses()) {
            return false;
        }

        /** @var Secured $InvoicePayment */
        $InvoicePayment = oxNew(Secured::class, 'TODO: get the correct oxPaymentId');

        return $this->isHeidelpayBasketAmountInLimits($oxBasket, $InvoicePayment);
    }

    /**
     * @return string
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    public function d3GetMessageTemplateName()
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        $sTemplate = $factory->getModuleConfiguration()->getMappedThemeId();

        return "d3_heidelpay_views_{$sTemplate}_tpl_messages.tpl";
    }

    /**
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    protected function addHeidelpayFormularParameter()
    {
        $d3hpPaymentFormulars = [];

        $paymentList = $this->getPaymentList();

        /** @var Factory $factory */
        $factory = oxNew(Factory::class);
        $settings = $factory->getSettings();
        try {
            foreach ($paymentList as $paymentId => $payment) {
                /** @var $payment Payment */
                if ($factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
                    $d3hpPaymentFormulars[$paymentId] = $settings->getPayment($payment)->getFormularParameter();
                }
            }
        } catch (StandardException $exception) {
        }

        $this->addTplParam('d3hpPaymentFormulars', $d3hpPaymentFormulars);
    }

    /**
     * @param $paymentId
     *
     * @return bool
     * @throws StandardException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    protected function handleD3HeidelpayBtobbillpurchase($paymentId)
    {
        /** @var Request $request */
        $request             = oxNew(Request::class);
        $heidelpayParameters = $request->getRequestParameter('d3heidelpay');
        if (false == isset($heidelpayParameters[$paymentId])) {
            // fehlende Parameter
            return false;
        }
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);

        $birthdateParameters = [$paymentId => $heidelpayParameters[$paymentId]['COMPANY.EXECUTIVE.1.BIRTHDATE']];
        if (strtolower(CompanyData::COMPANYDATA_REGISTERED) !== strtolower($heidelpayParameters[$paymentId]['COMPANY.REGISTRATIONTYPE'])
            && $this->d3HasInvalidBirthdateInput($birthdateParameters, $paymentId)) {
            $factory->getModuleConfiguration()->d3getLog()->log(
                d3log::WARNING,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'birthdate is empty but required',
                'user didn\'t set the birthdate for payment. input: '.var_export($birthdateParameters[$paymentId], true)
            );
            $this->_sPaymentError = 1;

            return false;
        }

        //write data in Session
        $this->getSession()->setVariable('d3HeidelpayParameters', $heidelpayParameters);

        return 'order';
    }

    /**
     * @param Basket                   $oxBasket
     * @param HeidelpayAbstractPayment $payment
     *
     * @return bool
     * @throws SystemComponentException
     */
    protected function isHeidelpayBasketAmountInLimits(Basket $oxBasket, HeidelpayAbstractPayment $payment)
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        $oxPrice  = $oxBasket->getPrice();
        $price    = $oxPrice->getPrice();
        $minPrice = $payment->getMinimumLimit($factory->getModuleProvider());
        $maxPrice = $payment->getMaximumLimit($factory->getModuleProvider());

        if (false == ($price >= $minPrice && $maxPrice >= $price)) {
            return false;
        }

        return true;
    }

    /**
     * @param Basket $basket
     *
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    protected function isHeidelpayBtoBBillPurchaseAllowed(Basket $basket)
    {
        $isInGermanyAllowed = $this->isPaymentAllowedForCountryAndCurrency('DE', $basket->getBasketCurrency()->name);
        $isInAustriaAllowed = $this->isPaymentAllowedForCountryAndCurrency('AT', $basket->getBasketCurrency()->name);
        /** @var Btobbillpurchase $bToBBillPurchase */
        $bToBBillPurchase = oxNew(Btobbillpurchase::class, 'TODO: get the correct oxPaymentId');

        return ($isInGermanyAllowed || $isInAustriaAllowed) && $this->isHeidelpayBasketAmountInLimits($basket, $bToBBillPurchase);
    }

    /**
     * @return array
     * @throws SystemComponentException
     */
    protected function getEasyCreditLimits()
    {
        /** @var Easycredit $easyCreditPayment */
        $easyCreditPayment = oxNew(Easycredit::class, 'TODO: get the correct oxPaymentId');
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        return [
            $easyCreditPayment->getMinimumLimit($factory->getModuleProvider()),
            $easyCreditPayment->getMaximumLimit($factory->getModuleProvider())
        ];
    }

    /**
     * @return array
     * @throws SystemComponentException
     */
    protected function getInvoiceSecuredLimits()
    {
        /** @var Secured $invoiceSecurePayment */
        $invoiceSecurePayment = oxNew(Secured::class, 'TODO: get the correct oxPaymentId');
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        return [
            $invoiceSecurePayment->getMinimumLimit($factory->getModuleProvider()),
            $invoiceSecurePayment->getMaximumLimit($factory->getModuleProvider())
        ];
    }

    /**
     * @return array
     * @throws SystemComponentException
     */
    protected function getBtoBBillPurchaseLimits()
    {
        /** @var Btobbillpurchase $btobbillpurchase */
        $btobbillpurchase = oxNew(Btobbillpurchase::class, 'TODO: get the correct oxPaymentId');
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        return [
            $btobbillpurchase->getMinimumLimit($factory->getModuleProvider()),
            $btobbillpurchase->getMaximumLimit($factory->getModuleProvider())
        ];
    }

    /**
     * @return bool
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws SystemComponentException
     */
    protected function hasD3HeidelpayMGWAssignments()
    {
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);
        if (false === $factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            return false;
        }

        $settings    = $factory->getSettings();
        $paymentList = $this->getPaymentList();
        try {
            foreach ($paymentList as $paymentId => $payment) {
                /** @var $payment Payment */
                if ($settings->isAssignedToHeidelPayment($payment)) {
                    return true;
                }
            }
        } catch (StandardException $exception) {
        }

        return false;

    }

    protected function d3AddHeidelpayCorsHeader()
    {
        Registry::getUtils()->setHeader("Access-Control-Allow-Origin: https://payment.heidelpay.com");
    }

    /**
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws SystemComponentException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    protected function d3AddHeidelpayFrontendResources()
    {
        /** @var StyleRegistrator $styleRegistrator */
        $styleRegistrator = oxNew(StyleRegistrator::class);
        $styleRegistrator->addFile('https://static.heidelpay.com/v1/heidelpay.css', null, false);

        $fileTime = filemtime($this->getViewConfig()->getModulePath('d3heidelpay', 'out/src/css/d3heidelpayMGW.css'));
        $fileUrl  = $this->getViewConfig()->getModuleUrl('d3heidelpay', 'out/src/css/d3heidelpayMGW.css');
        if ($fileTime) {
            $fileUrl .= "?$fileTime";
        }
        $styleRegistrator->addFile($fileUrl, null, false);

        /** @var JavaScriptRegistrator $javaScriptRegistrator */
        $javaScriptRegistrator = oxNew(JavaScriptRegistrator::class);
        $javaScriptRegistrator->addFile('https://static.heidelpay.com/v1/heidelpay.js', 3, false);

        $fileTime = filemtime($this->getViewConfig()->getModulePath('d3heidelpay', 'out/src/js/d3heidelpay.js'));
        $fileUrl  = $this->getViewConfig()->getModuleUrl('d3heidelpay', 'out/src/js/d3heidelpay.js');
        if ($fileTime) {
            $fileUrl .= "?$fileTime";
        }

        $javaScriptRegistrator->addFile($fileUrl, 3, false);
    }

    /**
     * @return Address
     * @throws SystemComponentException
     */
    protected function getD3HeidelpayDeliveryAddress()
    {
        if (false == ($deliveryOxid = Registry::get(Request::class)->getRequestParameter('deladrid'))) {
            $deliveryOxid = Registry::getSession()->getVariable('deladrid');
        }
        /** @var Address $adress */
        $adress = oxNew(Address::class);
        if (empty($deliveryOxid) || false === $adress->load($deliveryOxid)) {
            return $adress;
        }

        //get delivery country name from delivery country id
        if ($adress->oxaddress__oxcountryid->value && -1 != $adress->oxaddress__oxcountryid->value) {
            /** @var Country $country */
            $country = oxNew(Country::class);
            if ($country->load($adress->oxaddress__oxcountryid->value)) {
                $adress->oxaddress__oxcountry = clone $country->oxcountry__oxtitle;
            }
        }

        return $adress;
    }

    /**
     * @todo 2020-07-05 Kristian Hempel: move this into a MgwPaymentController
     *
     * @param User    $oxUser
     * @param Factory $factory
     * @param string  $heidelpayCustomerId
     *
     * @return string|null
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws SystemComponentException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    protected function d3UpdateHeidelpayCustomer(
        User $oxUser,
        Factory $factory,
        $heidelpayCustomerId = ""
    ) {
        $currentCustomerId  = '';
        $customerInterface = $factory->getCustomerHeidelpayInterface(
            $oxUser,
            $this->getD3HeidelpayDeliveryAddress(),
            (bool)trim($oxUser->getFieldData('oxcompany')),
            $heidelpayCustomerId
        );

        $d3log             = $factory->getModuleConfiguration()->d3getLog();
        try {
            $newCustomerInterface = $factory->getHeidelpayInterface()
                ->createOrUpdateCustomer($customerInterface);
            $currentCustomerId = $newCustomerInterface->getId();
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: set customer ID in session',
                var_export($currentCustomerId, true)
            );
            $factory->getOxidProvider()->getSession()->setVariable(
                Factory::HeidelpayCustomerIdSessionName,
                $currentCustomerId
            );
        } catch (UnzerApiException $e) {
            $d3log->log(
                d3log::ERROR,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: update customer failed',
                'merchant message: ' . $e->getMerchantMessage()
            );
        }

        return $currentCustomerId;
    }

    public function d3ShowCustomerForm($factory, $isB2bUser = false)
    {
        if ($isB2bUser) {
            return true;
        }

        return $factory->getModuleProvider()->showSepaGuranteedCustomerFormular();
    }

    /**
     * @param Factory $factory
     * @param         $heidelpayCustomerId
     * @param User    $oxUser
     * @param d3log   $d3log
     *
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws SystemComponentException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    protected function avoidEmptyCustomerName(Factory $factory, $heidelpayCustomerId, User $oxUser, d3log $d3log)
    {
        try {
            $heidelpayInterface = $factory->getHeidelpayInterface();
            $customerInterface  = $heidelpayInterface->fetchCustomerByExtCustomerId($heidelpayCustomerId);
            $names              = [
                strtolower($customerInterface->getFirstname()),
                strtolower($customerInterface->getLastname())
            ];
            if (in_array('unknown', $names) || in_array('', $names)) {
                $customerInterface->setFirstname($oxUser->getFieldData('oxfname'));
                $customerInterface->setLastname($oxUser->getFieldData('oxlname'));
                $customerInterface->setSalutation(strtolower($oxUser->getFieldData('oxsal')));
                $customerInterface = $heidelpayInterface->createOrUpdateCustomer($customerInterface);
                $factory->getOxidProvider()->getSession()->setVariable(
                    Factory::HeidelpayCustomerIdSessionName,
                    $customerInterface->getId()
                );
            }
        } catch (UnzerApiException $e) {
            $d3log->log(
                d3log::INFO,
                __CLASS__,
                __FUNCTION__,
                __LINE__,
                'mgw: update customer failed',
                var_export($e->getMessage(), true)
            );
        }
    }
}
