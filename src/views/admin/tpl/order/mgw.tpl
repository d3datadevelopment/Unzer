[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]
[{assign var='oCurr' value=$edit->getOrderCurrency()}]
<style type="text/css">
    input[type="number"], select {
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset;
        color: #555;
        min-height: 15px;
        line-height: 1.42857;
        padding: 3px;
        font-size: 12px;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        background: #fff;
    }
</style>

[{if $readonly || $hasBasicRestrictions}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cur" value="[{$oCurr->id}]">
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="cl" value="[{$oView->getClassName()}]">
</form>

[{if $messageFromHeidelpayModule}]
    <div class="errorbox"> [{oxmultilang ident=$messageFromHeidelpayModule noerror=true}]</div>
[{/if}]
[{if $paymentState}]
    [{if $hasBasicRestrictions}]
        <div class="messagebox"> [{oxmultilang ident="D3_HEIDELPAY_RESTRICTIONINFO"}]</div>
    [{/if}]

    [{assign var='inlineStyle' value="border:1px solid darkgoldenrod;color:darkgoldenrod;background-color: lightyellow;"}]
    [{if $paymentState.isCompleted}]
        [{assign var='inlineStyle' value="border:1px solid darkgreen;color:darkgreen;background-color: lightgreen;"}]
    [{elseif $paymentState.isCanceled}]
        [{assign var='inlineStyle' value="border:1px solid darkred;color:darkred;background-color: lightcoral;"}]
    [{elseif $paymentState.isPartlyPaid}]
        [{assign var='inlineStyle' value="border:1px solid darkgoldenrod;color:darkgoldenrod;background-color: lightyellow;"}]
    [{/if}]

    <span style="padding: 5px 10px; display: inline-block; [{$inlineStyle}]">[{oxmultilang ident="D3HEIDELPAY_MGW_PAYMENTSTATE_"|cat:$paymentState.stateName}]</span>
    <span>Payment ID: [{$edit->getFieldData('oxtransid')}]</span>
    <br>
    <table style="min-width:300px">
        <tr>
            <td>[{oxmultilang ident="D3HEIDELPAY_MGW_AMOUNT_CHARGED"}]</td>
            <td>[{oxinputhelp ident="HELP_D3HEIDELPAY_MGW_AMOUNT_CHARGED"}]:</td>
            <td align="right">[{$paymentState.charged}] [{$oCurr->sign}]</td>
        </tr>
        <tr>
            <td>[{oxmultilang ident="D3HEIDELPAY_MGW_AMOUNT_REMAINING"}]</td>
            <td>[{oxinputhelp ident="HELP_D3HEIDELPAY_MGW_AMOUNT_REMAINING"}]:</td>
            <td align="right">[{$paymentState.remaining}] [{$oCurr->sign}]</td>
        </tr>
        <tr>
            <td>[{oxmultilang ident="D3HEIDELPAY_MGW_AMOUNT_CANCELED"}]</td>
            <td>[{oxinputhelp ident="HELP_D3HEIDELPAY_MGW_AMOUNT_CANCELED"}]:</td>
            <td align="right">[{$paymentState.canceled}] [{$oCurr->sign}]</td>
        </tr>
        <tr>
            <td>[{oxmultilang ident="D3HEIDELPAY_MGW_AMOUNT_TOTAL"}]</td>
            <td>[{oxinputhelp ident="HELP_D3HEIDELPAY_MGW_AMOUNT_TOTAL"}]:</td>
            <td align="right">[{$paymentState.total}] [{$oCurr->sign}]</td>
        </tr>
    </table>

    [{assign var='transactions' value=$paymentState.transactions}]
    <table style="width:98%" cellspacing="0">
    [{foreach from=$transactions item="transaction"}]
            <tr>
                <td></td>
                <th style="border-bottom: 1px solid gray">Typ</th>
                <th style="border-bottom: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_AMOUNT"}]</th>
                <th style="border-bottom: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SHORTID"}]</th>
                <th style="border-bottom: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONTIME"}]</th>
                <th style="border-bottom: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_ACTIONS"}]</th>
            </tr>
            <tr>
                <td style="border-right: 1px solid gray">&nbsp;</td>
                <td>[{oxmultilang ident="D3HEIDELPAY_MGW_TRANSACTIONTYPE_"|cat:$transaction.type}]</td>
                <td>[{$transaction.formattedAmount}] [{$transaction.currency}]</td>
                <td>[{$transaction.shortid}]</td>
                <td>[{$transaction.timestamp}]</td>
                <td rowspan="3" style="border-right: 1px solid gray">
                    [{foreach from=$transaction.actions item="action" }]
                        <form action="[{$oViewConf->getSelfLink()}]" method="post" [{$readonly}]>
                            [{$oViewConf->getHiddenSid()}]
                            <input type="hidden" name="cur" value="[{$oCurr->id}]">
                            <input type="hidden" name="oxid" value="[{$oxid}]">
                            <input type="hidden" name="cl" value="[{$oView->getClassName()}]">
                            <input type="hidden" name="resourceId" value="[{$transaction.id}]"/>
                            <input type="hidden" name="action" value="[{$action}]"/>
                            <input type="hidden" name="fnc" value="routeToAction"/>
                            <label>
                                <input type="text" name="amount" value="[{$transaction.amount}]" [{$readonly}]/>
                                [{if $action == "cancelCharge"}]
                                <select name="reasoncode">
                                    <option value="">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_REASONCODE_SELECTREASON"}]</option>
                                    <option value="CANCEL">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_REASONCODE_CANCEL"}]</option>
                                    <option value="RETURN">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_REASONCODE_RETURN"}]</option>
                                    <option value="CREDIT">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_REASONCODE_CREDIT"}]</option>
                                </select>
                                <input type="text" name="amount" value="[{$transaction.amount}]" [{$readonly}]/>
                                [{/if}]
                                <button [{$readonly}]>[{oxmultilang ident="D3HEIDELPAY_MGW_TRANSACTIONTYPE_"|cat:$action}]</button>
                            </label>
                        </form>
                    [{/foreach}]
                </td>
            </tr>
        <tr>
            <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_MESSAGE"}]</th>
            <td colspan="4">[{$transaction.message}]</td>
        </tr>
        [{if $transaction.code}]
            <tr>
                <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CODE"}]</th>
                <td colspan="5" style="border-right: 1px solid gray">[{$transaction.code}]</td>
            </tr>
        [{/if}]
        [{if $transaction.iban}]
            <tr>
                <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IBAN"}]</th>
                <td colspan="5" style="border-right: 1px solid gray">[{$transaction.iban}]</td>
            </tr>
        [{/if}]
        [{if $transaction.bic}]
            <tr>
                <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BIC"}]</th>
                <td colspan="5" style="border-right: 1px solid gray">[{$transaction.bic}]</td>
            </tr>
        [{/if}]
        [{if $transaction.holder}]
            <tr>
                <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_HOLDER"}]</th>
                <td colspan="5" style="border-right: 1px solid gray">[{$transaction.holder}]</td>
            </tr>
        [{/if}]
        [{if $transaction.descriptor}]
            <tr>
                <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_DESCRIPTOR"}]</th>
                <td colspan="5" style="border-right: 1px solid gray">[{$transaction.descriptor}]</td>
            </tr>
        [{/if}]
        [{if $transaction.paymentReference}]
            <tr>
                <th style="border-right: 1px solid gray">[{oxmultilang ident="D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_PAYMENTREFERENCE"}]</th>
                <td colspan="5" style="border-right: 1px solid gray">[{$transaction.paymentReference}]</td>
            </tr>
        [{/if}]
        <tr>
            <td style="border-right: 1px solid gray;">&nbsp;</td>
            <td colspan="5"  style="border-right: 1px solid gray;border-bottom: 1px solid gray;">&nbsp;</td>
        </tr>
    [{/foreach}]
    </table>
[{/if}]

[{include file="bottomnaviitem.tpl"}]

[{include file="d3_cfg_mod_inc.tpl"}]
