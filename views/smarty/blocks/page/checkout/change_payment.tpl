[{if !$oUnzerViewConfig}]
    [{$smarty.block.parent}]
[{else}]
    [{d3modcfgcheck modid='d3unzer'}][{/d3modcfgcheck}]
    [{if $mod_d3unzer}]
        [{$smarty.block.parent}]

        [{capture name="doNotUse"}]
            <script type="text/javascript">
                [{capture name="d3JavaScriptForHeidelpay"}]
                    let ddna = $('#payment').find('dl dd').not('.activePayment');
                    ddna.find('input, select, textarea').attr('disabled', 'disabled');
                    [{* required for flow themes only*}]
                    ddna.find('.bootstrap-select, .bootstrap-select .dropdown-toggle').addClass("disabled");
                    $('#payment dl dt input[type=radio]').click(function () {
                        let dds = $('#payment').find('dd')
                        dds.find('input, select, textarea').attr('disabled', 'disabled');
                        [{* required for flow themes only*}]
                        dds.find('.bootstrap-select, .bootstrap-select .dropdown-toggle').addClass("disabled");
                        let dls = $(this).parents('dl');
                        dls.find('input, select, textarea').removeAttr('disabled');
                        [{* required for flow themes only*}]
                        dls.find('.bootstrap-select, .bootstrap-select .dropdown-toggle').removeClass('disabled');
                    });
                [{/capture}]
            </script>
        [{/capture}]

        [{oxscript add=$smarty.capture.d3JavaScriptForHeidelpay}]
    [{/if}]
[{/if}]
