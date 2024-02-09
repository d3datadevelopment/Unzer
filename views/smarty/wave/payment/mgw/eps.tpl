[{assign var="sImageUrl" value=$oViewConf->getModuleUrl('d3unzer','out/img/mgw/')}]
[{block name="heidelpay_eps"}]
    <div class="well well-sm">
        <dl>
            <dt>
                <input id="payment_[{$sPaymentID}]"
                       type="radio"
                       name="paymentid"
                       value="[{$sPaymentID}]"
                       [{if $oView->getCheckedPaymentId() == $paymentmethod->oxpayments__oxid->value}]checked[{/if}]>
                <label for="payment_[{$sPaymentID}]">
                    <b>[{$paymentmethod->oxpayments__oxdesc->value}]</b>
                    <img src="[{$sImageUrl}]eps.png" alt="[{$paymentmethod->oxpayments__oxdesc->value}]" style="vertical-align: middle; width: 65px">
                </label>
            </dt>
            <dd class="payment-option [{if $oView->getCheckedPaymentId() == $paymentmethod->oxpayments__oxid->value}]activePayment[{/if}]">
                [{assign var="oPaymentPrice" value=$paymentmethod->getPrice()}]
                    [{if $oPaymentPrice->getPrice()}]
                    [{if $oViewConf->isFunctionalityEnabled('blShowVATForPayCharge')}]
                        ([{oxprice price=$oPaymentPrice->getNettoPrice() currency=$currency}]
                        [{if $oPaymentPrice->getVatValue() > 0}]
                            [{oxmultilang ident="PLUS_VAT"}] [{oxprice price=$oPaymentPrice->getVatValue() currency=$currency}]
                        [{/if}])
                    [{else}]
                        ([{oxprice price=$oPaymentPrice->getBruttoPrice() currency=$currency}])
                    [{/if}]
                [{/if}]
                [{include file="@d3unzer/wave/mgw/missingfields.tpl" oxidPaymentId=$sPaymentID}]

                [{include file="@d3unzer/generic/mgw/eps.tpl" paymentId=$sPaymentID selectorId="payment_`$sPaymentID`"}]

                [{block name="checkout_payment_longdesc"}]
                    [{if $paymentmethod->oxpayments__oxlongdesc->value}]
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="alert alert-info desc">
                                    [{$paymentmethod->oxpayments__oxlongdesc->getRawValue()}]
                                </div>
                            </div>
                        </div>
                    [{/if}]
                [{/block}]
            </dd>
        </dl>
    </div>
[{/block}]
