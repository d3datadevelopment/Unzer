<div class="heidelpayUI form">
    <div class="field">
        <div id="sepa-guaranteed-iban-[{$paymentId}]" class="heidelpayInput">
        </div>
    </div>
    [{if $d3HeidelpayShowSepaGuranteedCustomerFormular}]
        <div class="field">
            <div id="customer-[{$paymentId}]" class="heidelpayInput"></div>
        </div>
    [{/if}]
    <div class="divider"></div>
</div>
<div class="d3HeidelpaySepaNote">
    [{if $isD3HeidelpaySepaMandatNotConfirmed}]
        <div class="d3HeidelpayErrorNotice">[{oxmultilang ident="D3HEIDELPAY_PAYMENT_MGW_SEPA_MANDAT_CHECKBOX_INVALID"}]</div>
    [{/if}]
    [{$d3HeidelpaySepaMandatText}]
    <br>
    <input type="hidden" name="heidelpaySepaValidation[[{$paymentId}]]" value="0">
    <label>
        <input type="checkbox" name="heidelpaySepaValidation[[{$paymentId}]]" value="1">
        [{oxmultilang ident="D3HEIDELPAY_PAYMENT_MGW_SEPA_MANDAT_CHECKBOX_LABEL"}]
    </label>
</div>

<div class="modal fade" id="heidelpayWaitingDialog-[{$paymentId}]" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">[{oxmultilang ident="D3HEIDELPAY_PAYMENT_PLEASE_WAIT"}]</div>
        </div>
    </div>
</div>

[{capture name="doNotShow"}]
    <script type="text/javascript">
        [{capture name="javaScript"}]
        var heidelpayInstance;
        if ("undefined" === typeof heidelpayInstance) {
            heidelpayInstance = new heidelpay('[{$d3HeidelpayPublicKey}]',
                {locale: '[{$d3HeidelpayLanguageLocale}]'});
        }
        var SepaDirectDebitGuaranteed_[{$paymentId|escape:'url'}] = heidelpayInstance.SepaDirectDebitGuaranteed();
        SepaDirectDebitGuaranteed_[{$paymentId|escape:'url'}].create('sepa-direct-debit-guaranteed',{
                containerId: 'sepa-guaranteed-iban-[{$paymentId}]'
        });
        [{if $d3HeidelpayShowSepaGuranteedCustomerFormular}]
            // Creating a customer instance
            var Customer = heidelpayInstance.Customer();
            // Rendering the customer form
            Customer.create({
                containerId: 'customer-[{$paymentId}]'
            });
        [{/if}]
        var form = document.getElementById('payment');
        form.addEventListener('submit',
            function (event) {
                let isFormValid = $().d3HeidelpayValidateMissingUserParameter();

                if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                    event.preventDefault();
                    $('#error-[{$paymentId}]').remove();
                    var modalDialog = $("#heidelpayWaitingDialog-[{$paymentId}]").modal('show');
                    var SepaGuaranteedPromise_[{$paymentId|escape:'url'}] = SepaDirectDebitGuaranteed_[{$paymentId|escape:'url'}].createResource();
                    [{if $d3HeidelpayShowSepaGuranteedCustomerFormular}]
                        var customerPromise_[{$paymentId|escape:'url'}] = Customer.createCustomer();
                    [{/if}]
                    Promise.all([
                        SepaGuaranteedPromise_[{$paymentId|escape:'url'}]
                        [{if $d3HeidelpayShowSepaGuranteedCustomerFormular}], customerPromise_[{$paymentId|escape:'url'}][{/if}]
                    ])
                        .then(function (result) {
                            var hiddenField = document.createElement("input");
                            hiddenField.value = JSON.stringify(result);
                            hiddenField.type = 'hidden';
                            hiddenField.name = "heidelpay-result";
                            form.appendChild(hiddenField);
                            form.submit();
                        })
                        .catch(function (error) {
                            var errorMessage = document.createElement("p");
                            $(errorMessage).prop('id',
                                'error-[{$paymentId}]');
                            $(errorMessage).addClass('alert');
                            $(errorMessage).addClass('alert-danger');
                            $(errorMessage).text(error.message);
                            form.parentNode.insertBefore(errorMessage,
                                form);
                            $([document.documentElement, document.body]).animate({
                                    scrollTop: $('#error-[{$paymentId}]').offset().top
                                },
                                1000);
                        })
                        .finally(function () {
                            modalDialog.modal("hide");
                        });
                }
            });
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]

