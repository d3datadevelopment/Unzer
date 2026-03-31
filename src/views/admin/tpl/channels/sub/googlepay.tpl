<div class="form-group">
    <label class="control-label col-md-3" for="d3HeidelpayGooglePayMerchantId">
        [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_GOOGLEPAY_MERCHANT_ID"}]
    </label>
    <div class="col-md-1">
        [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_GOOGLEPAY_MERCHANT_ID"}]
    </div>
    <div class="col-md-8">
        <input type="text"
               class="form-control"
               id="d3HeidelpayGooglePayMerchantId"
               name="editval[sGooglePayMerchantId]"
               value="[{$currentChannel->getGooglePayMerchantId()}]"
               title="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_GOOGLEPAY_MERCHANT_ID"}]">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3" for="d3HeidelpayGooglePayCountryCode">
        [{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_GOOGLEPAY_COUNTRY_CODE"}]
    </label>
    <div class="col-md-1">
        [{oxinputhelp ident="HELP_D3DYN_HEIDELPAY_PARAM_GOOGLEPAY_COUNTRY_CODE"}]
    </div>
    <div class="col-md-8">
        <input type="text"
               class="form-control"
               id="d3HeidelpayGooglePayCountryCode"
               name="editval[sGooglePayCountryCode]"
               value="[{$currentChannel->getGooglePayCountryCode()}]"
               title="[{oxmultilang ident="D3DYN_HEIDELPAY_PARAM_GOOGLEPAY_COUNTRY_CODE"}]"
               maxlength="2">
    </div>
</div>
