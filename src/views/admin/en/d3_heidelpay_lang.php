<?php

$sLangName = "English";
$iLangNr   = 1;
$aLang     = array(
    'charset'                                                           => 'UTF-8',
    'd3mxheidelpay'                                                     => "<i class='fab fa-fw fa-d3unzer d3fa-color-unzer'></i> Unzer",
    'd3mxheidelpay_settings'                                            => 'Settings',
    'd3tbclheidelpay_settings'                                          => 'Main',
    'd3tbclheidelpay_support'                                           => 'Support',
    'd3mxheidelpaylog'                                                  => 'Logging',
    'd3mxheidelpaytransactionlog'                                       => 'Transaction Overview',
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
    'D3_HEIDELPAY_RESTRICTIONINFO'                                      => "You are using Unzer 'Basic', therefore some functions are not active. If you want to use all the possibilities of the module, please purchase Unzer 'Premium'.",
    'd3_heidelpay_controllers_admin_order_heidelpay'                    => 'Unzer',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SUBMIT'             => 'send',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IS_NOT_HEIDELPAY'   => 'No Unzer transactions available.',
    'D3_HEIDELPAY_PAYMENT_CC'                                           => 'Credit card',
    'D3_HEIDELPAY_PAYMENT_DD'                                           => 'Direct debit',
    'D3_HEIDELPAY_PAYMENT_DC'                                           => 'Debit card',
    'D3_HEIDELPAY_PAYMENT_VA'                                           => 'Virtual account',
    'D3_HEIDELPAY_PAYMENT_OT'                                           => 'Online transfer',
    'D3_HEIDELPAY_PAYMENT_IV'                                           => 'Invoice',
    'D3_HEIDELPAY_PAYMENT_PP'                                           => 'Prepayment',
    'D3_HEIDELPAY_PAYMENT_WT'                                           => 'Masterpass',
    'D3_HEIDELPAY_PAYMENT_HP'                                           => 'easyCredit',
    'D3_HEIDELPAY_METHOD_RG'                                            => 'Registration',
    'D3_HEIDELPAY_METHOD_PA'                                            => 'Reservation',
    'D3_HEIDELPAY_METHOD_DB'                                            => 'Debit',
    'D3_HEIDELPAY_METHOD_RF'                                            => 'Refund',
    'D3_HEIDELPAY_METHOD_RB'                                            => 'Rebill',
    'D3_HEIDELPAY_METHOD_CP'                                            => 'Capture',
    'D3_HEIDELPAY_METHOD_RC'                                            => 'Receipt',
    'D3_HEIDELPAY_METHOD_RV'                                            => 'Reversal',
    'D3_HEIDELPAY_METHOD_FI'                                            => 'Finalize',
    'D3_HEIDELPAY_METHOD_IN'                                            => 'Initialize',
    'D3_HEIDELPAY_IS_DEMO'                                              =>
        'Demo mode active! You can only use the module in test mode.<br>'
        . 'You can view and change the licence under "Module Connector -> Module Administration -> Unzer".',
    'D3_HEIDELPAY_UPDATE_OXCONTENTITEMS'                                =>
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
    'D3_HEIDELPAY_UPDATE_CHANNELCONFIGURATIONS' => 'The configuration of the channel data has changed.'
                                                   .PHP_EOL.'The existing configuration is migrated to a new admin area.'
                                                   .PHP_EOL.'The new admin area can be found under D³ Modules -> Unzer -> Channel Configurations.'
                                                   .PHP_EOL.'On our help page you will get an overview of which settings have changed: https://docs.oxidmodule.com/Unzer/6.1.0.0/changelog/Channel_Rekonfiguration.html'
                                                   .'<br>',
    'D3_Heidelpay_models_update_legacy_assigments_updatemessage'        =>
        'In this step, the assignments from the shop payment types to Unzer are updated via a script.'
        . PHP_EOL
        . 'To continue, click on "Execute installation step...".'
        . PHP_EOL
        . PHP_EOL
        . 'Note: This step is only possible in the automatic installations.',
    'd3\heidelpay\models\payment\creditcard'                            => 'Credit card',
    'd3\heidelpay\models\payment\debitcard'                             => 'Debit card',
    'd3\heidelpay\models\payment\cards'                                 => 'card-based payment methods (credit cards / debit cards)',
    'd3\heidelpay\models\payment\directdebit'                           => 'SEPA Direct Debit (without payment guarantee)',
    'd3\heidelpay\models\payment\directdebit\secured'                   => 'Unzer Direct Debit (Direct debit with payment guarantee - DE/AT)',
    'd3\heidelpay\models\payment\prepayment'                            => 'Unzer Prepayment (autom. prepayment)',
    'd3\heidelpay\models\payment\postfinance'                           => 'PostFinance E-Finance',
    'd3\heidelpay\models\payment\sofortueberweisung'                    => 'Sofort',
    'd3\heidelpay\models\payment\ideal'                                 => 'iDeal',
    'd3\heidelpay\models\payment\giropay'                               => 'Giropay',
    'd3\heidelpay\models\payment\eps'                                   => 'eps bank transfer',
    'd3\heidelpay\models\payment\invoice\secured'                       => 'Unzer Invoice (secured invoice B2C - DE/AT)',
    'd3\heidelpay\models\payment\invoice\unsecured'                     => 'unsecured invoice (B2B / B2C)',
    'd3\heidelpay\models\payment\paypal'                                => 'PayPal',
    'd3\heidelpay\models\payment\przelewy24'                            => 'Przelewy24',
    'd3\heidelpay\models\payment\masterpass'                            => 'MasterPass',
    'd3\heidelpay\models\payment\easycredit'                            => 'Easy Credit Instalment purchase',
    'd3\heidelpay\models\payment\btobbillpurchase'                      => 'Unzer Invoice (secured invoice B2B - DE/AT)',
    'd3\heidelpay\models\payment\flexipaydirect'                        => 'Unzer Bank Transfer',
    'd3\heidelpay\models\settings\channels\creditcard'                  => 'Credit card',
    'd3\heidelpay\models\settings\channels\debitcard'                   => 'Debit card',
    'd3\heidelpay\models\settings\channels\cards'                       => 'Card-based payment methods (credit cards / debit cards)',
    'd3\heidelpay\models\settings\channels\directdebit\secured'         => 'Unzer Direct Debit (direct debit with payment guarantee - DE/AT)',
    'd3\heidelpay\models\settings\channels\directdebit\unsecured'       => 'SEPA Direct Debit (without payment guarantee)',
    'd3\heidelpay\models\settings\channels\easycredit'                  => 'Easy Credit instalment purchase',
    'd3\heidelpay\models\settings\channels\eps'                         => 'eps bank transfer',
    'd3\heidelpay\models\settings\channels\sofort'                      => 'Sofort',
    'd3\heidelpay\models\settings\channels\giropay'                     => 'Giropay',
    'd3\heidelpay\models\settings\channels\prepayment'                  => 'Unzer Prepayment (autom. prepayment)',
    'd3\heidelpay\models\settings\channels\ideal'                       => 'iDeal',
    'd3\heidelpay\models\settings\channels\invoice\secured'             => 'Unzer Invoice (secured invoice B2C - DE/AT)',
    'd3\heidelpay\models\settings\channels\invoice\unsecured'           => 'unsecured invoice (B2B / B2C)',
    'd3\heidelpay\models\settings\channels\masterpass'                  => 'MasterPass',
    'd3\heidelpay\models\settings\channels\paypal'                      => 'PayPal',
    'd3\heidelpay\models\settings\channels\przelewy24'                  => 'Przelewy24',
    'd3\heidelpay\models\settings\channels\postfinance'                 => 'PostFinance E-Finance',
    'd3\heidelpay\models\settings\channels\btobbillpurchase'            => 'Unzer Invoice (secured invoice B2B - DE/AT)',
    'd3\heidelpay\models\settings\channels\flexipaydirect'              => 'Unzer Bank Transfer',
    'D3_HEIDELPAY_RESTRICTIONINFO_ORDER'                                => 'You are using Unzer "Basic", therefore the payment options ("Refund" etc.) will be shown to you, but will not execute a transaction.<br>If you want to use all the possibilities of the module, please purchase Unzer "Premium".',
    'D3_HEIDELPAY_UPDATE_CHANGE_HAENDLERKONTO'                          => 'Important notes on your Unzer dealer contract (concerns updates from smaller 4.0.5.0 to current module version)'
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
    'D3HEIDELPAY_sD3HpHFOrderPendingTime'                               => 'lifetime of a PENDING order (in hours)',
    'D3HEIDELPAY_sD3HpHFOrderCancelType'                                => 'action after lifetime',
    'D3HEIDELPAY_sD3HpHFOrderCancelType_PLEASE_CHOOSE'                  => 'NOT_FINISHED (oxorder__oxtransstatus)',
    'D3HEIDELPAY_sD3HpHFOrderCancelType_CANCEL_ORDER'                   => 'cancel order',
    'D3HEIDELPAY_sD3HpHFOrderCancelType_DELETE_ORDER'                   => 'delete order',
    'D3HEIDELPAY_sD3HpHFOrderLimit'                                     => 'Set a limit of orders for the cronjob.',
    'D3HEIDELPAY_blD3HpHFSetZeroOrderNumber'                            => 'generate PENDING orders with order number 0',
    'D3HEIDELPAY_SETTINGS_FOR_IDEAL_AND_P24_CRONJOB'                    => 'cronjob settings (iDeal and Przelewy24)',
    'D3DYN_HEIDELPAY_LOGIN_LIVE_HEADER'                                 => 'login data live environment',
    'D3DYN_HEIDELPAY_LOGIN_TEST_HEADER'                                 => 'Login Daten Testumgebung',
    'D3DYN_HEIDELPAY_EXTENDED_SETTINGS'                                 => 'advanced settings for the Unzer payment types',
    'D3DYN_HEIDELPAY_LOG_AND_SECURITY'                                  => 'settings for module logging, malfunctions and language',
    'D3HEIDELPAY_DIFFERENCE_IN_ORDER_SUBJECT'                           => 'difference between order and transaction detected! Order no: ',
    'D3HEIDELPAY_DIFFERENCE_IN_ORDER_ERRRORMESSAGE'                     => 'A difference was found between the value of the shopping basket ordered and the transaction value posted (payment at Unzer).' //
                                                                           . '<br>Please check the order "%1$s" and the transaction at Unzer with the UniqueID "%2$s".' //
                                                                           . '<br>In the transaction "%3$s" were booked and "%4$s" are deposited on the order.' //
                                                                           . '<br><br>For example, it may be a technical error or an un/knowingly attempted fraud.',
    'D3HEIDELPAY_DIFFERENCE_IN_ORDER_ERRRORMAIL'                        => 'E-mail address for detected incidents',
    'D3HEIDELPAY_DIFFERENCE_IN_ORDER_ERRRORSTATUS'                      => 'Order status for detected malfunctions',
    'D3HEIDELPAY_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_SUBJECT'        => '"%1$s": a successful transaction without an order has been received. ShortID: ',
    'D3HEIDELPAY_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_TEXT'           => 'A successful transaction was received from Unzer. An attempt was made to create the order, but this was rejected by the shop.<br>'//
                                                                           . 'Presumably the transaction must be credited back to the customer! (Refund) <br>If you have any questions, please consult your shop supervisor and forward this message to him.<br><br>Shop Details: <br>',
    'D3HEIDELPAY_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_DETAILS'        => '<br>Transaction details: ',
    'D3HEIDELPAY_CARDTYPE_TIMEOUT'                                      => 'Time limit for card data input (iFrame)',
    'D3HEIDELPAYNOTESHOWNFORSTOREDDATA'                                 => 'Stored payment data was found.' //
                                                                           . "<br>These can include debits (DB) and registrations (RG)." //
                                                                           . '<br>In future, registration (RG) will be required for subsequent payments.' //
                                                                           . '<br>In the next step, the automatic installation removes all stored payment data that are not registrations (RG) and of the credit or debit card type.' //
                                                                           . '<br><br>In addition, the active tick at "Use registration for cards (credit card, debit card)" is required (if necessary, this option will be set automatically in a later installation step).' //
                                                                           . '<br>Registration (RG) is an additional transaction and is subject to a fee.' //
                                                                           . '<br><br>If you do not want to use this option, please uncheck "Offer stored data to customer?" and "Use registration for cards (credit card, debit card)".' //
                                                                           . '<br>You can find this under D3 Modules -> Unzer -> Settings.' //
                                                                           . '<br><br>Bank data is stored directly in the shop since module version 5.2.0.0 and is not affected.' //
                                                                           . '<br><br>By clicking on "Execute installation step..." you acknowledge the deletion of the data that can no longer be used. ',
    'D3HEIDELPAYNOTESTOREDDATAWITHOUTRG'                                => 'You use the option "Offer stored data to the customer?' //
                                                                           . '<br>For future use of the option, the active setting "Use registration for cards (credit card, debit card)" is required.' //
                                                                           . '<br>This is activated with this installation step and can be deactivated if required under Unzer -> Settings.' //
                                                                           . '<br><br>Info on the setting "Use registration for cards (credit card, debit card)":',
    'D3HEIDELPAYNOTESTOREDDATAWITHOUTRG_SAVING'                         => 'You use the option "Offer stored data to the customer?' //
                                                                           . '<br>For future use of the option, the active setting "Use registration for cards (credit card, debit card)" is required.'
                                                                           . '<br>The module has automatically set the setting and can be deactivated if required.',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CRITERIONTAGS'      => 'additional parameters for the transaction',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_DETAILS'            => 'parameters passed for the transaction',
    'criterion_paypal_payer_id'                                         => 'Paypal payer ID',
    'criterion_paypal_reg_token'                                        => 'Paypal referenz Token',
    'criterion_ideal_entrancecode'                                      => 'iDeal entrance code',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_HOLDER'             => 'receiver',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BANKNAME'         => 'bank',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IBAN'             => 'IBAN',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BIC'              => 'BIC',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_AMOUNT'           => 'amount',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_REASON'           => 'intended use',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_UNIQUEID'         => 'UniqueID',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CODE'             => 'Code',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_MESSAGE'          => 'dealer message',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_ACTIONS'          => 'nachfolgende Aktionen',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SHORTID'          => 'Short ID',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONTIME'  => 'transaction date',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONID'    => 'transaction ID',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_DESCRIPTOR'       => 'descriptor',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_PAYMENTREFERENCE' => 'intended use',
    'D3_HEIDELPAY_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BANKTRANSFERDATA' => 'Here you can view the transfer information for the end customer.',
    'D3DYN_HEIDELPAY_PARAM_CSSPATH'                                   => 'CSS file for iFrame recognised by module?',
    'D3DYN_HEIDELPAY_PARAM_CSSPATH_LINK'                              => 'to the CSS file',
    'D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES'                    => 'allow multilingual configurations',
    'D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES_REACTIVATE'           => 'activate the option "Allow multilingual configurations',
    'D3DYN_HEIDELPAY_PARAM_REMOVEMULTIPLELANGUAGES'                     => 'remove multilingual configurations',
    'D3DYN_HEIDELPAY_HASMULTILANGCONFIGBUTNOSETTING'                    => 'A configuration in another language was found!<br>Should the configuration(s) be removed?',
    'D3HEIDELPAY_MULTIPLE_LANGUAGECONFIGURATIONS_FOUND'                 => 'Unzer: A configuration in another language was found!<br>Please go to Unzer -> Settings -> Main in the Admin and follow the instruction.<br>This step will only be displayed to you when the Unzer module installation is complete.',
    'D3DYN_HEIDELPAY_PARAM_EASYCREDITLIMITMINIMUM'                      => 'Minimum order value for Easy Credit hire purchase',
    'D3DYN_HEIDELPAY_PARAM_EASYCREDITLIMITMAXIMUM'                      => 'Maximum order value for Easy Credit hire purchase',
    'D3DYN_HEIDELPAY_PARAM_INVOICESECUREDLIMITMINIMUM'                  => 'Minimum order value for Unzer Invoice (secured invoice purchase)',
    'D3DYN_HEIDELPAY_PARAM_INVOICESECUREDLIMITMAXIMUM'                  => 'Maximum order value for Unzer Invoice (secured invoice purchase)',
    'D3HEIDELPAY_SETTINGS_NOTIFY_LABEL'                                 => 'Push Notification Settings and Info',
    'D3HEIDELPAY_SETTINGS_NOTIFYURL_INFO'                               => 'In order to be able to use the push notifications, the url of the recipient file below must be communicated to Unzer Support.'
                                                                           . '<br>The url will then be entered in the dealer account by Unzer Support.'
                                                                           . '<br>Only then can the shop receive the push notifications!',
    'D3HEIDELPAY_SETTINGS_NOTIFYURL'                                    => 'Push Notification Url',
    'd3_heidelpay_controllers_admin_channels_base'                      => 'Channel configurations',
    'd3_heidelpay_controllers_admin_channels_main'                      => 'settings',
    'd3_heidelpay_controllers_admin_channels_payments'                  => 'payment methods',
    'D3HEIDELPAY_CONFIG_TITLE'                                          => 'Title',
    'D3HEIDELPAY_CONFIG_CHANNEL'                                        => 'Channel',
    'D3HEIDELPAY_CONFIG_LOGLEVEL'                                       => 'log settings',
    'D3HEIDELPAY_CONFIG_ISTESTCONFIG'                                   => 'Test mode',
    'D3HEIDELPAY_INACTIVE'                                              => 'inactive',
    'D3HEIDELPAY_CONFIG_ALREADY_ASSIGNED_TO_OTHER_CONFIG'               => 'This configuration is already assigned to another configuration.',
    'D3HEIDELPAY_CONFIG_STATUS'                                         => 'Status',
    'D3HEIDELPAY_CONFIG_SHOPPAYMENT'                                    => 'shop payment method',
    'D3HEIDELPAY_CONFIG_ISASSIGNED'                                     => 'Assigned?',
    'D3HEIDELPAY_CONFIG_UNASSIGNED'                                     => 'no assignment',
    'D3HEIDELPAY_CONFIG_CHANNELCONFIGURATION'                           => 'channel configuration',
    'D3HEIDELPAY_NEW_CONFIG_CHANNEL'                                    => 'create new channel configuration',
    'D3_HEIDELPAY_THIS_PAYMENT_RESTRICTIONINFO'                         => 'You would like to use a premium payment method.' //
                                                                           .'<br>The active checkmark of the channel configuration and the assignments of the shop payment types are not saved!'//
                                                                           .'<br>You can purchase the Premium Module in our <a href="https://www.oxidmodule.com/" title="oxidmodule.com" target="https://www.oxidmodule.com/">onlineshop</a>.',
    'D3HEIDELPAY_INTERFACE_TYPE'                                        => 'Select the interface.',
    'D3HEIDELPAY_INTERFACE_TYPE_NGW'                                    => 'NGW',
    'D3HEIDELPAY_INTERFACE_TYPE_MGW'                                    => 'MGW/rest',
    'D3HEIDELPAY_SETTINGS_MGW_PRIVATE'                                  => 'private key',
    'D3HEIDELPAY_SETTINGS_MGW_PUBLIC'                                   => 'public key',
    'D3HEIDELPAY_LOGIN_MGW_HEADER'                                      => 'access keys',
    'D3HEIDELPAY_MGW_TRANSACTIONTYPE_authorization'                     => 'reservation',
    'D3HEIDELPAY_MGW_TRANSACTIONTYPE_cancellation'                      => 'cancellation',
    'D3HEIDELPAY_MGW_TRANSACTIONTYPE_charge'                            => 'debit',
    'D3HEIDELPAY_MGW_TRANSACTIONTYPE_cancelAuthorize'                   => 'cancel reservation',
    'D3HEIDELPAY_MGW_TRANSACTIONTYPE_cancelCharge'                      => 'cancel debit',
    'D3HEIDELPAY_MGW_AMOUNT_TOTAL'                                      => 'total amount',
    'D3HEIDELPAY_MGW_AMOUNT_REMAINING'                                  => 'remaining total amount',
    'D3HEIDELPAY_MGW_AMOUNT_CHARGED'                                    => 'total amount booked',
    'D3HEIDELPAY_MGW_AMOUNT_CANCELED'                                   => 'total amount cancelled',
    'D3HEIDELPAY_MGW_PAYMENTSTATE_completed'                            => 'fully paid',
    'D3HEIDELPAY_MGW_PAYMENTSTATE_partly'                               => 'partially paid',
    'D3HEIDELPAY_MGW_PAYMENTSTATE_canceled'                             => 'payment cancelled',
    'D3HEIDELPAY_MGW_PAYMENTSTATE_pending'                              => 'waiting for payment',
    'D3HEIDELPAY_SETTINGS_MGW_DEBUGMODE'                                => 'debug mode active',
    'D3DYN_HEIDELPAY_PARAM_SHOWSEPAGURANTEEDCUSTOMERFORMULAR'           => 'SEPA secured direct debit - show customer data entry:',

    'D3HEIDELPAY_PAYMENT_COMPANY_DATE'                                   => 'Date',
    'D3HEIDELPAY_PAYMENT_COMPANY_RESULT'                                 => 'Result',
    'D3HEIDELPAY_PAYMENT_COMPANY_CARDS'                                  => 'Credit/Debit',
    'D3HEIDELPAY_PAYMENT_COMPANY_METHOD'                                 => 'Methode',
    'D3HEIDELPAY_PAYMENT_COMPANY_PAYMENTTYPE'                            => 'Payment type',
    'D3HEIDELPAY_PAYMENT_COMPANY_TXNID'                                  => 'Txn-ID',
    'D3HEIDELPAY_PAYMENT_COMPANY_UNIQUEID'                               => 'Unique ID',
    'D3HEIDELPAY_PAYMENT_COMPANY_SHORTID'                                => 'Short ID',

    'D3HEIDELPAY_TALIST_LOGNR'                                           => 'Log no',
    'D3HEIDELPAY_TALIST_TYPE'                                            => 'Type',
    'D3HEIDELPAY_TALIST_RESULT'                                          => 'Result',
    'D3HEIDELPAY_TALIST_ORDERNR'                                         => 'Order no.',
    'D3HEIDELPAY_TALIST_TIMESTAMP'                                       => 'Timestamp',
    'D3HEIDELPAY_TALIST_CREDITDEBIT'                                     => 'Credit/Debit',
    'D3HEIDELPAY_TALIST_METHODTYPE'                                      => 'Meth.Type',
    'D3HEIDELPAY_TALIST_TRANSACTIONID'                                   => 'Txn-ID',
    'D3HEIDELPAY_TALIST_SHORTID'                                         => 'Short ID',
    'D3HEIDELPAY_TALIST_SESSION'                                         => 'Session',

    'D3HEIDELPAY_CHANNELS_ASSIGNED'                                      => 'The shop payment type is assigned to this channel configuration.',
    'D3HEIDELPAY_CHANNELS_NOTASSIGNED'                                   => 'The shop payment type has no assignment and can be assigned.',
    'D3HEIDELPAY_CHANNELS_SAVE'                                          => 'Save assignment(s)',

    'D3HEIDELPAY_TRANSACTIONLIST_INFOTEXT_ONLY_NGW'                      => 'The transaction overview can only be used with the "NGW" interface.',
);
