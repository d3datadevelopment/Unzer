<div class="unzerUI form">
    <div class="field">
        <div id="sepa-iban-[{$paymentId}]" class="unzerInput"></div>
    </div>
    <div class="divider"></div>
</div>
<div class="d3UnzerSepaNote">
    [{if false === $d3UnzerDontShowDirectDebitMandateCheckbox && $isD3UnzerSepaMandatNotConfirmed}]
        <div class="d3UnzerErrorNotice">[{oxmultilang ident="D3UNZER_PAYMENT_MGW_SEPA_MANDAT_CHECKBOX_INVALID"}]</div>
    [{/if}]

    [{$d3UnzerSepaMandatText}]

    [{if false === $d3UnzerDontShowDirectDebitMandateCheckbox}]
        <br>
        <input type="hidden" name="unzerSepaValidation[[{$paymentId}]]" value="0">
        <label>
            <input type="checkbox" name="unzerSepaValidation[[{$paymentId}]]" value="1">
            [{oxmultilang ident="D3UNZER_PAYMENT_MGW_SEPA_MANDAT_CHECKBOX_LABEL"}]
        </label>
    [{/if}]
</div>

<div class="modal fade" id="unzerWaitingDialog-[{$paymentId}]" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">[{oxmultilang ident="D3UNZER_PAYMENT_PLEASE_WAIT"}]</div>
        </div>
    </div>
</div>

[{capture name="doNotShow"}]
    <script type="text/javascript">
        [{capture name="javaScript"}]
        var unzerInstance;
        if( "undefined" === typeof unzerInstance  ) {
            unzerInstance = new unzer('[{$d3UnzerPublicKey}]', {locale: '[{$d3UnzerLanguageLocale}]'});
        }
        var SepaDirectDebit_[{$paymentId|escape:'url'}] = unzerInstance.SepaDirectDebit();
        SepaDirectDebit_[{$paymentId|escape:'url'}].create('sepa-direct-debit', {
            containerId: 'sepa-iban-[{$paymentId}]'
        });
        var form = document.getElementById('payment');
        form.addEventListener('submit',
            function (event) {
                let isFormValid = $().d3UnzerValidateMissingUserParameter();

                if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                    event.preventDefault();
                    $('#error-[{$paymentId}]').remove();
                    var modalDialog = $( "#unzerWaitingDialog-[{$paymentId}]" ).modal('show');
                    SepaDirectDebit_[{$paymentId|escape:'url'}].createResource()
                        .then(function (result) {
                            var hiddenField   = document.createElement("input");
                            hiddenField.value = JSON.stringify(result);
                            hiddenField.type  = 'hidden';
                            hiddenField.name  = "unzer-result";

                            form.appendChild(hiddenField);
                            form.submit();
                        })
                        .catch(function (error) {
                            var errorMessage   = document.createElement("p");

                            $(errorMessage).prop('id', 'error-[{$paymentId}]');
                            $(errorMessage).addClass('alert');
                            $(errorMessage).addClass('alert-danger');
                            $(errorMessage).text( error.message);
                            form.parentNode.insertBefore(errorMessage, form);

                            $([document.documentElement, document.body]).animate({
                                scrollTop: $('#error-[{$paymentId}]').offset().top
                            }, 1000);
                        })
                        .finally(function () {
                            modalDialog.modal( "hide" );
                        });
                }
            });
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]
