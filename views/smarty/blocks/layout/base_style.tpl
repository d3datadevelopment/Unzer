[{$smarty.block.parent}]

[{if $oViewConf->getActiveClassName() == 'payment' || $oViewConf->getActiveClassName() == 'order'}]
    [{d3modcfgcheck modid='d3unzer'}]
    [{/d3modcfgcheck}]

    [{if $mod_d3unzer}]
        [{oxstyle include=$oViewConf->getModuleUrl('d3unzer', 'out/src/css/d3unzer.css')}]
    [{/if}]
[{/if}]

