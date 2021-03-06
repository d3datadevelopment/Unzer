[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]
<style type="text/css">

    td.edittext.disabled{ color:darkgrey; }

    td.edittext.disabled input{ border:1px solid lightgray; }

    td.edittext table.disabled,
    td.edittext legend.disabled{ color:darkgrey; }

    table{ background-color:white; }
    .groupExp dl dt{
        font-weight:normal;
        width:35%;
        padding-left:10px;
    }

    td.edittext fieldset,
    form fieldset{
        background:none;
        border:1px solid #ccc;
        padding:0 0 5px 5px;
        border-radius:3px;
        margin-bottom:2px;
    }
    form fieldset.active {
        border-color: #1fb71f;
        border-width: 2px;
    }
</style>

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<!-- Errors and Messages -->
[{assign var='hasMultilangConfigButNoSetting' value=$oView->hasMultilangConfigButNoSetting()}]
[{if $hasMultilangConfigButNoSetting}]
    <fieldset>
        <div class="extension_error">
            [{oxmultilang ident="D3DYN_HEIDELPAY_HASMULTILANGCONFIGBUTNOSETTING"}]
            [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_HASMULTILANGCONFIGBUTNOSETTING"}]
        </div>
        <form action="[{$oViewConf->getSelfLink()}]" method="post" id="multipleLanguages">
            [{$oViewConf->getHiddenSid()}]
            <input type="hidden" name="oxid" value="[{$oxid}]">
            <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
            <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
            <input type="hidden" name="fnc" value="">

            <table width="100%">
                <colgroup>
                    <col width="50%">
                    <col width="50%">
                </colgroup>
                <tr>
                    <td align="center">
                        <span class="d3modcfg_btn fixed icon status_info" style="float:right;max-width:none;">
                            <input type="submit" value="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES_REACTIVATE"}]"
                                   onclick="document.getElementById('multipleLanguages').fnc.value='resetAllowMultipleLanguages'">
                            <span></span>
                        </span>
                    </td>
                    <td align="center">
                        <span class="d3modcfg_btn fixed icon status_info" style="max-width:none;">
                            <input type="submit" class="edittext" value="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_REMOVEMULTIPLELANGUAGES"}]"
                                   onclick="document.getElementById('multipleLanguages').fnc.value='deleteMultiLangConfig'">
                            <span></span>
                        </span>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
[{/if}]

[{if $oHeidelpayViewConfig->isModuleDemoVersion()}]
    [{assign var='sDisableTestModus' value='disabled'}]
    <div class="extension_warning">[{oxmultilang ident="D3_HEIDELPAY_IS_DEMO"}]</div>
[{/if}]
[{if $edit->getErrorMessage()}]
    <div class="extension_error">[{$edit->getErrorMessage()}]</div>
[{/if}]
[{if $oView->hasOnlyBasicFunctions()}]
    [{assign var="blBasicRestriction" value="disabled"}]
    <div class="extension_warning">[{oxmultilang ident="D3_HEIDELPAY_RESTRICTIONINFO"}]</div>
[{/if}]
[{if $blCurlMissing}]
    <span style="color: red; ">[{oxmultilang ident="D3DYN_HEIDELPAY_NOCURL"}]</span>
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>
<form name="myedit" id="myedit" action="[{$oViewConf->getSelfLink()}]" method="post">
                [{$oViewConf->getHiddenSid()}]
                <input type="hidden" name="cl" value="[{$oViewConf->getActiveClassName()}]">
                <input type="hidden" name="fnc" value="">
                <input type="hidden" name="oxid" value="[{$oxid}]">
                <input type="hidden" name="editval[d3_cfg_mod__oxid]" value="[{$oxid}]">
                <input type="hidden" name="editlanguage" value="[{$editlanguage}]">

                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td class="edittext">
                            <b>[{oxmultilang ident="D3DYN_HEIDELPAY_ACTIVE"}]</b>
                        </td>
                        <td class="edittext">
                            [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_ACTIVE"}]
                            <input type="hidden" name="editval[d3_cfg_mod__oxactive]" value="0">
                            <input type="checkbox"
                                   class="editinput"
                                   name="editval[d3_cfg_mod__oxactive]"
                                   value="1"
                                   title="[{oxmultilang ident="D3DYN_HEIDELPAY_ACTIVE"}]"
                                   [{if $edit->d3_cfg_mod__oxactive->value == 1}]checked[{/if}]>
                        </td>
                    </tr>
                    <tr>
                        <td class="edittext">
                            [{oxmultilang ident="D3DYN_HEIDELPAY_TESTMOD_ACTIVE"}]
                        </td>
                        <td class="edittext">
                            [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_TESTMOD_ACTIVE"}]
                            <input type="hidden" name="value[d3_cfg_mod__d3heidelpay_blTestmode]" value="0" [{$sDisableTestModus}]>
                            <input type="checkbox"
                                   class="editinput"
                                   name="value[d3_cfg_mod__d3heidelpay_blTestmode]"
                                   value="1"
                                   title="[{oxmultilang ident="D3DYN_HEIDELPAY_TESTMOD_ACTIVE"}]"
                                   [{if $edit->getValue('d3heidelpay_blTestmode') == 1}]checked[{/if}] [{$sDisableTestModus}]>
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td class="edittext">
                            [{oxmultilang ident="D3HEIDELPAY_INTERFACE_TYPE"}]
                        </td>
                        <td class="edittext">
                            [{oxinputhelp ident="HELP_D3HEIDELPAY_INTERFACE_TYPE"}]
                            <select
                                    name="value[d3_cfg_mod__heidelpayInterfaceType]"
                                    title="[{oxmultilang ident="D3HEIDELPAY_INTERFACE_TYPE"}]">
                                <option value="ngw"
                                        [{if ($heidelpayInterfaceType == "ngw")}]selected[{/if}]>
                                    [{oxmultilang ident="D3HEIDELPAY_INTERFACE_TYPE_NGW"}]
                                </option>
                                <option value="mgw"
                                        [{if ($heidelpayInterfaceType == "mgw")}]selected[{/if}]>
                                    [{oxmultilang ident="D3HEIDELPAY_INTERFACE_TYPE_MGW"}]
                                </option>
                            </select>
                        </td>
                    </tr>
                    [{include file="d3_heidelpay_views_admin_tpl_settings_`$heidelpayInterfaceType`.tpl"}]
                    <tr><td colspan="2"><br></td></tr>
                    <tr>
                        <td class="edittext"></td>
                        <td class="edittext">
                            <br>
                            <input type="submit"
                                   class="edittext"
                                   name="save"
                                   value="[{oxmultilang ident="GENERAL_SAVE"}]"
                                   onClick="document.myedit.fnc.value='save'" [{$readonly}]>
                        </td>
                    </tr>
                </table>
            </form>

[{if $blRefreshList}]
    [{oxscript add="top.oxid.admin.updateList();"}]
[{/if}]

[{oxscript add='function _groupExp(el) {
    var _cur = el.parentNode;
    if (_cur.className == "exp") {
        _cur.className = "";
    } else {
        _cur.className = "exp";
    }
}'}]

[{include file="d3_cfg_mod_inc.tpl"}]
[{* NOTE: open div for oxids closing div ^^ *}]
<div>
    [{include file="bottomitem.tpl"}]
