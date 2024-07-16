<?php

namespace D3\Unzer\Modules\Application\Model;

use D3\Unzer\Application\Controller\PaymentGateway as ControllerPaymentGateway;
use D3\Unzer\Application\Model\Factory;
use D3\Unzer\Application\Model\Response\Parser;
use D3\Unzer\Application\Model\Transactionlog\Reader\Unzer as TransactionlogReader;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\ModCfg\Application\Model\Transactionlog\d3transactionlog;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Application\Model\Payment;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\DatabaseException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;

/**
 */
class PaymentGateway extends PaymentGateway_parent
{
    /**
     * executes Unzer paymentgateway
     *
     * @param float  $dAmount
     * @param object $oOrder
     *
     * @return bool|int|string
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws DatabaseException
     * @throws StandardException
     * @deprecated NGW interface
     */
    public function executePayment($dAmount, &$oOrder)
    {
        /** @var Factory $oFactory */
        $oFactory = oxNew(Factory::class);
        if ($oFactory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            return parent::executePayment($dAmount, $oOrder);
        }

        /** @var ControllerPaymentGateway $oGatewayFacade */
        $oGatewayFacade = oxNew(ControllerPaymentGateway::class, $oOrder, $oFactory);

        //TODO: compose Transaction in dependency of payment and paymntcode
        $oTransAction = $oFactory->getLatestTransactionByReference($oFactory->getReferenceNumber());

        if (false == $oTransAction) {
            /** @var d3transactionlog $oTransAction */
            $oTransAction = oxNew(
                d3transactionlog::class,
                oxNew(TransactionlogReader::class),
                $oFactory->getReferenceNumber()
            );
            $oTransAction->setTransactiondata('<?xml version="1.0" encoding="UTF-8" standalone="yes"?><response/>');
        }

        /** @var Parser $oParser */
        $oParser = oxNew(Parser::class, $oTransAction->getTransactiondata());

        $mReturn = $oGatewayFacade->executePayment($this->getPayment(), $oParser);

        $oFactory->getModuleConfiguration()->d3getLog()->info(
            self::class,
            __FUNCTION__,
            __LINE__,
            'paymentgateway return value',
            print_r(var_export($mReturn, true), true)
        );

        if (ControllerPaymentGateway::PAYMENTGATEWAY_CALLPARENT === $mReturn) {
            return parent::executePayment($dAmount, $oOrder);
        }

        //payment successful
        if (true === $mReturn) {
            return $mReturn;
        }

        //wrong result -> got error / message
        $this->_iLastErrorNo = $mReturn;

        return false;
    }

    /**
     * Load and returns oxPayment object.
     *
     * @return Payment
     * @throws SystemComponentException
     */
    public function getPayment()
    {
        /** @var Payment $oPayment */
        $oPayment = oxNew(Payment::class);
        $oPayment->load($this->_oPaymentInfo->oxuserpayments__oxpaymentsid->value);

        return $oPayment;
    }
}
