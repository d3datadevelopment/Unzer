<div class="unzerUI form">
    <div class="field">
        <div id="przelewy24-[{$paymentId}]" class="unzerInput">
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
        var unzerInstance;
        if( "undefined" === typeof unzerInstance  ) {
            unzerInstance = new unzer('[{$d3UnzerPublicKey}]', {locale: '[{$d3UnzerLanguageLocale}]'});
        }
        var Przelewy24_[{$paymentId|escape:'url'}] = unzerInstance.Przelewy24();

        var form = document.getElementById('payment');
        form.addEventListener('submit',
            function (event) {
                if ($('#[{$selectorId}]').is(':checked')) {
                    event.preventDefault();
                    $('#error-[{$paymentId}]').remove();
                    Przelewy24_[{$paymentId|escape:'url'}].createResource()
                        .then(function (result) {
                            // Success
                            var hiddenField = document.createElement("input");
                            hiddenField.value = JSON.stringify(result);
                            hiddenField.type = 'hidden';
                            hiddenField.name = "unzer-result";
                            form.appendChild(hiddenField);
                            form.submit();
                        })
                }
            });
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]

