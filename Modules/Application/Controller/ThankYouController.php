<?php

namespace D3\Unzer\Modules\Application\Controller;

use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use ReflectionClass;
use D3\Unzer\Application\Model\Constants;
use D3\Unzer\Application\Model\Factory;
use D3\Unzer\Application\Model\Payment\Exception\PaymentNotReferencedToUnzerException;
use D3\Unzer\Application\Model\Payment\Ideal;
use D3\Unzer\Application\Model\Payment\Eps;
use D3\Unzer\Application\Model\Payment\Przelewy24;
use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use Doctrine\DBAL\DBALException;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Application\Model\Payment as OxidPayment;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\SystemComponentException;
use OxidEsales\Eshop\Core\Registry;
use stdClass;

/**
 */
class ThankYouController extends ThankYouController_parent
{
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

        $templateExtension = ContainerFactory::getInstance()->getContainer()
                                             ->getParameter('oxid_esales.templating.engine_template_extension');

        /** @var Factory $factory */
        $factory       = oxNew(Factory::class);
        $mappedThemeId = $factory->getModuleConfiguration()->getMappedThemeId();
        if ($factory->getModuleProvider()->isHeidelpayInterfaceMGWRestActive()) {
            return '@' . Constants::OXID_MODULE_ID . '/'.$mappedThemeId.'/mgw/'.$templateName.'.'.$templateExtension;
        }

        // NGW
        return '@' . Constants::OXID_MODULE_ID . '/'.$mappedThemeId.'/'.$templateName.'.'.$templateExtension;
    }

    /**
     * @return bool|stdClass|void|null
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws PaymentNotReferencedToUnzerException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     * @throws StandardException
     * @throws SystemComponentException
     */
    public function init()
    {
        // get basket we might need some information from it here
        $oBasket = Registry::getSession()->getBasket();
        $oBasket->setOrderId(Registry::getSession()->getVariable('sess_challenge'));

        // copying basket object
        $this->_oBasket = clone $oBasket;
        /** @var Factory $factory */
        $factory   = oxNew(Factory::class);

        if (false == $factory->getModuleConfiguration()->isActive()) {
            parent::init();
            return;
        }

        /** @var \D3\Unzer\Modules\Application\Model\Order $order */
        $order = $this->getOrder();
        if (false === $order) {
            parent::init();
            return;
        }

        $session           = $factory->getOxidProvider()->getSession();
        $wasMailSurpressed = $session->getVariable($factory::HeidelpaySurpressEmailStateSessionName);
        if ($order instanceof Order && $wasMailSurpressed) {
            $oBasket = $this->d3FixNotBuyableState($oBasket);

            $sendingResult = $order->d3HeidelpaySendOrderByEmail($oBasket, $this->getUser());

            $this->d3ResetFixedNotBuyableState($oBasket);

            if ($sendingResult === Order::ORDER_STATE_MAILINGERROR) {
                $this->_sMailError = true;
            }

            $session->deleteVariable($factory::HeidelpaySurpressEmailStateSessionName);
            $session->deleteVariable($factory::HeidelpayPaymentIdSessionName);
            $session->deleteVariable($factory::HeidelpayOrderResultSessionOrderID);
            $session->deleteVariable($factory::HeidelpayResourceIdSessionName);
            $session->deleteVariable($factory::HeidelpayCustomerIdSessionName);
        }

        /** @var OxidPayment $payment */
        $payment  = oxNew(OxidPayment::class);
        $payment->load($order->getFieldData('oxpaymenttype'));

        if (false == $payment->isLoaded() || false == $factory->getChannelProvider()->isOxPaymentIdAssignedToChannel($payment->getId())) {
            parent::init();
            return;
        }

        $settings = $factory->getSettings();
        $heidelpayment = $settings->getPayment($payment);

        if (false == ($heidelpayment instanceof Ideal || $heidelpayment instanceof Eps || $heidelpayment instanceof Przelewy24)) {
            parent::init();
            return;
        }

        // is module active + payment assigned
        $temp             = $order->getFieldData('oxordernr');
        $shouldSetOrderNr = false == $temp;

        if (false == $shouldSetOrderNr) {
            parent::init();
            return;
        }

        $placeholder      = 'heidelpayPlaceholder';
        $order->assign(['oxordernr' => $placeholder]);

        parent::init();

        $order = $this->getOrder();
        if ($placeholder === $order->getFieldData('oxordernr')) {
            $parameter = [
                $order->getFieldData('oxid'),
                $temp
            ];

            $query = <<<MySQL
SELECT 1 FROM oxorder WHERE oxid = ? AND oxordernr = ?
MySQL;

            $order->assign(['oxordernr' => $temp]);
            if (false === DatabaseProvider::getDb()->getOne($query, $parameter)) {
                $order->save();
            }
        }
    }

    /**
     * bei "wenn ausverkauft offline / nicht bestellbar" Artikel der Lagerstand auf 0 geht, kann dieser Artikel nicht mehr
     * als buyable geladen werden, er fehlt dann in der Bestellbestätigungsmail
     * wir manipulieren den isBuybaleStatus für diesen Fall und resetten diesen später wieder mit d3ResetFixedNotBuyableState
     */
    protected function d3FixNotBuyableState($oBasket)
    {
        $basketContents = $oBasket->getContents();

        foreach ($basketContents as $basketItem) {
            $article = $basketItem->getArticle();
            $article->setBuyableState(true);

            $reflection = new ReflectionClass($article);
            $property = $reflection->getProperty('_blNotBuyableParent');
            $property->setAccessible(true);
            $property->setValue($article, false);
        }

        return $oBasket;
    }

    protected function d3ResetFixedNotBuyableState($oBasket)
    {
        foreach ($oBasket->getContents() as $item) {
            $reflection = new ReflectionClass($item);
            $property = $reflection->getProperty('_oArticle');
            $property->setAccessible(true);
            $property->setValue($item, null);
        }

        return $oBasket;
    }
}
