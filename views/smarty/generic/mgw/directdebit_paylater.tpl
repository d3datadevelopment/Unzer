<div class="unzerUI form">
    <div class="field">
        <div id="paylater-direct-debit-[{$paymentId}]" class="unzerInput">
        </div>
    </div>
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
            function initUnzerPaylaterDirectDebit_[{$paymentId|escape:'url'}]() {

                const container = document.getElementById(
                    "paylater-direct-debit-[{$paymentId}]"
                );

                if (!container || container.dataset.unzerInitialized) {
                    return;
                }

                const unzerInstance = getUnzerInstance();
                if (!unzerInstance) {
                    setTimeout(initUnzerPaylaterDirectDebit_[{$paymentId|escape:'url'}], 50);
                    return;
                }

                const paylaterDirectDebit = unzerInstance.PaylaterDirectDebit();

                if (!window.unzerPayments) {
                    window.unzerPayments = {};
                }

                window.unzerPayments['[{$paymentId|escape:'url'}]'] = paylaterDirectDebit;

                paylaterDirectDebit.create('paylater-direct-debit', {
                    containerId: 'paylater-direct-debit-[{$paymentId}]'
                });

                setUnzerPaylaterDirectDebitLinkTargets_[{$paymentId|escape:'url'}](container);
                observeUnzerPaylaterDirectDebitLinks_[{$paymentId|escape:'url'}](container);

                container.dataset.unzerInitialized = "true";
            }

            function setUnzerPaylaterDirectDebitLinkTargets_[{$paymentId|escape:'url'}](container) {
                container.querySelectorAll('a').forEach(function (link) {
                    link.setAttribute('target', '_blank');
                    link.setAttribute('rel', 'noopener noreferrer');
                });
            }

            function observeUnzerPaylaterDirectDebitLinks_[{$paymentId|escape:'url'}](container) {
                if (!window.MutationObserver) {
                    return;
                }

                const observer = new MutationObserver(function () {
                    setUnzerPaylaterDirectDebitLinkTargets_[{$paymentId|escape:'url'}](container);
                });

                observer.observe(container, {
                    childList: true,
                    subtree: true
                });
            }

            document.addEventListener("DOMContentLoaded", function() {
                initUnzerPaylaterDirectDebit_[{$paymentId|escape:'url'}]();
            });
            var form = document.getElementById('payment');
            form.addEventListener('submit',
                function (event) {
                    let isFormValid = $().d3UnzerValidateMissingUserParameter();

                    if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                        event.preventDefault();
                        $('#error-[{$paymentId}]').remove();
                        var modalDialog = $( "#unzerWaitingDialog-[{$paymentId}]" );
                        Promise.resolve().then(function () {
                            return window.unzerPayments['[{$paymentId|escape:'url'}]'].createResource();
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
                                modalDialog.modal( "hide" );
                                setTimeout(function () {
                                    modalDialog.modal( "hide" );
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
                                modalDialog.modal( "hide" );
                            });
                    }
                });
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]
