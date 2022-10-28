<?php

namespace D3\Heidelpay\Modules\Core;

use OxidEsales\Eshop\Core\Registry;
use Smarty;

/**
 */
class Email extends Email_parent
{
    /**
     * Sends customer heidelpay information e-mail
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
        $oShop = $this->_getShop($iOrderLang);

        $this->_setMailParams($oShop);

        // create messages
        /** @var Smarty $smarty */
        $smarty = $this->_getSmarty();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->_processViewArray();

        $this->d3AssignSmartyVars($smarty);

        $this->setBody($smarty->fetch('d3_heidelpay_views_tpl_email_html_prepayment_cust.tpl'));
        $this->setAltBody($smarty->fetch('d3_heidelpay_views_tpl_email_plain_prepayment_cust.tpl'));
        $this->setSubject($smarty->fetch('d3_heidelpay_views_tpl_email_html_prepayment_cust_subj.tpl'));

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
        $oShop = $this->_getShop($iOrderLang);

        $this->_setMailParams($oShop);

        // create messages
        /** @var Smarty $smarty */
        $smarty = $this->_getSmarty();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->_processViewArray();

        $this->d3AssignSmartyVars($smarty);

        $this->setBody($smarty->fetch('d3_heidelpay_views_tpl_email_html_partlypaid_owner.tpl'));
        $this->setAltBody($smarty->fetch('d3_heidelpay_views_tpl_email_plain_partlypaid_owner.tpl'));
        $this->setSubject($smarty->fetch('d3_heidelpay_views_tpl_email_html_partlypaid_owner_subj.tpl'));

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
        $oShop = $this->_getShop($iOrderLang);

        $this->_setMailParams($oShop);

        // create messages
        /** @var Smarty $smarty */
        $smarty = $this->_getSmarty();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->_processViewArray();

        $this->d3AssignSmartyVars($smarty);

        $this->setBody($smarty->fetch('d3_heidelpay_views_tpl_email_html_chargeback_owner.tpl'));
        $this->setAltBody($smarty->fetch('d3_heidelpay_views_tpl_email_plain_chargeback_owner.tpl'));
        $this->setSubject($smarty->fetch('d3_heidelpay_views_tpl_email_html_chargeback_owner_subj.tpl'));

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
     * Sends owner  heidelpay information e-mail
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
        $oShop = $this->_getShop($iOrderLang);

        $this->_setMailParams($oShop);

        // create messages
        /** @var Smarty $smarty */
        $smarty = $this->_getSmarty();
        $this->setViewData("order", $oOrder);

        // Process view data array through oxoutput processor
        $this->_processViewArray();

        $this->d3AssignSmartyVars($smarty);

        $this->setBody($smarty->fetch("d3_heidelpay_views_tpl_email_html_prepayment_owner.tpl"));
        $this->setAltBody($smarty->fetch("d3_heidelpay_views_tpl_email_plain_prepayment_owner.tpl"));
        $this->setSubject($smarty->fetch("d3_heidelpay_views_tpl_email_html_prepayment_owner_subj.tpl"));

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
        $oShop = $this->_getShop($iCurrLang);

        $this->_setMailParams($oShop);
        // create messages
        // Process view data array through oxoutput processor
        $this->_processViewArray();

        $this->setBody(nl2br($message));
        $this->setAltBody(strip_tags($message));
        $this->setSubject($subject);

        $this->setRecipient($recipient, "");
        $this->setFrom($recipient, "");
        $this->setReplyTo($recipient, "");

        return $this->send();
    }

    /**
     * BC for OXID >= 6.2 (with template renderer system)
     */
    protected function d3AssignSmartyVars($smarty)
    {
        foreach ($this->getViewData() as $id => $element) {
            $smarty->assign($id, $element);
        }
    }
}
