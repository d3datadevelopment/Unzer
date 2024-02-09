[{d3modcfgcheck modid='d3unzer'}][{/d3modcfgcheck}][{if $mod_d3unzer }][{assign var="oPrePaymentData" value=$order->getHeidelpayBankTransferData()}]
[{assign var="easyCreditInformations" value=$order->getHeidelpayEasyCreditInformations()}]
[{if is_object($oPrePaymentData)}]##########################################################

[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_INFOTEXT1"}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_INFOTEXT2"}]

[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_ACCOUNTHOLDER"}] [{$oPrePaymentData->Holder}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_IBAN"}] [{$oPrePaymentData->Iban}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_BIC"}] [{$oPrePaymentData->Bic}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_AMOUNT"}] [{$oPrePaymentData->Amount}] [{$oPrePaymentData->Currency}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_REASON"}] [{$oPrePaymentData->Reference}]

##########################################################[{/if}]
[{if is_array($oPrePaymentData)}]##########################################################

[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_INFOTEXT1"}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_INFOTEXT2"}]

[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_ACCOUNTHOLDER"}] [{$oPrePaymentData.holder}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_IBAN"}] [{$oPrePaymentData.iban}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_BIC"}] [{$oPrePaymentData.bic}]
[{oxmultilang ident="D3UNZER_EMAIL_PREPAYMENT_AMOUNT"}] [{$oPrePaymentData.formattedAmount}] [{$oPrePaymentData.currency}]
[{if $oPrePaymentData.descriptor}][{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_REASON"}] [{$oPrePaymentData.descriptor}][{/if}]
[{if $oPrePaymentData.paymentReference}][{$oPrePaymentData.paymentReference}][{/if}]

##########################################################[{/if}]
[{if $easyCreditInformations}]##########################################################
[{oxmultilang ident="D3UNZER_ORDER_EASYCREDIT_ACCRUINGINTEREST"}] [{oxprice price=$easyCreditInformations.criterion_easycredit_accruinginterest currency=$currency}]
[{oxmultilang ident="D3UNZER_ORDER_EASYCREDIT_TOTALAMOUNT"}] [{oxprice price=$easyCreditInformations.criterion_easycredit_totalamount currency=$currency}]
[{oxmultilang ident="D3UNZER_ORDER_EASYCREDIT_LINK"}]: [{$easyCreditInformations.criterion_easycredit_precontractinformationurl}]
##########################################################[{/if}]
[{/if}]
[{$smarty.block.parent}]
