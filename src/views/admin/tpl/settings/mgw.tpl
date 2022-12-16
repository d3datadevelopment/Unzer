<tr>
    <td class="edittext">
        [{oxmultilang ident="D3HEIDELPAY_SETTINGS_MGW_DEBUGMODE"}]
    </td>
    <td class="edittext">
        [{oxinputhelp ident="HELP_D3HEIDELPAY_SETTINGS_MGW_DEBUGMODE"}]
        <input type="hidden" name="logtypes[7]" value="0">
        <input id="module_debug"
               class="editinput"
               type="checkbox"
               name="logtypes[7]"
               value="1"
               title="[{oxmultilang ident="D3HEIDELPAY_SETTINGS_MGW_DEBUGMODE"}]"
               [{if $oView->getLogStatus('debug', false)}]checked[{/if}]
        >
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_INTERNALLOG"}]
    </td>
    <td class="edittext">
        [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_INTERNALLOG"}]
        [{assign var="oLogSet" value=$oView->getLogSet()}]
        [{include file="d3loglevel_form.tpl" oLogSet=$oLogSet oModule=false}]
    </td>
</tr>
<tr>
    <td colspan="2">
        <fieldset title="[{oxmultilang ident="D3DYN_HEIDELPAY_LOGIN_LIVE_HEADER"}]">
            <legend>
                <b>[{oxmultilang ident="D3HEIDELPAY_LOGIN_MGW_HEADER"}]</b>[{oxinputhelp ident="HELP_D3HEIDELPAY_LOGIN_MGW_HEADER"}]
            </legend>
            <table style="width: 50%">
                <tr>
                    <td class="edittext">
                        [{oxmultilang ident="D3HEIDELPAY_SETTINGS_MGW_PRIVATE"}]
                    </td>
                    <td class="edittext">
                        <input type="text"
                               class="editinput"
                               name="value[d3_cfg_mod__mgwPrivateKey]"
                               id="d3_cfg_mod__mgwPrivateKey"
                               value="[{$edit->getValue('mgwPrivateKey')}]"
                               title="[{oxmultilang ident="D3HEIDELPAY_SETTINGS_MGW_PRIVATE"}]"
                               style="width: 100%"
                        >
                    </td>
                </tr>
                <tr>
                    <td class="edittext">
                        [{oxmultilang ident="D3HEIDELPAY_SETTINGS_MGW_PUBLIC"}]
                    </td>
                    <td class="edittext">
                        <input type="text"
                               class="editinput"
                               name="value[d3_cfg_mod__mgwPublicKey]"
                               id="d3_cfg_mod__mgwPublicKey"
                               value="[{$edit->getValue('mgwPublicKey')}]"
                               title="[{oxmultilang ident="D3HEIDELPAY_SETTINGS_MGW_PUBLIC"}]"
                               style="width: 100%"
                        >
                    </td>
                </tr>
            </table>
        </fieldset>
    </td>
</tr>
<tr><td colspan="2"><br></td></tr>
<tr>
    <td colspan="2">
        <fieldset>
        <legend><strong>[{oxmultilang ident="D3DYN_HEIDELPAY_EXTENDED_SETTINGS"}]</strong></legend>
        <table cellspacing="5" cellpadding="0" border="0" width="100%">
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE"}]
                </td>
                <td class="edittext">
                    [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE"}]
                    <select class="edittext"
                            name="value[d3_cfg_mod__d3heidelpay_sTransType]"
                            title="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE"}]">
                        <option value="auth">[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_DIRECT"}]</option>
                        <option value="preauth"
                                [{if ($edit->getValue("d3heidelpay_sTransType") == "preauth")}]selected[{/if}]>
                            [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_RESERVE"}]
                        </option>
                        <option value="auth_but_foreign_preauth"
                                [{if ($edit->getValue("d3heidelpay_sTransType") == "auth_but_foreign_preauth")}]selected[{/if}]>
                            [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_FOREIGNRESERVE"}]
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                    [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_PAYPAL"}]
                </td>
                <td class="edittext">
                    [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_PAYPAL"}]
                    <select class="edittext"
                            name="value[d3_cfg_mod__d3heidelpay_sVATransType]"
                            title="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_PAYPAL"}]">
                        <option value="auth">[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_DIRECT"}]</option>
                        <option value="preauth"
                                [{if ($edit->getValue("d3heidelpay_sVATransType") == "preauth")}]selected[{/if}]>
                            [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_RESERVE"}]
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                    <label for="showSepaGuranteedCustomerFormular">[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_SHOWSEPAGURANTEEDCUSTOMERFORMULAR"}]</label>
                </td>
                <td class="edittext">
                    [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_SHOWSEPAGURANTEEDCUSTOMERFORMULAR"}]
                    <input type="hidden" value="0" name="value[d3_cfg_mod__showSepaGuranteedCustomerFormular]"/>
                    <input id="showSepaGuranteedCustomerFormular" value="1" type="checkbox" name="value[d3_cfg_mod__showSepaGuranteedCustomerFormular]"
                        [{if ($edit->getValue("showSepaGuranteedCustomerFormular"))}]checked[{/if}]>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                    <label for="dontShowDirectDebitMandateCheckbox">[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_DONTSHOWDIRECTDEBITMANDATECHECKBOX"}]</label>
                </td>
                <td class="edittext">
                    [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_DONTSHOWDIRECTDEBITMANDATECHECKBOX"}]
                    <input type="hidden" value="0" name="value[d3_cfg_mod__dontShowDirectDebitMandateCheckbox]"/>
                    <input id="dontShowDirectDebitMandateCheckbox" value="1" type="checkbox" name="value[d3_cfg_mod__dontShowDirectDebitMandateCheckbox]"
                        [{if ($edit->getValue("dontShowDirectDebitMandateCheckbox"))}]checked[{/if}]>
                </td>
            </tr>
        </table>
        </fieldset>
    </td>
</tr>
<tr>
    <td colspan="2">
        <fieldset>
            <legend><strong>[{oxmultilang ident="D3HEIDELPAY_WEBHOOKS_HEADLINE"}]</strong>[{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_DONTSHOWDIRECTDEBITMANDATECHECKBOX"}]</legend>
            [{if !empty($registeredWebhooks)}]
                <table style="padding: 0; width: 100%; border-spacing: unset; border: 0">
                    <tr>
                        <th>[{oxmultilang ident="D3HEIDELPAY_WEBHOOKS_HEADLINE_URL"}]</th>
                        <th>[{oxmultilang ident="D3HEIDELPAY_WEBHOOKS_HEADLINE_EVENTS"}]</th>
                        <th>[{oxmultilang ident="D3HEIDELPAY_WEBHOOKS_HEADLINE_ID"}]</th>
                    </tr>
                    [{foreach from=$registeredWebhooks item="webhook"}]
                        <tr>
                            <td class="edittext">[{$webhook->getUrl()}]</td>
                            <td class="edittext">[{$webhook->getEvent()}]</td>
                            <td class="edittext">[{$webhook->getId()}]</td>
                        </tr>
                    [{/foreach}]
                </table>
            [{else}]
                <span style="display: inline-block; color: darkred; font-weight: bold; width: 100%; text-align: center">[{oxmultilang ident="D3HEIDELPAY_WEBHOOKS_NOWEBHOOKREGISTERED"}]</span>
            [{/if}]
        </fieldset>
    </td>
</tr>

