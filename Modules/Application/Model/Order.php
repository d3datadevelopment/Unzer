<?php

namespace D3\Unzer\Modules\Application\Model;

use D3\Unzer\Application\Model\Containers\Criterions;
use D3\Unzer\Application\Model\Containers\PrepaymentData;
use D3\Unzer\Application\Model\Factory;
use D3\Unzer\Application\Model\Mail;
use D3\Unzer\Application\Model\Payment\Btobbillpurchase;
use D3\Unzer\Application\Model\Payment\Easycredit;
use D3\Unzer\Application\Model\Payment\Exception\PaymentNotReferencedToUnzerException;
use D3\Unzer\Application\Model\Payment\Invoice\Secured;
use D3\Unzer\Application\Model\Payment\Invoice\Unsecured;
use D3\Unzer\Application\Model\Payment\Payment;
use D3\Unzer\Application\Model\Payment\Prepayment;
use D3\Unzer\Application\Model\Response\Parser;
use D3\Unzer\Application\Model\Transactionlog\Reader\Unzer as TransactionlogReader;
use D3\Unzer\Application\Model\Viewconfig;
use D3\Unzer\Modules\Application\Controller\PaymentController as HPPaymentController;
use D3\ModCfg\Application\Model\Configuration\d3_cfg_mod;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Transactionlog\d3transactionlog;
use Doctrine\DBAL\DBALException;
use Exception;
use OxidEsales\Eshop\Core\Exception\ArticleInputException;
use OxidEsales\Eshop\Core\Exception\NoArticleException;
use UnzerSDK\Exceptions\UnzerApiException;
use OxidEsales\Eshop\Application\Controller\PaymentController;
use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\Eshop\Application\Model\Payment as OxidPayment;
use OxidEsales\Eshop\Application\Model\User;
use OxidEsales\Eshop\Application\Model\Voucher;
use OxidEsales\Eshop\Core\Counter;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Email;
use OxidEsales\Eshop\Core\Exception\ArticleException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UtilsObject;
use stdClass;

/**
 */
class Order extends Order_parent
{
    public const MGW_ORDERINPROGRESS = 'd3_mgw_order_is_in_progress';

    protected $d3HeidelpayIsSurpressEMailSending = false;

    /**
     * Returns bank transfer data if available
     *
     * @return stdClass|false|array
     * @throws PaymentNotReferencedToUnzerException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws UnzerApiException
     */
    public function getHeidelpayBankTransferData()
    {
        /** @var Factory $factory */
        $factory   = oxNew(Factory::class);

        if (false == $factory->getModuleConfiguration()->isActive()) {
            return false;
        }

        $oSettings = $factory->getSettings();
        /** @var OxidPayment $oPayment */
        $oPayment  = oxNew(OxidPayment::class);
        $oPayment->load($this->getFieldData('oxpaymenttype'));
        if (false == $oSettings->isAssignedToHeidelPayment($oPayment)) {
            return false;
        }

        $heidelpayment = $oSettings->getPayment($oPayment);

        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive() && (
            $heidelpayment instanceof Prepayment
            || $heidelpayment instanceof Secured
            || $heidelpayment instanceof Unsecured
            || $heidelpayment instanceof Btobbillpurchase
        )
        ) {
            /** @var PrepaymentData $oPrePaymentData */
            $oPrePaymentData = oxNew(PrepaymentData::class);

            return $oPrePaymentData->getBankTransferData($this, $heidelpayment->getPaymentCode() . '.PA');
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()
            && $heidelpayment->isMGWPayment()
            && (
                $heidelpayment instanceof Prepayment
                || $heidelpayment instanceof Secured
                || $heidelpayment instanceof Unsecured
                || $heidelpayment instanceof Btobbillpurchase
            )
        ) {
            $paymentId = $this->getFieldData('oxtransid');
            if (!str_contains($paymentId, 's-pay-') && !str_contains($paymentId, 'p-pay-')) {
                return false;
            }

            try {
                $result = $factory->getMgwResourceHandler()->obtainPaymentAuthorizationByPayID($paymentId);
                if (empty($result)) {
                    $result = $factory->getMgwResourceHandler()->obtainPaymentChargesByID($paymentId);
                    $result = $result[0];
                }
            } catch (UnzerApiException $e) {
                $factory->getModuleConfiguration()->d3getLog()->error(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    "Unzer api exception: " . PHP_EOL . "client message: " . $e->getClientMessage() //
                    . PHP_EOL . "merchant message: ". $e->getMerchantMessage(),
                    var_export($e, true)
                );
            }

            return $result;
        }

        return false;
    }

    /**
     * @return null
     * @throws PaymentNotReferencedToUnzerException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function getHeidelpayEasyCreditInformations()
    {
        /** @var Factory $factory */
        $factory   = oxNew(Factory::class);

        /** @var OxidPayment $payment */
        $payment = oxNew(OxidPayment::class);
        $payment->load($this->getFieldData('oxpaymenttype'));
        if (false == $factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
            return null;
        }

        $settings = $factory->getSettings();
        $heidelpayment = $settings->getPayment($payment);

        if ($heidelpayment instanceof Easycredit) {
            /** @var d3transactionlog $transaction */
            $transaction = $factory->getLatestTransactionByObject($this);

            if (false === ($transaction instanceof d3transactionlog)) {
                return null;
            }

            /** @var TransactionlogReader $reader */
            /** @var Criterions $criterionContainer */
            $reader             = $transaction->getTransactiondata();
            $criterionContainer = oxNew(Criterions::class, oxNew(Criterions\Easycredit::class));

            return $criterionContainer->getSelectedCriterions($reader->getCriterionTags());
        }

        return null;
    }

    /**
     *
     * @return int|null
     * @throws DBALException
     * @throws Exception
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     */
    public function d3CreateTemporaryOrder(Basket $oBasket, User $oUser)
    {
        /* D3 START disabled - 03.03.2016 - KH <!--
        We can't use the session challenge for this break up.
        We need every "hotfix"- payment->toOrder a new order

        $sGetChallenge = Registry::getSession()->getVariable('sess_challenge');
        if ($this->checkOrderExist($sGetChallenge)) {
            Registry::getUtils()->logger('BLOCKER');
            // we might use this later, this means that somebody clicked like mad on order button
            return self::ORDER_STATE_ORDEREXISTS;
        }

        // if not recalculating order, use sess_challenge id, else leave old order id

        // use this ID
        $this->setId($sGetChallenge);
        --> */

        $this->setId(Registry::get(UtilsObject::class)->generateUId());

        // validating various order/basket parameters before finalizing
        $iOrderState = $this->validateOrder($oBasket, $oUser);
        if ($iOrderState) {
            return $iOrderState;
        }

        // copies user info
        $this->setUser($oUser);

        // copies basket info
        $this->loadFromBasket($oBasket);

        // payment information
        $this->setPayment($oBasket->getPaymentId());

        // set folder information, if order is new
        // #M575 in recalculating order case folder must be the same as it was

        $this->setFolder();

        //#4005: Order creation time is not updated when order processing is complete
        $this->updateOrderDate();

        // marking as not finished
        $this->setOrderStatus('PENDING');

        $aVouchers = $oBasket->getVouchers();
        /** @var Factory $factory */
        $factory = oxNew(Factory::class);
        if (count($aVouchers)) {
            $aVoucherIds  = [];
            $pendingLimit = $factory->getModuleProvider()->getPaymentCollectorOrderPendingTime();
            foreach ($aVouchers as $oStdVoucher) {
                /** @var Voucher $oVoucher */
                $oVoucher = oxNew(Voucher::class);
                if ($oVoucher->load($oStdVoucher->sVoucherId)) {
                    $aVoucherIds[$oStdVoucher->sVoucherId] = $oStdVoucher->sVoucherId;
                    $oVoucher->assign(['oxreserved' => time() + $pendingLimit * 3600]);
                    $oVoucher->save();
                }
            }

            $this->assign(['d3heidelpayvouchers' => implode('|', $aVoucherIds)]);
        }

        //saving all order data to DB
        $this->save();

        if (false == $factory->getModuleProvider()->isUsingZeroOrderNumber() && false == $this->oxorder__oxordernr->value) {
            $this->setNumber();
        }

        // set order ID for thankyou
        $oBasket->setOrderId($this->getId());
        Registry::getSession()->setVariable('sess_challenge', $this->getId());

        return null;
    }

    /**
     * @param string $sStatus
     *
     * @return void
     * @throws PaymentNotReferencedToUnzerException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    protected function setOrderStatus($sStatus)
    {
        /** @var Factory $factory */
        $factory   = oxNew(Factory::class);

        if (! $factory->getModuleConfiguration()->isActive()) {
            parent::setOrderStatus($sStatus);

            return;
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            parent::setOrderStatus($sStatus);

            return;
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
            $oDB = DatabaseProvider::getDb();

            $sOldStatus = $oDB->getOne('select oxtransstatus from oxorder where oxid="' . $this->getId() . '"');
            $sPaid      = $oDB->getOne('select oxpaid from oxorder where oxid="' . $this->getId() . '"');
            $sPaymentId = $this->getFieldData('OXPAYMENTTYPE');

            /** @var Factory $factory */
            $factory   = oxNew(Factory::class);

            /** @var OxidPayment $payment */
            $payment = oxNew(OxidPayment::class);
            $payment->load($sPaymentId);

            if (! $factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
                parent::setOrderStatus($sStatus);

                return;
            }

            $settings       = $factory->getSettings();
            $blIsPrepayment = $settings->getPayment($payment) instanceof Prepayment;
            $blIsWaiting    = $sOldStatus == 'PENDING' && $sPaid == '0000-00-00 00:00:00';
            if ($blIsPrepayment && $blIsWaiting) {
                $sStatus = "PENDING";
            }
        }

        parent::setOrderStatus($sStatus);
    }

    /**
     *
     * @return bool|int
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws Exception
     */
    public function d3FinalizeTemporaryOrder(Basket $oBasket, User $oUser)
    {
        /** @var Factory $factory */
        $factory            = oxNew(Factory::class);
        $registry           = Registry::get(Registry::class);
        $modulConfiguration = $factory->getModuleConfiguration();

        $oUserPayment = $this->setPayment($oBasket->getPaymentId());
        // executing payment (on failure deletes order and returns error code)
        // in case when recalculating order, payment execution is skipped

        $blRet = $this->executePayment($oBasket, $oUserPayment);
        if ($blRet !== true) {
            return $blRet;
        }

        if (!$this->oxorder__oxordernr->value) {
            $this->setNumber();
        } else {
            /** @var Counter $counter */
            $counter = oxNew(Counter::class);
            $counter->update($this->getCounterIdent(), $this->oxorder__oxordernr->value);
        }

        // deleting remark info only when order is finished
        Registry::getSession()->deleteVariable('ordrem');

        //#4005: Order creation time is not updated when order processing is complete
        //$this->updateOrderDate();

        // updating order trans status (success status)
        $this->setOrderStatus('OK');

        // store orderid
        $oBasket->setOrderId($this->getId());

        // updating wish lists
        $this->updateWishlist($oBasket->getContents(), $oUser);

        // updating users notice list
        $this->updateNoticeList($oBasket->getContents(), $oUser);

        // marking vouchers as used and sets them to $this->aVoucherList (will be used in order email)
        // skipping this action in case of order recalculation
        $this->markVouchers($oBasket, $oUser);

        // send order by email to shop owner and current user
        // skipping this action in case of order recalculation
        $iRet = $this->sendOrderByEmail($oUser, $oBasket, $oUserPayment);

        // the negative case shouldn't be possible
        $this->d3VerifyBasketSameAmount($oBasket, $modulConfiguration, $registry);

        return $iRet;
    }

    /**
     * TODO: outsource this in a own model
     *
     *
     * @return null
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    protected function d3VerifyBasketSameAmount(Basket $oxBasket, d3_cfg_mod $modulConfiguration, Registry $registry)
    {
        $transaction = $this->d3GetLastHeidelpayTransaction($oxBasket, $modulConfiguration);

        if (is_null($transaction)) {
            return null;
        }

        /** @var TransactionlogReader $reader */
        $reader = $transaction->getTransactiondata();
        $amount = $reader->getAmount();
        if ($amount !== $this->getTotalOrderSum()) {
            /** @var Factory $factory */
            $factory = oxNew(Factory::class);

            $transStatusError = $factory->getModuleProvider()->getOxTransStatusErrorState();
            if (empty($transStatusError)) {
                $transStatusError = 'ERROR';
            }

            $this->setD3HPTransactionStatusError($transStatusError);
            $this->d3SendHPErrorMessage($modulConfiguration, $registry, $reader, $this->getTotalOrderSum());
        }

        return null;
    }

    /**
     *
     * @return d3transactionlog|null |null
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    protected function d3GetLastHeidelpayTransaction(Basket $oxBasket, d3_cfg_mod $modulConfiguration)
    {
        /** @var OxidPayment $oPayment */
        $oPayment = oxNew(OxidPayment::class);
        $oPayment->load($oxBasket->getPaymentId());

        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        try {
            /** @var Payment $heidelPayment */
            $heidelPayment = $factory->getSettings()->getPayment($oPayment);
        } catch (PaymentNotReferencedToUnzerException) {
            return null;
        }

        if (false == $heidelPayment instanceof Payment) {
            return null;
        }

        $refrenceNumber = $factory->getReferenceNumber();
        if (empty($refrenceNumber)) {
            $modulConfiguration->d3getLog()->error(
                self::class,
                __FUNCTION__,
                __LINE__,
                "no reference but Unzer payment! payment is: " . var_export($heidelPayment, true)
            );

            return null;
        }

        $transaction = $factory->getLatestTransactionByReference($refrenceNumber);

        if (false == $transaction) {
            $modulConfiguration->d3getLog()->warning(
                self::class,
                __FUNCTION__,
                __LINE__,
                'no transaction found but Unzer payment and referencenumber',
                $refrenceNumber
            );

            return null;
        }

        return $transaction;
    }

    /**
     * @param      $transStatusError
     * @param bool $resetPaidDate
     */
    public function setD3HPTransactionStatusError($transStatusError, $resetPaidDate = true)
    {
        $aAssignment                  = [];
        $aAssignment['oxtransstatus'] = $transStatusError;
        if ($resetPaidDate) {
            $aAssignment['oxpaid'] = '0000-00-00 00:00:00';
        }

        $this->assign($aAssignment);
        $this->save();
    }

    /**
     *  TODO refactor into separate class
     *
     * @param                                                      $basketAmount
     *
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function d3SendHPErrorMessage(d3_cfg_mod $modulConfiguration, Registry $registry, TransactionlogReader $reader, $basketAmount)
    {
        $text    = $registry->getLang()->translateString(
            'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORMESSAGE',
            Registry::getLang()->getBaseLanguage(),
            true
        );
        $message = sprintf($text, $this->getFieldData('oxordernr'), $reader->getUniqueid(), $reader->getAmount(), $basketAmount);
        $message .= PHP_EOL. "ordernr: ". $this->getFieldData('oxordernr');
        $message .= PHP_EOL. "uniqueid: ". $reader->getUniqueid();
        $message .= PHP_EOL. "Unzer amount: ".$reader->getAmount();
        $message .= PHP_EOL. "basket amount: ". $basketAmount;

        $subject = $registry->getLang()->translateString(
            'D3UNZER_DIFFERENCE_IN_ORDER_SUBJECT',
            Registry::getLang()->getBaseLanguage(),
            true
        );
        $subject .= $this->getFieldData('oxordernr');

        /** @var Factory $factory */
        $factory = oxNew(Factory::class);

        /** @var Mail $email */
        $email = oxNew(Mail::class, oxNew(Email::class), $modulConfiguration, Registry::getConfig()->getActiveShop());
        $email->setSubject($subject)->setMessage($message)->sendMail($factory);
    }

    /**
     * @return Basket
     * @throws ArticleException
     * @throws ArticleInputException
     * @throws NoArticleException
     * @throws SystemComponentException
     */
    public function d3GetOrderBasket()
    {
        $this->reloadDelivery(false);
        $this->reloadDiscount(false);
        $oBasket = $this->getOrderBasket(false);

        foreach ($this->getOrderArticles() as $oOrderArticle) {
            $oBasket->addOrderArticleToBasket($oOrderArticle);
        }

        /* D3 START added - #4998 - 29.04.2016 - KH */
        $aVouchers = explode('|', $this->getFieldData('d3heidelpayvouchers'));
        $oBasket->setSkipVouchersChecking(true);
        foreach ($aVouchers as $sVoucherId) {
            $oVoucher = oxNew(Voucher::class);
            if ($oVoucher->load($sVoucherId)) {
                $oBasket->addVoucher($sVoucherId);
            }
        }

        /* D3 END   added - #4998 - 29.04.2016 - KH */

        //$oBasket->setVoucherDiscount($this->oxorder__oxvoucherdiscount->value);
        $oBasket->calculateBasket();

        foreach ($oBasket->getContents() as $oBasketItem) {
            /** @var BasketItem $oBasketItem */
            /** @var Article $oArticle */
            $oArticle = oxNew(Article::class);
            $oArticle->loadInLang($this->oxorder__oxlang->value, $oBasketItem->getArticle()->getProductId());
            $oBasketItem->d3SetArticle($oArticle);
        }

        return $oBasket;
    }

    /**
     * @param Basket $oxBasket
     * @param object $oxUser
     * @param bool   $blRecalculatingOrder
     *
     * @return int
     * @throws d3_cfg_mod_exception
     * @throws Exception
     */
    public function finalizeOrder(Basket $oBasket, $oUser, $blRecalculatingOrder = false)
    {
        /** @var Factory $factory */
        $factory            = oxNew(Factory::class);
        $registry           = $factory->getOxidProvider()->getRegistry();
        $modulConfiguration = $factory->getModuleConfiguration();

        if (false == $blRecalculatingOrder && $modulConfiguration->isActive() && $factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            $sPaymentid = $oBasket->getPaymentId();
            /** @var OxidPayment $payment */
            $payment = oxNew(OxidPayment::class);
            $heidelPaySettings = $factory->getSettings();

            if ($payment->load($sPaymentid) && $heidelPaySettings->isAssignedToHeidelPayment($payment)) {
                Registry::getSession()->setVariable(self::MGW_ORDERINPROGRESS, true);

                $factory->getModuleConfiguration()->d3getLog()->info(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: begin surpressing e-mail sendind'
                );
                $this->setD3HeidelpayIsSurpressEMailSending($factory);
                $factory->getModuleConfiguration()->d3getLog()->info(
                    self::class,
                    __FUNCTION__,
                    __LINE__,
                    'mgw: end surpressing e-mail sendind'
                );
            }
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceNGWActive()) {
            try {
                $paymentId = $oBasket->getPaymentId();
                $payment = oxNew(OxidPayment::class);
                $payment->load($paymentId);

                /** @var Viewconfig $heidelpayViewConfig */
                $heidelpayViewConfig = oxNew(
                    Viewconfig::class,
                    d3_cfg_mod::get('d3unzer'),
                    Registry::get(Registry::class),
                    $factory
                );
                $settings = $heidelpayViewConfig->getSettings();

                $heidelPayment = $settings->getPayment($payment);

                if ($heidelPayment instanceof Secured) {
                    /** @var HPPaymentController $paymentController */
                    $paymentController = oxNew(PaymentController::class);
                    if (false == $paymentController->isHeidelpayInvoiceSecuredAllowed($oBasket)) {
                        return self::ORDER_STATE_PAYMENTERROR;
                    }
                }
            } catch (PaymentNotReferencedToUnzerException) {
                // ignore exception, because it's handled already before
            }
        }


        $return             = parent::finalizeOrder($oBasket, $oUser, $blRecalculatingOrder);

        if (false == $modulConfiguration->isActive() || $registry->getConfig()->isAdmin()) {
            return $return;
        }

        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            $factory->getModuleConfiguration()->d3getLog()->info(
                self::class,
                __FUNCTION__,
                __LINE__,
                'mgw: return: '.$return
            );
            return $return;
        }

        $this->d3VerifyBasketSameAmount($oBasket, $modulConfiguration, $registry);
        $this->d3SetWaitingState($oBasket, $modulConfiguration);

        return $return;
    }

    /**
     * @param          $modulConfiguration
     *
     * @return null
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws SystemComponentException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    protected function d3SetWaitingState(Basket $basket, $modulConfiguration)
    {
        $transaction = $this->d3GetLastHeidelpayTransaction($basket, $modulConfiguration);
        if (false  == ($transaction instanceof d3transactionlog)) {
            return null;
        }

        /** @var Parser $oParser */
        $oParser = oxNew(Parser::class, $transaction->getTransactiondata());

        if ('OK' !== $this->getFieldData('oxtransstatus') || false === $oParser->isWaiting()) {
            return null;
        }

        $this->setD3HPTransactionStatusError('PENDING', true);

        return null;
    }

    protected function sendOrderByEmail($oUser = null, $oBasket = null, $oPayment = null)
    {
        $return = self::ORDER_STATE_OK;

        $this->oUser = $oUser;
        $this->oBasket = $oBasket;
        $this->oPayment = $oPayment;

        if (false == $this->d3HeidelpayIsSurpressEMailSending) {
            return parent::sendOrderByEmail($oUser, $oBasket, $oPayment);
        }

        return $return;
    }

    /**
     *
     * @return bool
     * @throws DBALException
     * @throws StandardException
     */
    public function d3HeidelpaySendOrderByEmail(Basket $basket, User $user)
    {
        $oUserPayment = $this->setPayment($basket->getPaymentId());
        /** @var Factory $factory */
        $factory            = oxNew(Factory::class);
        $factory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'mgw: send order mail'
        );
        return parent::sendOrderByEmail($user, $basket, $oUserPayment);
    }

    /**
     * @throws SystemComponentException
     */
    public function setD3HeidelpayIsSurpressEMailSending(Factory $factory)
    {
        $factory->getOxidProvider()->getSession()->setVariable($factory::HeidelpaySurpressEmailStateSessionName, true);
        $this->d3HeidelpayIsSurpressEMailSending = true;
    }

    /**
     * @param $payId
     * @param $orderId
     *
     * @throws DatabaseConnectionException
     * @throws StandardException
     */
    public function d3GetOrderByMgwPayId($payId, $orderId)
    {
        $query = "SELECT oxid FROM ".$this->getViewName()." WHERE oxtransid = ? AND oxordernr = ?";

        $oxid = DatabaseProvider::getDb()->getOne($query, [$payId, $orderId]);

        if (false == $oxid || false == $this->load($oxid)) {
            throw oxNew(StandardException::class, 'no order loadable by transid = '.$payId.' and ordernr = '.$orderId);
        }
    }
}
