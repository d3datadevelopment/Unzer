[{$smarty.block.parent}]

[{if $oViewConf->getActiveClassName() == 'payment' || $oViewConf->getActiveClassName() == 'order'}]
    [{d3modcfgcheck modid="d3heidelpay"}]
    [{/d3modcfgcheck}]

    [{if $mod_d3heidelpay}]
        [{oxstyle include=$oViewConf->getModuleUrl('d3heidelpay', 'out/src/css/d3heidelpay.css')}]
    [{/if}]
[{/if}]

