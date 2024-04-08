<?php

namespace D3\Heidelpay\Modules\Core;

use D3\Heidelpay\Models\Factory;
use D3\Heidelpay\Models\Payment\Exception\PaymentNotReferencedToHeidelpayException;
use D3\Heidelpay\Models\Verify\Input;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Registry;

/**
 */
class InputValidator extends InputValidator_parent
{
    /**
     * @param string $sPaymentId
     * @param array  $aDynvalue
     *
     * @return bool|string
     * @throws PaymentNotReferencedToHeidelpayException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     */
    public function validatePaymentInputData($sPaymentId, &$aDynvalue)
    {
        /** @var Factory $factory */
        $factory  = oxNew(Factory::class);
        if (false == $factory->getModuleConfiguration()->isActive()) {
            return parent::validatePaymentInputData($sPaymentId, $aDynvalue);
        }

        /** @var Input $oVerify */
        $oVerify = oxNew(Input::class, Registry::get(Registry::class), $sPaymentId, $aDynvalue);
        $mReturn = $oVerify->verify();

        if ('callParent' === $mReturn) {
            return parent::validatePaymentInputData($sPaymentId, $aDynvalue);
        }

        return $mReturn;
    }
}
