[{assign var="googlePayTotalPrice" value=$oView->d3GetGooglePayTotalPrice()}]
[{assign var="googlePayCurrency" value=$oView->d3GetGooglePayCurrencyCode()}]
[{assign var="googlePayMerchantName" value=$oView->d3GetGooglePayMerchantName()}]
[{assign var="googlePayUseButtonMessage" value="D3HEIDELPAY_PAYMENT_GOOGLEPAY_USE_BUTTON"|oxmultilangassign}]
[{assign var="googlePayMissingGatewayMerchantIdMessage" value="D3HEIDELPAY_PAYMENT_GOOGLEPAY_MISSING_GATEWAY_MERCHANT_ID"|oxmultilangassign}]
[{assign var="googlePayMissingMerchantIdMessage" value="D3HEIDELPAY_PAYMENT_GOOGLEPAY_MISSING_MERCHANT_ID"|oxmultilangassign}]

<div class="unzerUI form">
    <div class="field">
        <div id="googlepay-[{$paymentId}]" class="unzerInput">
        </div>
    </div>
    <div class="divider"></div>
</div>

<div class="modal fade" id="unzerWaitingDialog-[{$paymentId}]" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">[{oxmultilang ident="D3HEIDELPAY_PAYMENT_PLEASE_WAIT"}]</div>
        </div>
    </div>
</div>

[{capture name="doNotShow"}]
    <script type="text/javascript">
        [{capture name="javaScript"}]
            function initUnzerGooglePay_[{$paymentId|escape:'url'}]() {
                const container = document.getElementById('googlepay-[{$paymentId}]');

                if (!container || container.dataset.unzerInitialized) {
                    return;
                }

                const gatewayMerchantId = '[{$gatewayMerchantId|escape:"javascript"}]';
                const merchantId = '[{$googlePayMerchantId|escape:"javascript"}]';

                if (!gatewayMerchantId) {
                    showGooglePayError_[{$paymentId|escape:'url'}]('[{$googlePayMissingGatewayMerchantIdMessage|escape:"javascript"}]');
                    container.dataset.unzerInitialized = "true";
                    return;
                }

                if (!merchantId) {
                    showGooglePayError_[{$paymentId|escape:'url'}]('[{$googlePayMissingMerchantIdMessage|escape:"javascript"}]');
                    container.dataset.unzerInitialized = "true";
                    return;
                }

                const unzerInstance = getUnzerInstance();
                if (!unzerInstance || typeof unzerInstance.Googlepay === 'undefined' || typeof google === 'undefined') {
                    setTimeout(initUnzerGooglePay_[{$paymentId|escape:'url'}], 50);
                    return;
                }

                const googlePay = unzerInstance.Googlepay();
                const paymentDataRequestObject = googlePay.initPaymentDataRequestObject({
                    gatewayMerchantId: gatewayMerchantId,
                    merchantInfo: {
                        merchantId: merchantId,
                        merchantName: '[{$googlePayMerchantName|escape:"javascript"}]'
                    },
                    transactionInfo: {
                        countryCode: '[{$googlePayCountryCode|escape:"javascript"}]',
                        currencyCode: '[{$googlePayCurrency|escape:"javascript"}]',
                        totalPrice: '[{$googlePayTotalPrice|number_format:2:".":""}]'
                    },
                    allowedCardNetworks: [{$googlePayAllowedCardNetworks}],
                    buttonColor: 'black',
                    buttonType: 'buy',
                    onPaymentAuthorizedCallback: function(paymentData) {
                        var modalDialog = $("#unzerWaitingDialog-[{$paymentId}]").modal('show');
                        return googlePay.createResource(paymentData)
                            .then(function (result) {
                                var hiddenField = document.createElement("input");
                                hiddenField.value = JSON.stringify(result);
                                hiddenField.type = 'hidden';
                                hiddenField.name = "unzer-result";
                                form.appendChild(hiddenField);
                                form.submit();
                            })
                            .catch(function (error) {
                                showGooglePayError_[{$paymentId|escape:'url'}](error.message);
                            })
                            .finally(function () {
                                modalDialog.modal("hide");
                            });
                    }
                });

                googlePay.create(
                    {
                        containerId: 'googlepay-[{$paymentId}]'
                    },
                    paymentDataRequestObject
                );

                if (!window.unzerPayments) {
                    window.unzerPayments = {};
                }

                window.unzerPayments['[{$paymentId|escape:'url'}]'] = googlePay;
                container.dataset.unzerInitialized = "true";
            }

            document.addEventListener("DOMContentLoaded", function() {
                initUnzerGooglePay_[{$paymentId|escape:'url'}]();
            });

            var form = document.getElementById('payment');
            function showGooglePayError_[{$paymentId|escape:'url'}](message) {
                var errorMessage = document.createElement("p");
                $('#error-[{$paymentId}]').remove();
                $(errorMessage).prop('id', 'error-[{$paymentId}]');
                $(errorMessage).addClass('alert');
                $(errorMessage).addClass('alert-danger');
                $(errorMessage).text(message);
                form.parentNode.insertBefore(errorMessage, form);
                $([document.documentElement, document.body]).animate({
                        scrollTop: $('#error-[{$paymentId}]').offset().top
                    },
                    1000);
            }

            form.addEventListener('submit',
                function (event) {
                    let isFormValid = $().d3UnzerValidateMissingUserParameter();

                    if (isFormValid && $('#[{$selectorId}]').is(':checked') && !$('input[name="unzer-result"]').length) {
                        event.preventDefault();
                        showGooglePayError_[{$paymentId|escape:'url'}]('[{$googlePayUseButtonMessage|escape:"javascript"}]');
                    }
                }
            );
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]
