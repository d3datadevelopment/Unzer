[{$smarty.block.parent}]

[{d3modcfgcheck modid='d3unzer'}][{/d3modcfgcheck}]

[{if $mod_d3unzer }]
    [{assign var="oPrePaymentData" value=$order->getHeidelpayBankTransferData()}]
    [{* deprecated there is no easycredit support anymore *}]
    [{assign var="easyCreditInformations" value=$order->getHeidelpayEasyCreditInformations()}]

    [{if $oPrePaymentData}]
        [{include file=$oView->d3GetTemplateName('banktransferdata')}]
    [{/if}]

    [{if isset($easyCreditInformations)}]
        [{assign var="currency" value=$oView->getActCurrency()}]
        [{include file=$oView->d3GetTemplateName('thankyou_easycreditcriterions') easyCreditInformations=$easyCreditInformations}]
    [{/if}]
[{/if}]
