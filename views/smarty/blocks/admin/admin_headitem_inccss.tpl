[{$smarty.block.parent}]
[{if $oViewConf->getActiveClassName() == 'd3_unzer_controllers_admin_adminlist'
|| $oViewConf->getActiveClassName() == 'd3_unzer_controllers_admin_order_unzer' }]
    [{assign var="sCssUrl" value=$oViewConf->getModuleUrl('d3unzer','out/src/css/d3unzer_admin.css')}]
    <link rel="stylesheet" href="[{$sCssUrl}]?236">
    <script type="text/javascript" src="[{$oViewConf->getResourceUrl()}]js/libs/jquery.min.js"></script>
[{/if}]
