[{assign var="applePayTotalPrice" value=$oView->d3GetGooglePayTotalPrice()}]
[{assign var="applePayCurrency" value=$oView->d3GetGooglePayCurrencyCode()}]
[{assign var="applePayMerchantName" value=$oView->d3GetGooglePayMerchantName()}]
[{assign var="applePayUseButtonMessage" value="D3HEIDELPAY_PAYMENT_APPLEPAY_USE_BUTTON"|oxmultilangassign}]
[{assign var="applePayUnavailableMessage" value="D3HEIDELPAY_PAYMENT_APPLEPAY_UNAVAILABLE"|oxmultilangassign}]

[{if $isHeidelpayTestMode}]
    <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
    <script>
        eruda.init();
    </script>
[{/if}]

<style>
    .d3ApplePayButton {
        -apple-pay-button-type: buy;
        -apple-pay-button-style: black;
        display: none;
        width: 100%;
        min-width: 200px;
        height: 40px;
        border-radius: 4px;
        cursor: pointer;
    }

    @supports (-webkit-appearance: -apple-pay-button) {
        .d3ApplePayButton {
            -webkit-appearance: -apple-pay-button;
        }
    }
</style>

<div class="unzerUI form">
    <div class="field">
        <div id="applepay-[{$paymentId}]" class="unzerInput">
            <button type="button"
                    class="d3ApplePayButton"
                    id="applepay-button-[{$paymentId}]"
                    lang="[{$applePayCountryCode|lower}]"
                    title="Apple Pay"></button>
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
            function initUnzerApplePay_[{$paymentId|escape:'url'}]() {
                const container = document.getElementById('applepay-[{$paymentId}]');
                const applePayButton = document.getElementById('applepay-button-[{$paymentId}]');

                if (!container || !applePayButton || container.dataset.unzerInitialized) {
                    return;
                }

                const unzerInstance = getUnzerInstance();
                if (!unzerInstance || typeof unzerInstance.ApplePay === 'undefined') {
                    setTimeout(initUnzerApplePay_[{$paymentId|escape:'url'}], 50);
                    return;
                }

                let isApplePayAvailable = false;
                const isApplePaySelected = function () {
                    return $('#[{$selectorId}]').is(':checked');
                };
                const updateApplePayButtonVisibility = function () {
                    applePayButton.style.display = isApplePayAvailable && isApplePaySelected() ? 'block' : 'none';
                };
                const hideApplePayPaymentOption = function () {
                    const applePayRadio = $('#[{$selectorId}]');
                    const paymentOption = applePayRadio.closest('.well');

                    paymentOption.hide();
                    $('#error-[{$paymentId}]').remove();

                    if (isApplePaySelected()) {
                        $('input[name="paymentid"]').not(applePayRadio).filter(function () {
                            return $(this).closest('.well').is(':visible');
                        }).first().prop('checked', true).trigger('change');
                    }
                };
                const handlePaymentSelectionChange = function () {
                    updateApplePayButtonVisibility();
                    if (!isApplePayAvailable && isApplePaySelected()) {
                        showApplePayError_[{$paymentId|escape:'url'}]('[{$applePayUnavailableMessage|escape:"javascript"}]');
                    }
                };

                $('input[name="paymentid"]').on('change', handlePaymentSelectionChange);

                if (typeof ApplePaySession === 'undefined' || !ApplePaySession.canMakePayments()) {
                    [{if $isHeidelpayTestMode}]
                        handlePaymentSelectionChange();
                    [{else}]
                        hideApplePayPaymentOption();
                    [{/if}]
                    container.dataset.unzerInitialized = "true";
                    return;
                }

                isApplePayAvailable = true;
                const applePay = unzerInstance.ApplePay();
                updateApplePayButtonVisibility();
                applePayButton.addEventListener('click', function () {
                    const supportedNetworks = [{$applePayAllowedCardNetworks}];
                    if (!supportedNetworks.length) {
                        showApplePayError_[{$paymentId|escape:'url'}]('[{$applePayUnavailableMessage|escape:"javascript"}]');
                        return;
                    }

                    const paymentRequest = {
                        countryCode: '[{$applePayCountryCode|escape:"javascript"}]',
                        currencyCode: '[{$applePayCurrency|escape:"javascript"}]',
                        supportedNetworks: supportedNetworks,
                        merchantCapabilities: ['supports3DS'],
                        total: {
                            label: '[{$applePayMerchantName|escape:"javascript"}]',
                            amount: '[{$applePayTotalPrice|number_format:2:".":""}]'
                        }
                    };

                    const session = applePay.initApplePaySession(paymentRequest);
                    session.onpaymentauthorized = function (event) {
                        var modalDialog = $("#unzerWaitingDialog-[{$paymentId}]").modal('show');
                        return applePay.createResource(event.payment.token.paymentData)
                            .then(function (result) {
                                var hiddenField = document.createElement("input");
                                hiddenField.value = JSON.stringify(result);
                                hiddenField.type = 'hidden';
                                hiddenField.name = "unzer-result";
                                form.appendChild(hiddenField);
                                session.completePayment(ApplePaySession.STATUS_SUCCESS);
                                form.submit();
                            })
                            .catch(function (error) {
                                session.completePayment(ApplePaySession.STATUS_FAILURE);
                                showApplePayError_[{$paymentId|escape:'url'}](error.message);
                            })
                            .finally(function () {
                                modalDialog.modal("hide");
                            });
                    };
                    session.begin();
                });

                if (!window.unzerPayments) {
                    window.unzerPayments = {};
                }

                window.unzerPayments['[{$paymentId|escape:'url'}]'] = applePay;
                container.dataset.unzerInitialized = "true";
            }

            document.addEventListener("DOMContentLoaded", function() {
                initUnzerApplePay_[{$paymentId|escape:'url'}]();
            });

            var form = document.getElementById('payment');
            function showApplePayError_[{$paymentId|escape:'url'}](message) {
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
                        showApplePayError_[{$paymentId|escape:'url'}]('[{$applePayUseButtonMessage|escape:"javascript"}]');
                    }
                }
            );
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]
