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
            function initUnzerInvoiceSecured_[{$paymentId|escape:'url'}]() {

                const unzerInstance = getUnzerInstance();
                if (!unzerInstance) {
                    setTimeout(initUnzerInvoiceSecured_[{$paymentId|escape:'url'}], 50);
                    return;
                }

                const invoiceSecured = unzerInstance.InvoiceSecured();

                if (!window.unzerPayments) {
                    window.unzerPayments = {};
                }

                window.unzerPayments['[{$paymentId|escape:'url'}]'] = invoiceSecured;
            }

            document.addEventListener("DOMContentLoaded", function() {
                initUnzerInvoiceSecured_[{$paymentId|escape:'url'}]();
            });

            var form = document.getElementById('payment');
            form.addEventListener('submit',
                function (event) {
                    let isFormValid = $().d3UnzerValidateMissingUserParameter();

                    if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                        event.preventDefault();
                        $('#error-[{$paymentId}]').remove();
                        var modalDialog = $("#unzerWaitingDialog-[{$paymentId}]");
                        var invoiceSecured = window.unzerPayments && window.unzerPayments['[{$paymentId|escape:'url'}]'];

                        Promise.resolve().then(function () {
                            if (!invoiceSecured) {
                                throw new Error('Unzer invoice secured payment was not initialized.');
                            }
                            return invoiceSecured.createResource();
                        })
                            .then(function (result) {
                                var hiddenField   = document.createElement("input");
                                hiddenField.value = JSON.stringify(result);
                                hiddenField.type  = 'hidden';
                                hiddenField.name  = "unzer-result";

                                form.appendChild(hiddenField);
                                modalDialog.modal('show');
                                form.submit();
                            })
                            .catch(function (error) {
                                modalDialog.modal("hide");
                                setTimeout(function () {
                                    modalDialog.modal("hide");
                                }, 300);

                                var errorMessage   = document.createElement("p");

                                $(errorMessage).prop('id', 'error-[{$paymentId}]');
                                $(errorMessage).addClass('alert');
                                $(errorMessage).addClass('alert-danger');
                                $(errorMessage).text(error.customerMessage || error.message);
                                form.parentNode.insertBefore(errorMessage, form);

                                $([document.documentElement, document.body]).animate({
                                    scrollTop: $('#error-[{$paymentId}]').offset().top
                                }, 1000);
                            })
                            .finally(function () {
                                modalDialog.modal("hide");
                            });
                    }
                }
            );
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]

