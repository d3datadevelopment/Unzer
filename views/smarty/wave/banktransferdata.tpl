<div class="alert alert-info">
    <p>
        [{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_INFOTEXT1"}]
        <br/>
        <span>[{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_INFOTEXT2"}]</span>
    </p>

    <p>
        [{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_ACCOUNTHOLDER"}] [{$oPrePaymentData->Holder}]<br/>
        [{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_IBAN"}] [{$oPrePaymentData->Iban}]<br/>
        [{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_BIC"}] [{$oPrePaymentData->Bic}]<br/>
        [{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_AMOUNT"}] [{$oPrePaymentData->Amount}] [{$oPrePaymentData->Currency}]
        <br/>
        [{oxmultilang ident="D3UNZER_THANKYOU_PREPAYMENT_REASON"}] [{$oPrePaymentData->Reference}]
    </p>
</div>
