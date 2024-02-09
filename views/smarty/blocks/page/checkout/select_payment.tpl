[{d3modcfgcheck modid='d3unzer'}][{/d3modcfgcheck}]

[{if $mod_d3unzer && $oView->d3IsHeidelpayPaymentMethode($paymentmethod)}]
    [{include file=$oView->d3GetPaymentFormTemplateName($paymentmethod)}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]
