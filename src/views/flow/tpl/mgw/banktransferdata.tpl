<div class="alert alert-info">
    <p>
        [{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_INFOTEXT1"}]
        <br/>
        <span>[{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_INFOTEXT2"}]</span>
    </p>

    <p>
        [{if $oPrePaymentData.holder}]
            [{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_ACCOUNTHOLDER"}] [{$oPrePaymentData.holder}]<br/>
        [{/if}]
        [{if $oPrePaymentData.iban}]
            [{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_IBAN"}] [{$oPrePaymentData.iban}]<br/>
        [{/if}]
        [{if $oPrePaymentData.bic}]
        [{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_BIC"}] [{$oPrePaymentData.bic}]<br/>
        [{/if}]

        [{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_AMOUNT"}] [{$oPrePaymentData.formattedAmount}] [{$oPrePaymentData.currency}]
        <br/>
        [{if $oPrePaymentData.descriptor}]
            [{oxmultilang ident="D3HEIDELPAY_THANKYOU_PREPAYMENT_REASON"}] [{$oPrePaymentData.descriptor}]
        [{/if}]
        [{if $oPrePaymentData.paymentReference}]
            [{$oPrePaymentData.paymentReference}]
        [{/if}]
    </p>
</div>
