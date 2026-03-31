<div class="form-group">
    <label class="control-label col-md-3" for="d3HeidelpayApplePayCountryCode">
        [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_APPLEPAY_COUNTRY_CODE"}]
    </label>
    <div class="col-md-1">
        [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_APPLEPAY_COUNTRY_CODE"}]
    </div>
    <div class="col-md-8">
        <input type="text"
               class="form-control"
               id="d3HeidelpayApplePayCountryCode"
               name="editval[sApplePayCountryCode]"
               value="[{$currentChannel->getApplePayCountryCode()}]"
               title="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_APPLEPAY_COUNTRY_CODE"}]"
               maxlength="2">
    </div>
</div>
