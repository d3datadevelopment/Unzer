<?php

use D3\Unzer\Application\Model\Payment\Creditcard;
use D3\Unzer\Application\Model\Payment\Debitcard;
use D3\Unzer\Application\Model\Payment\Cards;
use D3\Unzer\Application\Model\Payment\Directdebit;
use D3\Unzer\Application\Model\Payment\Directdebit\Secured;
use D3\Unzer\Application\Model\Payment\Prepayment;
use D3\Unzer\Application\Model\Payment\Postfinance;
use D3\Unzer\Application\Model\Payment\Sofortueberweisung;
use D3\Unzer\Application\Model\Payment\Ideal;
use D3\Unzer\Application\Model\Payment\Giropay;
use D3\Unzer\Application\Model\Payment\Eps;
use D3\Unzer\Application\Model\Payment\invoice\Unsecured;
use D3\Unzer\Application\Model\Payment\Paypal;
use D3\Unzer\Application\Model\Payment\Przelewy24;
use D3\Unzer\Application\Model\Payment\Masterpass;
use D3\Unzer\Application\Model\Payment\Easycredit;
use D3\Unzer\Application\Model\Payment\Btobbillpurchase;
use D3\Unzer\Application\Model\Payment\FlexiPayDirect;

return array(
    'charset'                                                           => 'UTF-8',
    'd3mxheidelpay'                                                     => "<i class='fab fa-fw fa-d3unzer d3fa-color-unzer'></i> Unzer",
    'd3mxheidelpay_settings'                                            => 'Settings',
    'd3tbclheidelpay_settings'                                          => 'Main',
    'd3tbclheidelpay_support'                                           => 'Support',
    'd3mxheidelpaylog'                                                  => 'Logging',
    'd3mxheidelpaytransactionlog'                                       => 'Transaction Overview',
    'D3_UNZER_UNSUPPORTED_INTERFACE'                                    => 'The selected %s interface is no longer supported. The setting will be changed, please check the configuration.',
    'D3DYN_HEIDELPAY_ACTIVE'                                            => 'Unzer module active',
    'D3DYN_HEIDELPAY_TESTMOD_ACTIVE'                                    => 'test mode active',
    'D3DYN_HEIDELPAY_PARAM_SECURITYSENDER'                              => 'sender ID',
    'D3DYN_HEIDELPAY_PARAM_USERID'                                      => 'Login',
    'D3DYN_HEIDELPAY_PARAM_PASSWORD'                                    => 'Password',
    'D3DYN_HEIDELPAY_PARAM_CARDS_USE_RG'                                => 'use registration for card-based payment methods (credit card / debit card)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE'                                 => 'booking type card-based payment methods (credit card / debit card)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_DIRECT'                          => 'book amount immediately',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_RESERVE'                         => 'reserve amount only',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_FOREIGNRESERVE'                  => 'book domestic, reserve international',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_PAYPAL'                          => 'booking type (PayPal)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_DIRECTDEBIT'                     => 'booking type (Unzer Direct Debit - direct debit with payment guarantee)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_MASTERPASS'                      => 'booking type (MasterPass)',
    'D3DYN_HEIDELPAY_PARAM_STOREDDATA'                                  => 'Offer stored data to the customer?',
    'D3DYN_HEIDELPAY_PARAM_CURLTIMEOUT'                                 => 'max. cUrl connection time to the server',
    'D3DYN_HEIDELPAY_PARAM_CURLTIMEOUTSEK'                              => 'seconds',
    'D3DYN_HEIDELPAY_PARAM_LOGPAYMENT'                                  => 'log payment actions',
    'D3DYN_HEIDELPAY_PARAM_SHOWERRORTEXTS'                              => 'show error messages in the shop',
    'D3DYN_HEIDELPAY_PARAM_TESTSERVERTYPE'                              => 'test server type',
    'D3DYN_HEIDELPAY_PARAM_TESTMOD_ERRORCODE'                           => 'test mode error code',
    'D3DYN_HEIDELPAY_PARAM_TESTMOD_RETURNCODE'                          => 'test modus return code',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG'                                 => 'D3 Logging',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG_INACTIVE'                        => 'not active',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG_ONLYERRORS'                      => 'errors only',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG_ALL'                             => 'all',
    'D3DYN_HEIDELPAY_NOCURL'                                            => '<b>ATTENTION, module is not operational because PHP-CURL is missing!</b>',
    'D3DYN_HEIDELPAY_PARAM_DEBITUNMASK'                                 => 'save account data completely',
    'D3DYN_HEIDELPAY_PARAM_DEBITUNMASK_NO'                              => 'mask (same as credit card ***)',
    'D3DYN_HEIDELPAY_PARAM_DEBITUNMASK_YES'                             => "don't mask",
    'D3DYN_HEIDELPAY_ACTIVEPAYMENTS'                                    => '<b>Unzer assigned payment methods</b>',
    'D3DYN_HEIDELPAY_NOACTIVEPAYMENTS'                                  => 'There are currently no payment methods assigned to Unzer!',
    'D3DYN_HEIDELPAY_CURRENTPAYMENTS'                                   => '<i>These payment methods are currently processed via the Unzer module.</i>',
    'D3DYN_HEIDELPAY_PAYTYPE'                                           => 'Unzer pay type:',
    'D3_UNZER_RESTRICTIONINFO'                                      => "You are using Unzer 'Basic', therefore some functions are not active. If you want to use all the possibilities of the module, please purchase Unzer 'Premium'.",
    'd3_unzer_controllers_admin_order_unzer'                            => 'Unzer',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SUBMIT'             => 'send',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IS_NOT_HEIDELPAY'   => 'No Unzer transactions available.',
    'D3_UNZER_PAYMENT_CC'                                           => 'Credit card',
    'D3_UNZER_PAYMENT_DD'                                           => 'Direct debit',
    'D3_UNZER_PAYMENT_DC'                                           => 'Debit card',
    'D3_UNZER_PAYMENT_VA'                                           => 'Virtual account',
    'D3_UNZER_PAYMENT_OT'                                           => 'Online transfer',
    'D3_UNZER_PAYMENT_IV'                                           => 'Invoice',
    'D3_UNZER_PAYMENT_PP'                                           => 'Prepayment',
    'D3_UNZER_PAYMENT_WT'                                           => 'Masterpass',
    'D3_UNZER_PAYMENT_HP'                                           => 'easyCredit',
    'D3_UNZER_METHOD_RG'                                            => 'Registration',
    'D3_UNZER_METHOD_PA'                                            => 'Reservation',
    'D3_UNZER_METHOD_DB'                                            => 'Debit',
    'D3_UNZER_METHOD_RF'                                            => 'Refund',
    'D3_UNZER_METHOD_RB'                                            => 'Rebill',
    'D3_UNZER_METHOD_CP'                                            => 'Capture',
    'D3_UNZER_METHOD_RC'                                            => 'Receipt',
    'D3_UNZER_METHOD_RV'                                            => 'Reversal',
    'D3_UNZER_METHOD_FI'                                            => 'Finalize',
    'D3_UNZER_METHOD_IN'                                            => 'Initialize',
    'D3_UNZER_IS_DEMO'                                              =>
        'Demo mode active! You can only use the module in test mode.<br>'
        . 'You can view and change the licence under "Module Connector -> Module Administration -> Unzer".',
    'D3_UNZER_UPDATE_OXCONTENTITEMS'                                =>
        'CMS pages are available, which may need to be updated. '
        . PHP_EOL
        . 'Unfortunately, the content cannot be updated automatically. '
        . PHP_EOL
        . 'Please check them at:'
        . PHP_EOL
        . PHP_EOL
        . 'Shopadmin -> Customer Info -> CMS Pages -> Idents: '
        . PHP_EOL
        . '- d3_hp_vorkassemail_cust_text'
        . PHP_EOL
        . '- d3_hp_vorkassemail_cust_subject'
        . PHP_EOL
        . '- d3_hp_vorkassemail_cust_plain'
        . PHP_EOL
        . '- d3_hp_vorkassemail_owner_text'
        . PHP_EOL
        . '- d3_hp_vorkassemail_owner_subject'
        . PHP_EOL
        . '- d3_hp_vorkassemail_owner_plain'
        . PHP_EOL
        . PHP_EOL
        . 'In the installation directory under setup+doku/CMS you will find '
        . 'a TXT file for comparison, named after the ident of the corresponding CMS page.',
    'D3_UNZER_UPDATE_CHANNELCONFIGURATIONS'                    => 'The configuration of the channel data has changed.'
                                                   .PHP_EOL.'The existing configuration is migrated to a new admin area.'
                                                   .PHP_EOL.'The new admin area can be found under D³ Modules -> Unzer -> Channel Configurations.'
                                                   .PHP_EOL.'On our help page you will get an overview of which settings have changed: https://docs.oxidmodule.com/Unzer/6.1.0.0/changelog/Channel_Rekonfiguration.html'
                                                   .'<br>',
    'D3_UNZER_models_update_legacy_assigments_updatemessage'        =>
        'In this step, the assignments from the shop payment types to Unzer are updated via a script.'
        . PHP_EOL
        . 'To continue, click on "Execute installation step...".'
        . PHP_EOL
        . PHP_EOL
        . 'Note: This step is only possible in the automatic installations.',
    Creditcard::class                                               => 'Credit card',
    Debitcard::class                                                => 'Debit card',
    Cards::class                                                    => 'card-based payment methods (credit cards / debit cards)',
    Directdebit::class                                              => 'SEPA Direct Debit (without payment guarantee)',
    Secured::class                                                  => 'Unzer Direct Debit (Direct debit with payment guarantee - DE/AT)',
    Prepayment::class                                               => 'Unzer Prepayment (autom. prepayment)',
    Postfinance::class                                              => 'PostFinance E-Finance',
    Sofortueberweisung::class                                       => 'Sofort',
    Ideal::class                                                    => 'iDeal',
    Giropay::class                                                  => 'Giropay',
    Eps::class                                                      => 'eps bank transfer',
    \D3\Unzer\Application\Model\payment\invoice\Secured::class      => 'Unzer Invoice (secured invoice B2C - DE/AT)',
    Unsecured::class                                                => 'unsecured invoice (B2B / B2C)',
    Paypal::class                                                   => 'PayPal',
    Przelewy24::class                                               => 'Przelewy24',
    Masterpass::class                                               => 'MasterPass',
    Easycredit::class                                               => 'Easy Credit Instalment purchase',
    Btobbillpurchase::class                                         => 'Unzer Invoice (secured invoice B2B - DE/AT)',
    FlexiPayDirect::class                                           => 'Unzer Bank Transfer',
    'D3_UNZER_CHANNEL_CREDITCARD'                              => 'Credit card',
    'D3_UNZER_CHANNEL_DEBITCARD'                               => 'Debit card',
    'D3_UNZER_CHANNEL_CARDS'                                   => 'Card-based payment methods (credit cards / debit cards)',
    'D3_UNZER_CHANNEL_DIRECTDEBITSECURED'                      => 'Unzer Direct Debit (direct debit with payment guarantee - DE/AT)',
    'D3_UNZER_CHANNEL_DIRECTDEBITUNSECURED'                    => 'SEPA Direct Debit (without payment guarantee)',
    'D3_UNZER_CHANNEL_EASYCREDIT'                              => 'Easy Credit instalment purchase',
    'D3_UNZER_CHANNEL_EPS'                                     => 'eps bank transfer',
    'D3_UNZER_CHANNEL_SOFORT'                                              => 'Sofort',
    'D3_UNZER_CHANNEL_GIROPAY'                                             => 'Giropay',
    'D3_UNZER_CHANNEL_PREPAYMENT'                                          => 'Unzer Prepayment (autom. prepayment)',
    'D3_UNZER_CHANNEL_IDEAL'                                               => 'iDeal',
    'D3_UNZER_CHANNEL_INVOICESECURED'                                      => 'Unzer Invoice (secured invoice B2C - DE/AT)',
    'D3_UNZER_CHANNEL_INVOICEUNSECURED'                                    => 'unsecured invoice (B2B / B2C)',
    'D3_UNZER_CHANNEL_MASTERPASS'                                          => 'MasterPass',
    'D3_UNZER_CHANNEL_PAYPAL'                                              => 'PayPal',
    'D3_UNZER_CHANNEL_PRZELEWY24'                                          => 'Przelewy24',
    'D3_UNZER_CHANNEL_POSTFINANCE'                                         => 'PostFinance E-Finance',
    'D3_UNZER_CHANNEL_B2BBILLPURCHASE'                                     => 'Unzer Invoice (secured invoice B2B - DE/AT)',
    'D3_UNZER_CHANNEL_FLEXIPAYDIRECT'                                      => 'Unzer Bank Transfer',
    'D3_UNZER_CHANNEL_NOTSELECTABLE'                                       => 'not selectable payment type',
    'D3_UNZER_RESTRICTIONINFO_ORDER'                                           => 'You are using Unzer "Basic", therefore the payment options ("Refund" etc.) will be shown to you, but will not execute a transaction.<br>If you want to use all the possibilities of the module, please purchase Unzer "Premium".',
    'D3_UNZER_UPDATE_CHANGE_HAENDLERKONTO'                                     => 'Important notes on your Unzer dealer contract (concerns updates from smaller 4.0.5.0 to current module version)'
                                                                           . PHP_EOL . PHP_EOL
                                                                           . 'Only relevant for payment type "Immediately". '
                                                                           . PHP_EOL
                                                                           . 'The module uses a special option of the Unzer configuration for Sofort. The end customer first enters his bank details on the Sofort website. This option is set up in your merchant account.'
                                                                           . PHP_EOL
                                                                           . 'Only with this setting is it possible to use the payment type "Sofort"!'
                                                                           . PHP_EOL . PHP_EOL
                                                                           . 'Contact your Unzer dealer advisor before the module goes live so that this option can be activated for your dealer account.'
                                                                           . PHP_EOL . PHP_EOL
                                                                           . 'Important: If you update the module, the above option may be inactive. Please ask your Unzer dealer advisor to check the above-mentioned option before installing the module update.
    ',
    'D3DYN_HEIDELPAY_ORDER_EXECUTE_POST_FIELDS'                         => 'mandatory fields for checkout',
    'D3DYN_HEIDELPAY_ADDITIONAL_URL_PARAMETER'                          => 'additional URL parameters for tracking',
    'D3UNZER_sD3HpHFOrderPendingTime'                               => 'lifetime of a PENDING order (in hours)',
    'D3UNZER_sD3HpHFOrderCancelType'                                => 'action after lifetime',
    'D3UNZER_sD3HpHFOrderCancelType_PLEASE_CHOOSE'                  => 'NOT_FINISHED (oxorder__oxtransstatus)',
    'D3UNZER_sD3HpHFOrderCancelType_CANCEL_ORDER'                   => 'cancel order',
    'D3UNZER_sD3HpHFOrderCancelType_DELETE_ORDER'                   => 'delete order',
    'D3UNZER_sD3HpHFOrderLimit'                                     => 'Set a limit of orders for the cronjob.',
    'D3UNZER_blD3HpHFSetZeroOrderNumber'                            => 'generate PENDING orders with order number 0',
    'D3UNZER_SETTINGS_FOR_IDEAL_AND_P24_CRONJOB'                    => 'cronjob settings (iDeal and Przelewy24)',
    'D3DYN_HEIDELPAY_LOGIN_LIVE_HEADER'                                 => 'login data live environment',
    'D3DYN_HEIDELPAY_LOGIN_TEST_HEADER'                                 => 'Login Daten Testumgebung',
    'D3DYN_HEIDELPAY_EXTENDED_SETTINGS'                                 => 'advanced settings for the Unzer payment types',
    'D3DYN_HEIDELPAY_LOG_AND_SECURITY'                                  => 'settings for module logging, malfunctions and language',
    'D3UNZER_DIFFERENCE_IN_ORDER_SUBJECT'                           => 'difference between order and transaction detected! Order no: ',
    'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORMESSAGE'                     => 'A difference was found between the value of the shopping basket ordered and the transaction value posted (payment at Unzer).' //
                                                                           . '<br>Please check the order "%1$s" and the transaction at Unzer with the UniqueID "%2$s".' //
                                                                           . '<br>In the transaction "%3$s" were booked and "%4$s" are deposited on the order.' //
                                                                           . '<br><br>For example, it may be a technical error or an un/knowingly attempted fraud.',
    'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORMAIL'                        => 'E-mail address for detected incidents',
    'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORSTATUS'                      => 'Order status for detected malfunctions',
    'D3UNZER_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_SUBJECT'        => '"%1$s": a successful transaction without an order has been received. ShortID: ',
    'D3UNZER_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_TEXT'           => 'A successful transaction was received from Unzer. An attempt was made to create the order, but this was rejected by the shop.<br>'//
                                                                           . 'Presumably the transaction must be credited back to the customer! (Refund) <br>If you have any questions, please consult your shop supervisor and forward this message to him.<br><br>Shop Details: <br>',
    'D3UNZER_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_DETAILS'        => '<br>Transaction details: ',
    'D3UNZER_CARDTYPE_TIMEOUT'                                      => 'Time limit for card data input (iFrame)',
    'D3UNZERNOTESHOWNFORSTOREDDATA'                                 => 'Stored payment data was found.<br>These can include debits (DB) and registrations (RG).' //
                                                                           . '<br>In future, registration (RG) will be required for subsequent payments.' //
                                                                           . '<br>In the next step, the automatic installation removes all stored payment data that are not registrations (RG) and of the credit or debit card type.' //
                                                                           . '<br><br>In addition, the active tick at "Use registration for cards (credit card, debit card)" is required (if necessary, this option will be set automatically in a later installation step).' //
                                                                           . '<br>Registration (RG) is an additional transaction and is subject to a fee.' //
                                                                           . '<br><br>If you do not want to use this option, please uncheck "Offer stored data to customer?" and "Use registration for cards (credit card, debit card)".' //
                                                                           . '<br>You can find this under D3 Modules -> Unzer -> Settings.' //
                                                                           . '<br><br>Bank data is stored directly in the shop since module version 5.2.0.0 and is not affected.' //
                                                                           . '<br><br>By clicking on "Execute installation step..." you acknowledge the deletion of the data that can no longer be used. ',
    'D3UNZERNOTESTOREDDATAWITHOUTRG'                                => 'You use the option "Offer stored data to the customer?' //
                                                                           . '<br>For future use of the option, the active setting "Use registration for cards (credit card, debit card)" is required.' //
                                                                           . '<br>This is activated with this installation step and can be deactivated if required under Unzer -> Settings.' //
                                                                           . '<br><br>Info on the setting "Use registration for cards (credit card, debit card)":',
    'D3UNZERNOTESTOREDDATAWITHOUTRG_SAVING'                         => 'You use the option "Offer stored data to the customer?' //
                                                                           . '<br>For future use of the option, the active setting "Use registration for cards (credit card, debit card)" is required.'
                                                                           . '<br>The module has automatically set the setting and can be deactivated if required.',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CRITERIONTAGS'      => 'additional parameters for the transaction',
    'criterion_paypal_payer_id'                                         => 'Paypal payer ID',
    'criterion_paypal_reg_token'                                        => 'Paypal referenz Token',
    'criterion_ideal_entrancecode'                                      => 'iDeal entrance code',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_HOLDER'             => 'receiver',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BANKNAME'         => 'bank',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IBAN'             => 'IBAN',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BIC'              => 'BIC',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_AMOUNT'           => 'amount',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_REASON'           => 'intended use',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_UNIQUEID'         => 'UniqueID',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CODE'             => 'Code',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_MESSAGE'          => 'dealer message',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_ACTIONS'          => 'nachfolgende Aktionen',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SHORTID'          => 'Short ID',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONTIME'  => 'transaction date',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONID'    => 'transaction ID',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_DESCRIPTOR'       => 'descriptor',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_PAYMENTREFERENCE' => 'intended use',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BANKTRANSFERDATA' => 'Here you can view the transfer information for the end customer.',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_SELECTREASON'    => '-- Please choose a reason --',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_CANCEL'          => 'The customer cancels the order',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_RETURN'          => 'The customer returns the goods',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_CREDIT'          => 'The merchant (you) gives credit to the customer',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_UNIQUE_INVOICEID'           => 'unique invoice number',
    'D3_UNZER_CONTROLLERS_ADMIN_ERR_EMPTY_INVOICEID'              => 'The invoice ID must not be empty.',
    'D3DYN_HEIDELPAY_PARAM_CSSPATH'                                   => 'CSS file for iFrame recognised by module?',
    'D3DYN_HEIDELPAY_PARAM_CSSPATH_LINK'                              => 'to the CSS file',
    'D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES'                    => 'allow multilingual configurations',
    'D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES_REACTIVATE'           => 'activate the option "Allow multilingual configurations',
    'D3DYN_HEIDELPAY_PARAM_REMOVEMULTIPLELANGUAGES'                     => 'remove multilingual configurations',
    'D3DYN_HEIDELPAY_HASMULTILANGCONFIGBUTNOSETTING'                    => 'A configuration in another language was found!<br>Should the configuration(s) be removed?',
    'D3UNZER_MULTIPLE_LANGUAGECONFIGURATIONS_FOUND'                 => 'Unzer: A configuration in another language was found!<br>Please go to Unzer -> Settings -> Main in the Admin and follow the instruction.<br>This step will only be displayed to you when the Unzer module installation is complete.',
    'D3DYN_HEIDELPAY_PARAM_EASYCREDITLIMITMINIMUM'                      => 'Minimum order value for Easy Credit hire purchase',
    'D3DYN_HEIDELPAY_PARAM_EASYCREDITLIMITMAXIMUM'                      => 'Maximum order value for Easy Credit hire purchase',
    'D3DYN_HEIDELPAY_PARAM_INVOICESECUREDLIMITMINIMUM'                  => 'Minimum order value for Unzer Invoice (secured invoice purchase)',
    'D3DYN_HEIDELPAY_PARAM_INVOICESECUREDLIMITMAXIMUM'                  => 'Maximum order value for Unzer Invoice (secured invoice purchase)',
    'D3UNZER_SETTINGS_NOTIFY_LABEL'                                 => 'Push Notification Settings and Info',
    'D3UNZER_SETTINGS_NOTIFYURL_INFO'                               => 'In order to be able to use the push notifications, the url of the recipient file below must be communicated to Unzer Support.'
                                                                           . '<br>The url will then be entered in the dealer account by Unzer Support.'
                                                                           . '<br>Only then can the shop receive the push notifications!',
    'D3UNZER_SETTINGS_NOTIFYURL'                                    => 'Push Notification Url',
    'd3_unzer_controllers_admin_channels_base'                      => 'Channel configurations',
    'd3_unzer_controllers_admin_channels_main'                      => 'settings',
    'd3_unzer_controllers_admin_channels_payments'                  => 'payment methods',
    'D3UNZER_CONFIG_TITLE'                                          => 'Title',
    'D3UNZER_CONFIG_CHANNEL'                                        => 'Channel',
    'D3UNZER_CONFIG_LOGLEVEL'                                       => 'log settings',
    'D3UNZER_CONFIG_ISTESTCONFIG'                                   => 'Test mode',
    'D3UNZER_INACTIVE'                                              => 'inactive',
    'D3UNZER_CONFIG_ALREADY_ASSIGNED_TO_OTHER_CONFIG'               => 'This configuration is already assigned to another configuration.',
    'D3UNZER_CONFIG_STATUS'                                         => 'Status',
    'D3UNZER_CONFIG_SHOPPAYMENT'                                    => 'shop payment method',
    'D3UNZER_CONFIG_ISASSIGNED'                                     => 'Assigned?',
    'D3UNZER_CONFIG_UNASSIGNED'                                     => 'no assignment',
    'D3UNZER_CONFIG_CHANNELCONFIGURATION'                           => 'channel configuration',
    'D3UNZER_NEW_CONFIG_CHANNEL'                                    => 'create new channel configuration',
    'D3_UNZER_THIS_PAYMENT_RESTRICTIONINFO'                         => 'You would like to use a premium payment method.' //
                                                                           .'<br>The active checkmark of the channel configuration and the assignments of the shop payment types are not saved!'//
                                                                           .'<br>You can purchase the Premium Module in our <a href="https://www.oxidmodule.com/" title="oxidmodule.com" target="https://www.oxidmodule.com/">onlineshop</a>.',
    'D3UNZER_INTERFACE_TYPE'                                        => 'Select the interface.',
    'D3UNZER_INTERFACE_TYPE_NGW'                                    => 'NGW',
    'D3UNZER_INTERFACE_TYPE_MGW'                                    => 'MGW/rest',
    'D3UNZER_SETTINGS_MGW_PRIVATE'                                  => 'private key',
    'D3UNZER_SETTINGS_MGW_PUBLIC'                                   => 'public key',
    'D3UNZER_LOGIN_MGW_HEADER'                                      => 'access keys',
    'D3UNZER_MGW_TRANSACTIONTYPE_authorization'                     => 'reservation',
    'D3UNZER_MGW_TRANSACTIONTYPE_cancellation'                      => 'cancellation',
    'D3UNZER_MGW_TRANSACTIONTYPE_charge'                            => 'debit',
    'D3UNZER_MGW_TRANSACTIONTYPE_cancelAuthorize'                   => 'cancel reservation',
    'D3UNZER_MGW_TRANSACTIONTYPE_cancelCharge'                      => 'cancel debit',
    'D3UNZER_MGW_TRANSACTIONTYPE_finalize'                          => 'finalize invoice',
    'D3UNZER_MGW_AMOUNT_TOTAL'                                      => 'total amount',
    'D3UNZER_MGW_AMOUNT_REMAINING'                                  => 'remaining total amount',
    'D3UNZER_MGW_AMOUNT_CHARGED'                                    => 'total amount booked',
    'D3UNZER_MGW_AMOUNT_CANCELED'                                   => 'total amount cancelled',
    'D3UNZER_MGW_PAYMENTSTATE_completed'                            => 'fully paid',
    'D3UNZER_MGW_PAYMENTSTATE_partly'                               => 'partially paid',
    'D3UNZER_MGW_PAYMENTSTATE_canceled'                             => 'payment cancelled',
    'D3UNZER_MGW_PAYMENTSTATE_pending'                              => 'waiting for payment',
    'D3UNZER_MGW_PAYMENTSTATE_chargeback'                           => 'chargeback',
    'D3UNZER_SETTINGS_MGW_DEBUGMODE'                                => 'debug mode active',
    'D3DYN_HEIDELPAY_PARAM_SHOWSEPAGURANTEEDCUSTOMERFORMULAR'           => 'SEPA secured direct debit - show customer data entry:',
    'D3DYN_HEIDELPAY_PARAM_DONTSHOWDIRECTDEBITMANDATECHECKBOX'          => 'Direct debit mandate does not have to be accepted:',

    'D3UNZER_PAYMENT_COMPANY_DATE'                                   => 'Date',
    'D3UNZER_PAYMENT_COMPANY_RESULT'                                 => 'Result',
    'D3UNZER_PAYMENT_COMPANY_CARDS'                                  => 'Credit/Debit',
    'D3UNZER_PAYMENT_COMPANY_METHOD'                                 => 'Methode',
    'D3UNZER_PAYMENT_COMPANY_PAYMENTTYPE'                            => 'Payment type',
    'D3UNZER_PAYMENT_COMPANY_TXNID'                                  => 'Txn-ID',
    'D3UNZER_PAYMENT_COMPANY_UNIQUEID'                               => 'Unique ID',
    'D3UNZER_PAYMENT_COMPANY_SHORTID'                                => 'Short ID',

    'D3UNZER_CHANNELS_ASSIGNED'                                      => 'The shop payment type is assigned to this channel configuration.',
    'D3UNZER_CHANNELS_NOTASSIGNED'                                   => 'The shop payment type has no assignment and can be assigned.',
    'D3UNZER_CHANNELS_SAVE'                                          => 'Save assignment(s)',

    'D3UNZER_WEBHOOKS_HEADLINE'                                      => 'registered webhooks',
    'D3UNZER_WEBHOOKS_HEADLINE_URL'                                  => 'URL',
    'D3UNZER_WEBHOOKS_HEADLINE_EVENTS'                               => 'Events',
    'D3UNZER_WEBHOOKS_HEADLINE_ID'                                   => 'Id',
    'D3UNZER_WEBHOOKS_NOWEBHOOKREGISTERED'                           => 'No webhook registered!',
    'D3UNZER_WEBHOOKS_ERR_CLEARING'                                  => 'clear webhook(s): %1$s',
    'D3UNZER_WEBHOOKS_ERR_CREATE'                                    => 'create webhook: %1$s',
    'D3UNZER_WEBHOOKS_ERR_GET'                                       => 'request webhook(s): %1$s',
    'D3UNZER_WEBHOOKS_ERR_NOTBLANK'                                  => '%1$s mustn\'t blank',
);
