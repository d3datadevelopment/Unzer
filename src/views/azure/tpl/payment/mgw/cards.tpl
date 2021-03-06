[{block name="heidelpay_cards"}]
    <dl>
        <dt>
            <input id="payment_[{$sPaymentID}]"
                   type="radio"
                   name="paymentid"
                   value="[{$sPaymentID}]"
                   [{if $oView->getCheckedPaymentId() == $paymentmethod->oxpayments__oxid->value}]checked[{/if}]>
            <label for="payment_[{$sPaymentID}]"><b>[{$paymentmethod->oxpayments__oxdesc->value}]</b></label>
            [{foreach from=$aBrands item='sBrandName' key='sBrandIdent'}]
                [{assign var="sBrandIdent" value=$sBrandIdent|lower}]
                [{assign var="sFullImageUrl" value=$sImageUrl|cat:'logo_'|cat:$sBrandIdent|cat:'.jpg'}]
                [{include file="d3_heidelpay_views_tpl_payment_img.tpl" sImageUrl=$sFullImageUrl sBrandIdent=$sBrandIdent}]
            [{/foreach}]
        </dt>
        <dd class="[{if $oView->getCheckedPaymentId() == $paymentmethod->oxpayments__oxid->value}]activePayment[{/if}]">
            [{include file="d3_heidelpay_views_tpl_mgw_cards.tpl" paymentId=$sPaymentID selectorId="payment_`$sPaymentID`"}]

            [{if $paymentmethod->oxpayments__oxlongdesc->value}]
                <div class="desc">
                    [{$paymentmethod->oxpayments__oxlongdesc->getRawValue()}]
                </div>
            [{/if}]
        </dd>
    </dl>
[{/block}]
