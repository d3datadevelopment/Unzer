[{d3modcfgcheck modid='d3unzer'}]
[{/d3modcfgcheck}]

[{if $mod_d3unzer && $d3heidelpayErrorCodes && $oHeidelpayViewConfig->getPaymentError() == -99}]
    [{include file=$oView->d3GetMessageTemplateName()}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]
