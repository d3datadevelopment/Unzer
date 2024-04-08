<?php

namespace D3\Unzer\Modules\Core;

use D3\Unzer\Application\Model\Constants;
use OxidEsales\Eshop\Core\Registry;

/**
 */
class Email extends Email_parent
{
    /**
     * Sends customer Unzer information e-mail
     *
     * @param $oOrder
     *
     * @return bool
     */
    public function d3SendCustHPPPInfoMail($oOrder)
    {
        //sets language of order
        $iOrderLang = (int)($oOrder->oxorder__oxlang->value ?? 0);

        // shop info
        $oShop = $this->getShop($iOrderLang);

        $this->setMailParams($oShop);

        // create messages
        $renderer = $this->getRenderer();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->processViewArray();

        $this->setBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_cust.tpl', $this->getViewData()));
        $this->setAltBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/plain/prepayment_cust.tpl', $this->getViewData()));
        $this->setSubject($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_cust_subj.tpl', $this->getViewData()));

        $sEMailAdress = $oOrder->oxorder__oxbillemail->value;

        $sFullName = $oOrder->oxorder__oxbillfname->value . " " . $oOrder->oxorder__oxbilllname->value;

        $this->setRecipient($sEMailAdress, $sFullName);
        $this->setReplyTo($oShop->oxshops__oxinfoemail->value, $oShop->oxshops__oxname->value);
        $this->setFrom($oShop->oxshops__oxinfoemail->value, $oShop->oxshops__oxname->getRawValue());

        return $this->send();
    }

    public function d3SendOwnerPartlyPaidInfoMail($oOrder)
    {
        $oOrder->blDifferentAmount      = true;

        //sets language of order
        $iOrderLang = (int)($oOrder->oxorder__oxlang->value ?? 0);

        // shop info
        $oShop = $this->getShop($iOrderLang);

        $this->setMailParams($oShop);

        // create messages
        $renderer = $this->getRenderer();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->processViewArray();

        $this->setBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/partlypaid_owner.tpl', $this->getViewData()));
        $this->setAltBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/plain/partlypaid_owner.tpl', $this->getViewData()));
        $this->setSubject($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/partlypaid_owner_subj.tpl', $this->getViewData()));

        $user = $oOrder->getOrderUser();
        $language = Registry::getLang();
        if ($user->oxuser__oxusername->value != "admin") {
            $fullName = $user->oxuser__oxfname->getRawValue() . " " . $user->oxuser__oxlname->getRawValue();
            $this->setReplyTo($user->oxuser__oxusername->value, $fullName);
        }

        $this->setRecipient($oShop->oxshops__oxowneremail->value, $language->translateString("order"));
        $this->setFrom($oShop->oxshops__oxinfoemail->value, $oShop->oxshops__oxname->getRawValue());

        return $this->send();
    }

    public function d3SendOwnerChargeBackInfoMail($oOrder)
    {
        //sets language of order
        $iOrderLang = (int)($oOrder->oxorder__oxlang->value ?? 0);

        // shop info
        $oShop = $this->getShop($iOrderLang);

        $this->setMailParams($oShop);

        // create messages
        $renderer = $this->getRenderer();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->processViewArray();

        $this->setBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/chargeback_owner.tpl', $this->getViewData()));
        $this->setAltBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/plain/chargeback_owner.tpl', $this->getViewData()));
        $this->setSubject($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/chargeback_owner_subj.tpl', $this->getViewData()));

        $user = $oOrder->getOrderUser();
        $language = Registry::getLang();
        if ($user->oxuser__oxusername->value != "admin") {
            $fullName = $user->oxuser__oxfname->getRawValue() . " " . $user->oxuser__oxlname->getRawValue();
            $this->setReplyTo($user->oxuser__oxusername->value, $fullName);
        }

        $this->setRecipient($oShop->oxshops__oxowneremail->value, $language->translateString("order"));
        $this->setFrom($oShop->oxshops__oxinfoemail->value, $oShop->oxshops__oxname->getRawValue());

        return $this->send();
    }

    /**
     * Sends owner  Unzer information e-mail
     *
     * @param $oOrder
     *
     * @return bool
     */
    public function d3SendOwnerHPPPInfoMail($oOrder)
    {
        //sets language of order
        $iOrderLang = (int)($oOrder->oxorder__oxlang->value ?? 0);

        // shop info
        $oShop = $this->getShop($iOrderLang);

        $this->setMailParams($oShop);

        // create messages
        $renderer = $this->getRenderer();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->processViewArray();

        $this->setBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_owner.tpl', $this->getViewData()));
        $this->setAltBody($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/plain/prepayment_owner.tpl', $this->getViewData()));
        $this->setSubject($renderer->renderTemplate('@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_owner_subj.tpl', $this->getViewData()));

        $this->setRecipient($oShop->oxshops__oxinfoemail->value, "");
        $sEmailAddress = $oShop->oxshops__oxowneremail->value;

        $this->setFrom($sEmailAddress, "");
        $this->setReplyTo($sEmailAddress, "");

        return $this->send();
    }

    /**
     * @param $subject
     * @param $message
     * @param $recipient
     *
     * @return bool
     */
    public function d3SendNotificationToShopOwner($subject, $message, $recipient)
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
        $this->setFrom($recipient, "");
        $this->setReplyTo($recipient, "");

        return $this->send();
    }
}
