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
            <div class="modal-body text-center">[{oxmultilang ident="D3UNZER_PAYMENT_PLEASE_WAIT"}]</div>
        </div>
    </div>
</div>

[{capture name="doNotShow"}]
    <script type="text/javascript">
        [{capture name="javaScript"}]
            function initUnzerPrzelewy24_[{$paymentId|escape:'url'}]() {

                const unzerInstance = getUnzerInstance();
                if (!unzerInstance) {
                    setTimeout(initUnzerPrzelewy24_[{$paymentId|escape:'url'}], 50);
                    return;
                }

                const przelewy24 = unzerInstance.Przelewy24();

                if (!window.unzerPayments) {
                    window.unzerPayments = {};
                }

                window.unzerPayments['[{$paymentId|escape:'url'}]'] = przelewy24;
            }

            document.addEventListener("DOMContentLoaded", function() {
                initUnzerPrzelewy24_[{$paymentId|escape:'url'}]();
            });

            var form = document.getElementById('payment');
            form.addEventListener('submit',
                function (event) {
                    if ($('#[{$selectorId}]').is(':checked')) {
                        event.preventDefault();
                        $('#error-[{$paymentId}]').remove();
                        window.unzerPayments['[{$paymentId|escape:'url'}]'].createResource()
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
                }
            );
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]

