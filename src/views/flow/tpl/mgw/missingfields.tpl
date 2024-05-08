[{if isset($d3UnzerMissingUserParameter[$oxidPaymentId])}]
    <div class="d3UnzerMissingFields">
        [{foreach from=$d3UnzerMissingUserParameter[$oxidPaymentId] item="unzerFieldname" key="oxidFieldname"}]
            [{if $oxidFieldname == 'oxbirthdate'}]
                <div class="form-group oxDate req">
                    <label class="control-label col-xs-12 col-lg-3 req">
                        [{oxmultilang ident="BIRTHDATE"}]*
                    </label>
                    <div class="col-xs-3 col-lg-3">
                        <input class="oxDay form-control" name="d3UnzerMissingUserData[[{$sPaymentID}]][[{$oxidFieldname}]][day]" type="text"
                               maxlength="2" value=""
                               placeholder="[{oxmultilang ident="DAY"}]" required>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <select class="oxMonth form-control" name="d3UnzerMissingUserData[[{$sPaymentID}]][[{$oxidFieldname}]][month]"
                                required="">
                            <option value="" label="-">-</option>
                            [{section name="month" start=1 loop=13}]
                                <option value="[{$smarty.section.month.index}]" label="[{oxmultilang ident="MONTH_NAME_"|cat:$smarty.section.month.index}]">
                                    [{oxmultilang ident="MONTH_NAME_"|cat:$smarty.section.month.index}]
                                </option>
                            [{/section}]
                        </select>
                    </div>
                    <div class="col-xs-3 col-lg-3">
                        <input class="oxYear form-control js-oxValidate js-oxValidate_notEmpty" name="d3UnzerMissingUserData[[{$sPaymentID}]][[{$oxidFieldname}]][year]" type="text"
                               maxlength="4" value=""
                               placeholder="[{oxmultilang ident="YEAR"}]" required="">
                    </div>
                </div>
            [{else}]
            <div class="form-group">
                <label class="control-label col-lg-3 req" for="[{$sPaymentID}]_[{$oxidFieldname}]">[{oxmultilang ident="D3HEIDELPAY_PAYMENT_MGW_MISSINGFIELD_INPUT_"|cat:$oxidFieldname}]</label>
                <div class="col-lg-5">
                    <input id="[{$sPaymentID}]_[{$oxidFieldname}]" type="text" class="form-control js-oxValidate js-oxValidate_notEmpty" size="20" data-validation-required-message="[{oxmultilang ident="ERROR_MESSAGE_INPUT_NOTALLFIELDS"}]" required minlength="1" name="d3UnzerMissingUserData[[{$sPaymentID}]][[{$oxidFieldname}]]" value="">
                    <div class="help-block"></div>
                </div>
            </div>
            [{/if}]
        [{/foreach}]
    </div>
[{else}]
    <pre>[{$d3UnzerMissingUserParameter|@debug_print_var}]</pre>
    <pre>[{$oxidPaymentId}]</pre>
[{/if}]