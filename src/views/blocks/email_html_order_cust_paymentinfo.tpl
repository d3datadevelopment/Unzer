[{d3modcfgcheck modid="d3heidelpay"}][{/d3modcfgcheck}]

[{if $mod_d3heidelpay }]
    [{assign var="oPrePaymentData" value=$order->getHeidelpayBankTransferData()}]
    [{assign var="easyCreditInformations" value=$order->getHeidelpayEasyCreditInformations()}]

    [{if is_object($oPrePaymentData)}]
        <div>
            <p>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_INFOTEXT1"}]
                <br/>
                <span style="color: red;">[{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_INFOTEXT2"}]</span>
            </p>
            <p>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_ACCOUNTHOLDER"}] [{$oPrePaymentData->Holder}]<br/>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_IBAN"}] [{$oPrePaymentData->Iban}]<br/>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_BIC"}] [{$oPrePaymentData->Bic}]<br/>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_AMOUNT"}] [{$oPrePaymentData->Amount}] [{$oPrePaymentData->Currency}]
                <br/>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_REASON"}] [{$oPrePaymentData->Reference}]
            </p>
        </div>
        <br>
        <br>
    [{/if}]
    [{if is_array($oPrePaymentData)}]
        <div>
            <p>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_INFOTEXT1"}]
                <br/>
                <span style="color: red;">[{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_INFOTEXT2"}]</span>
            </p>
            <p>
                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_REASON"}] [{$oPrePaymentData->Reference}]
                [{if $oPrePaymentData.holder}]
                    [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_ACCOUNTHOLDER"}] [{$oPrePaymentData.holder}]<br/>
                [{/if}]
                [{if $oPrePaymentData.iban}]
                    [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_IBAN"}] [{$oPrePaymentData.iban}]<br/>
                [{/if}]
                [{if $oPrePaymentData.bic}]
                    [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_BIC"}] [{$oPrePaymentData.bic}]<br/>
                [{/if}]

                [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_AMOUNT"}] [{$oPrePaymentData.formattedAmount}] [{$oPrePaymentData.currency}]
                <br/>
                [{if $oPrePaymentData.descriptor}]
                    [{oxmultilang ident="D3HEIDELPAY_EMAIL_PREPAYMENT_REASON"}] [{$oPrePaymentData.descriptor}]
                [{/if}]
                [{if $oPrePaymentData.paymentReference}]
                    [{$oPrePaymentData.paymentReference}]
                [{/if}]
                <br/>
            </p>
        </div>
        <br>
        <br>
    [{/if}]

    [{if $easyCreditInformations}]
        <div>
            <p>
                [{oxmultilang ident="D3HEIDELPAY_ORDER_EASYCREDIT_ACCRUINGINTEREST"}] [{oxprice price=$easyCreditInformations.criterion_easycredit_accruinginterest currency=$currency}]
                <br/>
                [{oxmultilang ident="D3HEIDELPAY_ORDER_EASYCREDIT_TOTALAMOUNT"}] [{oxprice price=$easyCreditInformations.criterion_easycredit_totalamount currency=$currency}]
                <br/>
                <a href="[{$easyCreditInformations.criterion_easycredit_precontractinformationurl}]" target="easyCredit"
                >[{oxmultilang ident="D3HEIDELPAY_ORDER_EASYCREDIT_LINK"}]</a>
            </p>
        </div>
    [{/if}]
[{/if}]

[{$smarty.block.parent}]

