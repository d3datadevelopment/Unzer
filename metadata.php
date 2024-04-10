<?php

/**
 * Metadata version
 */

use D3\Unzer\Application\Controller\Admin\Channels\AdminList as ChannelsAdminList;
use D3\Unzer\Application\Controller\Admin\Channels\Base as ChannelsBase;
use D3\Unzer\Application\Controller\Admin\Order\Unzer;
use D3\Unzer\Modules\Core\Counter;
use D3\Unzer\Modules\Core\Email;
use D3\Unzer\Modules\Core\InputValidator;
use D3\Unzer\Modules\Application\Controller\OrderController;
use D3\Unzer\Modules\Application\Controller\PaymentController;
use D3\Unzer\Modules\Application\Controller\ThankYouController;
use D3\Unzer\Modules\Application\Model\Order;
use D3\Unzer\Modules\Application\Model\PaymentGateway;
use D3\Unzer\Modules\Application\Model\BasketItem;
use D3\Unzer\Application\Controller\Admin\Support;
use D3\Unzer\Application\Controller\Admin\Log;
use D3\Unzer\Application\Controller\Admin\LogList;
use D3\Unzer\Application\Controller\Admin\Channels\Main;
use D3\Unzer\Application\Controller\Admin\Channels\Payments;
use D3\Unzer\Application\Controller\Admin\AdminList;
use D3\Unzer\Application\Controller\Admin\Base;
use D3\Unzer\Application\Controller\Admin\Settings;
use D3\Unzer\Application\Model\Constants;
use D3\Unzer\Setup\Events;
use D3\ModCfg\Application\Model\d3counter;
use OxidEsales\Eshop\Application\Controller as OxidController;
use OxidEsales\Eshop\Application\Model as OxidModel;
use OxidEsales\Eshop\Core as OxidCore;

$sMetadataVersion = '2.1';
$sLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> ';

$aModule = [
    'id'             => 'd3unzer',
    'title'          => $sLogo.' Unzer',
    'description'    => [
        'de' => 'Unzer GmbH bietet als Zahlungsinstitut H&auml;ndlern ein Zahlungssystem f&uuml;r '
            . 'alle g&auml;ngigen Zahlungsverfahren f&uuml;r die Payment Abwicklung im Internet.',
        'en' => '',
    ],
    'thumbnail'      => 'picture.svg',
    'version'        => '7.0.0.2',
    'author'         => 'D&sup3; Data Development, Inh. Thomas Dartsch',
    'email'          => 'support@shopmodule.com',
    'url'            => 'https://docs.oxidmodule.com/Unzer/',
    'events'         => [
        'onActivate' => Events::class . '::onActivate',
        'onDeactivate' => Events::class . '::onDeactivate',
    ],
    'extend'         => [
        d3counter::class                         => Counter::class,
        OxidCore\Email::class                    => Email::class,
        OxidCore\InputValidator::class           => InputValidator::class,
        OxidController\OrderController::class    => OrderController::class,
        OxidController\PaymentController::class  => PaymentController::class,
        OxidController\ThankYouController::class => ThankYouController::class,
        OxidModel\Order::class                   => Order::class,
        OxidModel\PaymentGateway::class          => PaymentGateway::class,
        OxidModel\BasketItem::class              => BasketItem::class,
    ],
    'controllers'    => [
        'd3_unzer_controllers_admin_adminlist'          => AdminList::class,
        'd3_unzer_controllers_admin_base'               => Base::class,
        'd3_unzer_controllers_admin_settings'           => Settings::class,
        'd3_unzer_controllers_admin_support'            => Support::class,
        'd3_unzer_controllers_admin_log'                => Log::class,
        'd3_unzer_controllers_admin_loglist'            => LogList::class,
        'd3_unzer_controllers_admin_order_unzer'        => Unzer::class,
        'd3_unzer_controllers_admin_channels_base'      => ChannelsBase::class,
        'd3_unzer_controllers_admin_channels_list'      => ChannelsAdminList::class,
        'd3_unzer_controllers_admin_channels_main'      => Main::class,
        'd3_unzer_controllers_admin_channels_payments'  => Payments::class,
    ],
    'templates'      => [
        #admin
        '@' . Constants::OXID_MODULE_ID . '/admin/settings.tpl' => 'views/smarty/admin/settings.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/settings/ngw.tpl' => 'views/smarty/admin/settings/ngw.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/settings/mgw.tpl' => 'views/smarty/admin/settings/mgw.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/order.tpl'    => 'views/smarty/admin/order.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/order/mgw.tpl'    => 'views/smarty/admin/order/mgw.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/main.tpl'    => 'views/smarty/admin/channels/main.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/new.tpl'    => 'views/smarty/admin/channels/new.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/list.tpl'    => 'views/smarty/admin/channels/list.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/payments.tpl'    => 'views/smarty/admin/channels/payments.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/paypal.tpl'    => 'views/smarty/admin/channels/sub/paypal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/btobbillpurchase.tpl'    => 'views/smarty/admin/channels/sub/btobbillpurchase.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/flexipaydirect.tpl'    => 'views/smarty/admin/channels/sub/flexipaydirect.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/creditcard.tpl'    => 'views/smarty/admin/channels/sub/creditcard.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/easycredit.tpl'    => 'views/smarty/admin/channels/sub/easycredit.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/debitcard.tpl'    => 'views/smarty/admin/channels/sub/debitcard.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/cards.tpl'    => 'views/smarty/admin/channels/sub/cards.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/postfinance.tpl'    => 'views/smarty/admin/channels/sub/postfinance.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/giropay.tpl'    => 'views/smarty/admin/channels/sub/giropay.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/masterpass.tpl'    => 'views/smarty/admin/channels/sub/masterpass.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/eps.tpl'    => 'views/smarty/admin/channels/sub/eps.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/ideal.tpl'    => 'views/smarty/admin/channels/sub/ideal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/sofort.tpl'    => 'views/smarty/admin/channels/sub/sofort.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/przelewy24.tpl'    => 'views/smarty/admin/channels/sub/przelewy24.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/directdebit/secured.tpl'    => 'views/smarty/admin/channels/sub/directdebit/secured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/directdebit/unsecured.tpl'    => 'views/smarty/admin/channels/sub/directdebit/unsecured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/invoice/secured.tpl'    => 'views/smarty/admin/channels/sub/invoice/secured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/invoice/unsecured.tpl'    => 'views/smarty/admin/channels/sub/invoice/unsecured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/admin/channels/sub/prepayment.tpl'    => 'views/smarty/admin/channels/sub/prepayment.tpl',
        // allgemeine Templates
        '@' . Constants::OXID_MODULE_ID . '/generic/payment_img.tpl'        => 'views/smarty/generic/payment_img.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/redirect_postformular.tpl'        => 'views/smarty/generic/redirect_postformular.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/cards.tpl'        => 'views/smarty/generic/mgw/cards.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/sofort.tpl'        => 'views/smarty/generic/mgw/sofort.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/paypal.tpl'        => 'views/smarty/generic/mgw/paypal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/flexipaydirect.tpl'        => 'views/smarty/generic/mgw/flexipaydirect.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/ideal.tpl'        => 'views/smarty/generic/mgw/ideal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/directdebit.tpl'        => 'views/smarty/generic/mgw/directdebit.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/prepayment.tpl'        => 'views/smarty/generic/mgw/prepayment.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/directdebit_secured.tpl'        => 'views/smarty/generic/mgw/directdebit_secured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/invoice_secured.tpl'        => 'views/smarty/generic/mgw/invoice_secured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/invoice_unsecured.tpl'        => 'views/smarty/generic/mgw/invoice_unsecured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/invoice_b2b.tpl'        => 'views/smarty/generic/mgw/invoice_b2b.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/eps.tpl'        => 'views/smarty/generic/mgw/eps.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/przelewy24.tpl'        => 'views/smarty/generic/mgw/przelewy24.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/mgw/giropay.tpl'        => 'views/smarty/generic/mgw/giropay.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_cust.tpl'        => 'views/smarty/generic/email/html/prepayment_cust.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_cust_subj.tpl'        => 'views/smarty/generic/email/html/prepayment_cust_subj.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_owner.tpl'        => 'views/smarty/generic/email/html/prepayment_owner.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/prepayment_owner_subj.tpl'        => 'views/smarty/generic/email/html/prepayment_owner_subj.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/partlypaid_owner.tpl'        => 'views/smarty/generic/email/html/partlypaid_owner.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/partlypaid_owner_subj.tpl'        => 'views/smarty/generic/email/html/partlypaid_owner_subj.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/chargeback_owner.tpl'        => 'views/smarty/generic/email/html/chargeback_owner.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/html/chargeback_owner_subj.tpl'        => 'views/smarty/generic/email/html/chargeback_owner_subj.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/plain/prepayment_cust.tpl'        => 'views/smarty/generic/email/plain/prepayment_cust.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/plain/prepayment_owner.tpl'        => 'views/smarty/generic/email/plain/prepayment_owner.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/plain/chargeback_owner.tpl'        => 'views/smarty/generic/email/plain/chargeback_owner.tpl',
        '@' . Constants::OXID_MODULE_ID . '/generic/email/plain/partlypaid_owner.tpl'        => 'views/smarty/generic/email/plain/partlypaid_owner.tpl',
        ##wave-theme
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/directdebit.tpl'        => 'views/smarty/wave/payment/directdebit.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/cards.tpl'        => 'views/smarty/wave/payment/cards.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/masterpass.tpl'        => 'views/smarty/wave/payment/masterpass.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/giropay.tpl'        => 'views/smarty/wave/payment/giropay.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/ideal.tpl'        => 'views/smarty/wave/payment/ideal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/paypal.tpl'        => 'views/smarty/wave/payment/paypal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/prepayment.tpl'        => 'views/smarty/wave/payment/prepayment.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/przelewy24.tpl'        => 'views/smarty/wave/payment/przelewy24.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/sofort.tpl'        => 'views/smarty/wave/payment/sofort.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/eps.tpl'        => 'views/smarty/wave/payment/eps.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/postfinance.tpl'        => 'views/smarty/wave/payment/postfinance.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/invoice.tpl'        => 'views/smarty/wave/payment/invoice.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/easycredit.tpl'        => 'views/smarty/wave/payment/easycredit.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/btobbillpurchase.tpl'        => 'views/smarty/wave/payment/btobbillpurchase.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/cards.tpl'        => 'views/smarty/wave/payment/mgw/cards.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/sofort.tpl'        => 'views/smarty/wave/payment/mgw/sofort.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/paypal.tpl'        => 'views/smarty/wave/payment/mgw/paypal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/flexipaydirect.tpl'        => 'views/smarty/wave/payment/mgw/flexipaydirect.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/ideal.tpl'        => 'views/smarty/wave/payment/mgw/ideal.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/directdebit.tpl'        => 'views/smarty/wave/payment/mgw/directdebit.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/prepayment.tpl'        => 'views/smarty/wave/payment/mgw/prepayment.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/directdebit_secured.tpl'        => 'views/smarty/wave/payment/mgw/directdebit_secured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/invoice_secured.tpl'        => 'views/smarty/wave/payment/mgw/invoice_secured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/invoice_unsecured.tpl'        => 'views/smarty/wave/payment/mgw/invoice_unsecured.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/invoice_b2b.tpl'        => 'views/smarty/wave/payment/mgw/invoice_b2b.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/eps.tpl'        => 'views/smarty/wave/payment/mgw/eps.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/przelewy24.tpl'        => 'views/smarty/wave/payment/mgw/przelewy24.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/payment/mgw/giropay.tpl'        => 'views/smarty/wave/payment/mgw/giropay.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/cc_input.tpl'        => 'views/smarty/wave/cc_input.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/messages.tpl'        => 'views/smarty/wave/messages.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/order_iframe.tpl'        => 'views/smarty/wave/order_iframe.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/storeduid.tpl'        => 'views/smarty/wave/storeduid.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/banktransferdata.tpl'        => 'views/smarty/wave/banktransferdata.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/mgw/banktransferdata.tpl'        => 'views/smarty/wave/mgw/banktransferdata.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/mgw/missingfields.tpl'        => 'views/smarty/wave/mgw/missingfields.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/shippingandpayment.tpl'        => 'views/smarty/wave/shippingandpayment.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/thankyou/easycreditcriterions.tpl'        => 'views/smarty/wave/thankyou/easycreditcriterions.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/order/easycreditcriterions.tpl'        => 'views/smarty/wave/order/easycreditcriterions.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/forms/select.tpl'        => 'views/smarty/wave/forms/select.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/forms/text.tpl'        => 'views/smarty/wave/forms/text.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/forms/radio.tpl'        => 'views/smarty/wave/forms/radio.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/forms/title.tpl'        => 'views/smarty/wave/forms/title.tpl',
        '@' . Constants::OXID_MODULE_ID . '/wave/forms/birthdate.tpl'        => 'views/smarty/wave/forms/birthdate.tpl',

    ],
    'blocks'         => [
        ### Admin theme
        [
            'template' => 'headitem.tpl',
            'block'    => 'admin_headitem_inccss',
            'file'      => 'views/smarty/blocks/admin/admin_headitem_inccss.tpl',
        ],

        #### Wave theme
        [
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'change_payment',
            'file'     => 'views/smarty/blocks/page/checkout/change_payment.tpl',
        ],
        [
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'select_payment',
            'file'     => 'views/smarty/blocks/page/checkout/select_payment.tpl',
        ],

        [
            'template' => 'layout/base.tpl',
            'block'    => 'base_style',
            'file'     => 'views/smarty/blocks/layout/base_style.tpl',
        ],

        [
            'template' => 'email/html/order_cust.tpl',
            'block'    => 'email_html_order_cust_paymentinfo',
            'file'     => 'views/smarty/blocks/email/html/email_html_order_cust_paymentinfo.tpl',
        ],
        [
            'template' => 'email/plain/order_cust.tpl',
            'block'    => 'email_plain_order_cust_paymentinfo',
            'file'     => 'views/smarty/blocks/email/plain/email_plain_order_cust_paymentinfo.tpl',
        ],
        [
            'template' => 'page/checkout/thankyou.tpl',
            'block'    => 'checkout_thankyou_info',
            'file'     => 'views/smarty/blocks/page/checkout/checkout_thankyou_info.tpl',
        ],
        [
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'checkout_payment_errors',
            'file'     => 'views/smarty/blocks/page/checkout/checkout_payment_errors.tpl',
        ],
        [
            'template' => 'page/checkout/order.tpl',
            'block'    => 'shippingAndPayment',
            'file'     => 'views/smarty/blocks/page/checkout/shippingandpayment.tpl',
        ],
        [
            'template' => 'page/checkout/inc/basketcontents.tpl',
            'block'    => 'checkout_basketcontents_grandtotal',
            'file'     => 'views/smarty/blocks/page/checkout/inc/checkout_basketcontents_grandtotal.tpl',
        ],
    ],
];
