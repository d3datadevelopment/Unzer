<div class="unzerUI form">
    <div class="field">
        <div id="b2b-customer-[{$paymentId}]" class="unzerInput">
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
                unzerInstance= new unzer('[{$d3UnzerPublicKey}]', {locale: '[{$d3UnzerLanguageLocale}]'});
            }
            var InvoiceSecured_[{$paymentId|escape:'url'}] = unzerInstance.InvoiceSecured();
            var B2BCustomer_[{$paymentId|escape:'url'}] = unzerInstance.B2BCustomer();

            [{block name="d3initForm"}]
                [{assign var="user" value=$oView->getUser()}]
                [{if $user->getFieldData('oxbirthdate') && $user->getFieldData('oxbirthdate') != "0000-00-00"}]
                    [{assign var="iBirthdayMonth" value=$user->getFieldData('oxbirthdate')|regex_replace:"/^([0-9]{4})[-]/":""|regex_replace:'/[-]([0-9]{1,2})$/':""}]
                    [{assign var="iBirthdayDay" value=$user->getFieldData('oxbirthdate')|regex_replace:"/^([0-9]{4})[-]([0-9]{1,2})[-]/":""}]
                    [{assign var="iBirthdayYear" value=$user->getFieldData('oxbirthdate')|regex_replace:'/[-]([0-9]{1,2})[-]([0-9]{1,2})$/':""}]
                [{/if}]
                // Rendering the customer form
                B2BCustomer_[{$paymentId|escape:'url'}].initFormFields({
                  "lastname": "[{$user->getFieldData("oxlname")}]",
                  "firstname": "[{$user->getFieldData("oxfname")}]",
                  "salutation": "[{$user->getFieldData("oxsal")}]",
                  "company": "[{$user->getFieldData("oxcompany")}]",
                  "birthDate": "[{$iBirthdayYear}]-[{$iBirthdayMonth}]-[{$iBirthdayDay}]",
                  "email": "[{$user->getFieldData("oxusername")}]",
                  "address": {
                    "street": "[{$user->getFieldData("oxstreet")}] [{$user->getFieldData("oxstreetnr")}]",
                    "zip": "[{$user->getFieldData("oxzip")}]",
                    "city": "[{$user->getFieldData("oxcity")}]",
                    "country": "[{$oView->d3getCountryCode()}]"
                  }
                });
            [{/block}]

            B2BCustomer_[{$paymentId|escape:'url'}].create({
              containerId: 'b2b-customer-[{$paymentId}]'
            })

            var form = document.getElementById('payment');
            form.addEventListener('submit',
                function (event) {
                    let isFormValid = $().d3UnzerValidateMissingUserParameter();

                    if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                        event.preventDefault();
                        $('#error-[{$paymentId}]').remove();
                        var modalDialog        = $("#unzerWaitingDialog-[{$paymentId}]").modal('show');
                        var paymentPromise     = InvoiceSecured_[{$paymentId|escape:'url'}].createResource();
                        var b2bCustomerPromise = B2BCustomer_[{$paymentId|escape:'url'}].createCustomer();
                        Promise.all([paymentPromise, b2bCustomerPromise])
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
                }
            );

            [{block name="d3javaScript"}]
                [{*** not hidden, because company field isn't mandatory in default ***}]
                [{*$("#b2b-customer-[{$paymentId}] .field.company").hide();*}]
                $("#b2b-customer-[{$paymentId}] .field.street").hide();
                $("#b2b-customer-[{$paymentId}] .field.zip").hide();
                $("#b2b-customer-[{$paymentId}] .field.city").hide();
                $("#b2b-customer-[{$paymentId}] .unzerUI > .field:nth-child(4)").hide();
            [{/block}]
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]
