<div class="unzerUI form">
    <div class="field">
        <div id="sepa-guaranteed-iban-[{$paymentId}]" class="unzerInput">
        </div>
    </div>
    [{if $d3UnzerShowSepaGuranteedCustomerFormular}]
        <div class="field">
            <div id="customer-[{$paymentId}]" class="unzerInput"></div>
        </div>
    [{/if}]
    <div class="divider"></div>
</div>
<div class="d3UnzerSepaNote">
    [{if false === $d3UnzerDontShowDirectDebitMandateCheckbox && $isD3UnzerSepaMandatNotConfirmed}]
        <div class="d3UnzerErrorNotice">[{oxmultilang ident="D3HEIDELPAY_PAYMENT_MGW_SEPA_MANDAT_CHECKBOX_INVALID"}]</div>
    [{/if}]
    [{$d3UnzerSepaMandatText}]

    [{if false === $d3UnzerDontShowDirectDebitMandateCheckbox}]
        <br>
        <input type="hidden" name="unzerSepaValidation[[{$paymentId}]]" value="0">
        <label>
            <input type="checkbox" name="unzerSepaValidation[[{$paymentId}]]" value="1">
            [{oxmultilang ident="D3HEIDELPAY_PAYMENT_MGW_SEPA_MANDAT_CHECKBOX_LABEL"}]
        </label>
    [{/if}]
</div>

<div class="modal fade" id="unzerWaitingDialog-[{$paymentId}]" tabindex="-1" role="dialog" aria-hidden="true">
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
            if ("undefined" === typeof unzerInstance) {
                unzerInstance = new unzer('[{$d3UnzerPublicKey}]',
                    {locale: '[{$d3UnzerLanguageLocale}]'});
            }
            var SepaDirectDebitSecured_[{$paymentId|escape:'url'}] = unzerInstance.SepaDirectDebitSecured();
            SepaDirectDebitSecured_[{$paymentId|escape:'url'}].create('sepa-direct-debit-guaranteed',{
                    containerId: 'sepa-guaranteed-iban-[{$paymentId}]'
            });
            [{if $d3UnzerShowSepaGuranteedCustomerFormular}]
                // Creating a customer instance
                var Customer = unzerInstance.Customer();
                
                [{block name="d3initForm"}]
                    [{assign var="user" value=$oView->getUser()}]
                    [{if $user->getFieldData('oxbirthdate') && $user->getFieldData('oxbirthdate') != "0000-00-00"}]
                        [{assign var="iBirthdayMonth" value=$user->getFieldData('oxbirthdate')|regex_replace:"/^([0-9]{4})[-]/":""|regex_replace:'/[-]([0-9]{1,2})$/':""}]
                        [{assign var="iBirthdayDay" value=$user->getFieldData('oxbirthdate')|regex_replace:"/^([0-9]{4})[-]([0-9]{1,2})[-]/":""}]
                        [{assign var="iBirthdayYear" value=$user->getFieldData('oxbirthdate')|regex_replace:'/[-]([0-9]{1,2})[-]([0-9]{1,2})$/':""}]
                    [{/if}]
                    // Rendering the customer form
                    Customer.initFormFields({
                      "lastname": "[{$user->getFieldData("oxlname")}]",
                      "firstname": "[{$user->getFieldData("oxfname")}]",
                      "salutation": "[{$user->getFieldData("oxsal")}]",
                      "birthDate": "[{$iBirthdayYear}]-[{$iBirthdayMonth}]-[{$iBirthdayDay}]",
                      "address": {
                        "street": "[{$user->getFieldData("oxstreet")}] [{$user->getFieldData("oxstreetnr")}]",
                        "zip": "[{$user->getFieldData("oxzip")}]",
                        "city": "[{$user->getFieldData("oxcity")}]",
                        "country": "[{$oView->d3getCountryCode()}]"
                      }
                    });
                [{/block}]
                
                // Rendering the customer form
                Customer.create({
                    containerId: 'customer-[{$paymentId}]'
                });
            [{/if}]
            var form = document.getElementById('payment');
            form.addEventListener('submit',
                function (event) {
                    let isFormValid = $().d3UnzerValidateMissingUserParameter();

                    if (isFormValid && $('#[{$selectorId}]').is(':checked')) {
                        event.preventDefault();
                        $('#error-[{$paymentId}]').remove();
                        var modalDialog = $("#unzerWaitingDialog-[{$paymentId}]").modal('show');
                        var SepaGuaranteedPromise_[{$paymentId|escape:'url'}] = SepaDirectDebitSecured_[{$paymentId|escape:'url'}].createResource();
                        [{if $d3UnzerShowSepaGuranteedCustomerFormular}]
                            var customerPromise_[{$paymentId|escape:'url'}] = Customer.createCustomer();
                        [{/if}]
                        Promise.all([
                            SepaGuaranteedPromise_[{$paymentId|escape:'url'}]
                            [{if $d3UnzerShowSepaGuranteedCustomerFormular}], customerPromise_[{$paymentId|escape:'url'}][{/if}]
                        ])
                            .then(function (result) {
                                var hiddenField = document.createElement("input");
                                hiddenField.value = JSON.stringify(result);
                                hiddenField.type = 'hidden';
                                hiddenField.name = "unzer-result";
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
                }
            );
            
            [{block name="d3javaScript"}]
                [{*** Address label ***}]
                $("#customer-[{$paymentId}] .unzerUI > .checkboxLabel").hide();
                $("#customer-[{$paymentId}] .fields.salutation-customer-[{$paymentId}]").hide();
                $("#customer-[{$paymentId}] .field.firstname").hide();
                $("#customer-[{$paymentId}] .field.lastname").hide();
                [{*** name containing element ***}]
                $("#customer-[{$paymentId}] .unzerUI > .two.fields:nth-child(4)").hide();
                [{*** Address headline ***}]
                $("#customer-[{$paymentId}] .unzerUI > .unzerUI:nth-child(6)").hide();
                $("#customer-[{$paymentId}] .field.street").hide();
                $("#customer-[{$paymentId}] .field.zip").hide();
                $("#customer-[{$paymentId}] .field.city").hide();
                [{*** country select box ***}]
                $("#customer-[{$paymentId}] .unzerUI > .field:nth-child(9)").hide();
            [{/block}]
        [{/capture}]
    </script>
[{/capture}]
[{oxscript add=$smarty.capture.javaScript}]

