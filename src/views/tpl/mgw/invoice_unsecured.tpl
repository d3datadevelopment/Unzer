<div class="modal fade" id="heidelpayWaitingDialog-[{$paymentId}]" tabindex="-1" role="dialog"  aria-hidden="true">
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
        if( "undefined" === typeof heidelpayInstance  ) {
            heidelpayInstance= new heidelpay('[{$d3HeidelpayPublicKey}]', {locale: '[{$d3HeidelpayLanguageLocale}]'});
        }
        var Invoice_[{$paymentId|escape:'url'}] = heidelpayInstance.Invoice();
        var form = document.getElementById('payment');
        form.addEventListener('submit',
            function (event) {
                let isFormValid = $().d3HeidelpayValidateMissingUserParameter();

                if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                    event.preventDefault();
                    $('#error-[{$paymentId}]').remove();
                    var modalDialog = $( "#heidelpayWaitingDialog-[{$paymentId}]" ).modal('show');
                    Invoice_[{$paymentId|escape:'url'}].createResource()
                        .then(function (result) {
                            var hiddenField   = document.createElement("input");
                            hiddenField.value = JSON.stringify(result);
                            hiddenField.type  = 'hidden';
                            hiddenField.name  = "heidelpay-result";

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

