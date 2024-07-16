<?php

namespace D3\Unzer\Modules\Core;

use D3\Unzer\Application\Model\Constants;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Core\Registry;

/**
 */
class Email extends Email_parent
{
    /**
     * Sends customer Unzer information e-mail
     *
     * @param Order $oOrder
     *
     * @return bool
     */
    public function d3SendCustHPPPInfoMail(Order $oOrder): bool
    {
        $oShop = $this->getShop((int)($oOrder->oxorder__oxlang->value ?? 0));
        $sEmailAddress = $oOrder->getFieldData('oxbillemail');

        $this->prepareUnzerMail(
            $oOrder,
            'prepayment_cust',
            'prepayment_cust',
            'prepayment_cust_subj',
            [$sEmailAddress, $oOrder->getFieldData('oxbillfname') . " " . $oOrder->getFieldData('oxbilllname')],
            [$oShop->getFieldData('oxinfoemail'), $oShop->getRawFieldData('oxname')],
            [$oShop->getFieldData('oxinfoemail'), $oShop->getRawFieldData('oxname')]
        );

        return $this->send();
    }

    public function d3SendOwnerPartlyPaidInfoMail(Order $oOrder): bool
    {
        $oOrder->blDifferentAmount      = true;

        $oShop = $this->getShop((int)($oOrder->oxorder__oxlang->value ?? 0));
        $language = Registry::getLang();
        $user = $oOrder->getOrderUser();
        $sEmailAddress = $oShop->getFieldData('oxowneremail');

        $this->prepareUnzerMail(
            $oOrder,
            'partlypaid_owner',
            'partlypaid_owner',
            'partlypaid_owner_subj',
            [$sEmailAddress, $language->translateString("order")],
            [$oShop->getFieldData('oxinfoemail'), $oShop->getRawFieldData('oxname')],
            [$user->getFieldData('oxusername'), $user->getRawFieldData('oxfname') . " " . $user->getRawFieldData('oxlname')]
        );

        return $this->send();
    }

    public function d3SendOwnerChargeBackInfoMail(Order $oOrder): bool
    {
        $oShop = $this->getShop((int)($oOrder->oxorder__oxlang->value ?? 0));
        $language = Registry::getLang();
        $user = $oOrder->getOrderUser();

        $this->prepareUnzerMail(
            $oOrder,
            'chargeback_owner',
            'chargeback_owner',
            'chargeback_owner_subj',
            [$oShop->getFieldData('oxowneremail'), $language->translateString("order")],
            [$oShop->getFieldData('oxinfoemail'), $oShop->getRawFieldData('oxname')],
            [$user->getFieldData('oxusername'), $user->getRawFieldData('oxfname') . " " . $user->getRawFieldData('oxlname')]
        );

        return $this->send();
    }

    /**
     * Sends owner  Unzer information e-mail
     *
     * @param Order $oOrder
     *
     * @return bool
     */
    public function d3SendOwnerHPPPInfoMail(Order $oOrder): bool
    {
        $oShop = $this->getShop((int)($oOrder->oxorder__oxlang->value ?? 0));
        $sEmailAddress = $oShop->getFieldData('oxowneremail');

        $this->prepareUnzerMail(
            $oOrder,
            'prepayment_owner',
            'prepayment_owner',
            'prepayment_owner_subj',
            [$oShop->getFieldData('oxinfoemail'), ""],
            [$sEmailAddress, ""],
            [$sEmailAddress, ""]
        );

        return $this->send();
    }

    protected function prepareUnzerMail(
        Order $order,
        string $bodyTpl,
        string $altBodyTpl,
        string $subjectTpl,
        array $recipient,
        array $from,
        array $reply
    ):void
    {
        //sets language of order
        $iOrderLang = (int)($order->oxorder__oxlang->value ?? 0);

        // shop info
        $oShop = $this->getShop($iOrderLang);

        $this->setMailParams($oShop);

        // create messages
        $renderer = $this->getRenderer();
        $this->setViewData("order", $order);

        // Process view data array through oxoutput processor
        $this->processViewArray();

        $this->setBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/'.$bodyTpl, $this->getViewData()));
        $this->setAltBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/plain/'.$altBodyTpl, $this->getViewData()));
        $this->setSubject($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/'.$subjectTpl, $this->getViewData()));

        $this->setRecipient($recipient[0], $recipient[1]);
        $this->setFrom($from[0], $from[1]);

        if ($reply[0] != "admin") {
            $this->setReplyTo( $reply[0], $reply[1] );
        }
    }

    /**
     * @param $subject
     * @param $message
     * @param $recipient
     *
     * @return bool
     */
    public function d3SendNotificationToShopOwner($subject, $message, $recipient): bool
    {
        $iCurrLang = (int)Registry::getLang()->getBaseLanguage();

        // shop info
        $oShop = $this->getShop($iCurrLang);

        $this->setMailParams($oShop);
        // create messages
        // Process view data array through oxoutput processor
        $this->processViewArray();

        $this->setBody(nl2br($message));
        $this->setAltBody(strip_tags($message));
        $this->setSubject($subject);

        $this->setRecipient($recipient, "");
        $this->setFrom($recipient);
        $this->setReplyTo($recipient, "");

        return $this->send();
    }
}
