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

return [
    'charset'                                                           => 'UTF-8',
    'd3mxheidelpay'                                                     => "<i class='fab fa-fw fa-d3unzer d3fa-color-unzer'></i> Unzer",
    'd3mxheidelpay_settings'                                            => 'Einstellungen',
    'd3tbclheidelpay_settings'                                          => 'Stamm',
    'd3tbclheidelpay_support'                                           => 'Support',
    'd3mxheidelpaylog'                                                  => 'Logging',
    'd3mxheidelpaytransactionlog'                                       => 'Transaktionsübersicht',
    'D3_UNZER_UNSUPPORTED_INTERFACE'                                    => 'Die ausgewählte %s-Schnittstelle wird nicht mehr unterstützt. Die Einstellung wird geändert, bitte prüfen Sie die Konfiguration.',
    'D3DYN_HEIDELPAY_ACTIVE'                                            => 'Unzer-Modul aktiv',
    'D3DYN_HEIDELPAY_TESTMOD_ACTIVE'                                    => 'Testmodus aktiv',
    'D3DYN_HEIDELPAY_PARAM_SECURITYSENDER'                              => 'Sender-ID',
    'D3DYN_HEIDELPAY_PARAM_USERID'                                      => 'Login',
    'D3DYN_HEIDELPAY_PARAM_PASSWORD'                                    => 'Passwort',
    'D3DYN_HEIDELPAY_PARAM_CARDS_USE_RG'                                => 'Registrierung für kartenbasierte Zahlungsmethoden nutzen (Kreditkarte / Debitkarte)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE'                                 => 'Buchungstyp kartenbasierte Zahlungsmethoden (Kreditkarte / Debitkarte)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_DIRECT'                          => 'Betrag sofort abbuchen',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_RESERVE'                         => 'Betrag nur reservieren',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_FOREIGNRESERVE'                  => 'Inland buchen, Ausland reservieren',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_PAYPAL'                          => 'Buchungstyp (PayPal)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_DIRECTDEBIT'                     => 'Buchungstyp (Unzer Direct Debit - Lastschrift mit Zahlungsgarantie)',
    'D3DYN_HEIDELPAY_PARAM_BOOKINGTYPE_MASTERPASS'                      => 'Buchungstyp (MasterPass)',
    'D3DYN_HEIDELPAY_PARAM_STOREDDATA'                                  => 'Gespeicherte Daten dem Kunden anbieten?',
    'D3DYN_HEIDELPAY_PARAM_CURLTIMEOUT'                                 => 'max. cUrl-Verbindungszeit zum Server',
    'D3DYN_HEIDELPAY_PARAM_CURLTIMEOUTSEK'                              => 'Sekunden',
    'D3DYN_HEIDELPAY_PARAM_LOGPAYMENT'                                  => 'Log Payment Aktionen',
    'D3DYN_HEIDELPAY_PARAM_SHOWERRORTEXTS'                              => 'Fehlermeldungen im Shop anzeigen',
    'D3DYN_HEIDELPAY_PARAM_TESTSERVERTYPE'                              => 'Test-Servertyp',
    'D3DYN_HEIDELPAY_PARAM_TESTMOD_ERRORCODE'                           => 'Test-Modus Error-Code',
    'D3DYN_HEIDELPAY_PARAM_TESTMOD_RETURNCODE'                          => 'Test-Modus Return-Code',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG'                                 => 'D3 Logging',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG_INACTIVE'                        => 'nicht aktiv',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG_ONLYERRORS'                      => 'nur Fehler',
    'D3DYN_HEIDELPAY_PARAM_INTERNALLOG_ALL'                             => 'alles',
    'D3DYN_HEIDELPAY_NOCURL'                                            => '<b>ACHTUNG, Modul ist nicht einsatzfähig, da PHP-CURL fehlt!</b>',
    'D3DYN_HEIDELPAY_PARAM_DEBITUNMASK'                                 => 'Kontodaten vollständig speichern',
    'D3DYN_HEIDELPAY_PARAM_DEBITUNMASK_NO'                              => 'maskieren (wie Kreditkarte ***)',
    'D3DYN_HEIDELPAY_PARAM_DEBITUNMASK_YES'                             => 'nicht maskieren',
    'D3DYN_HEIDELPAY_ACTIVEPAYMENTS'                                    => '<b>Unzer zugeordnete Zahlungsarten</b>',
    'D3DYN_HEIDELPAY_NOACTIVEPAYMENTS'                                  => 'Unzer sind aktuell keine Zahlarten zugeordnet!',
    'D3DYN_HEIDELPAY_CURRENTPAYMENTS'                                   => '<i>Diese Zahlarten werden aktuell über das Unzer-Modul abgewickelt.</i>',
    'D3DYN_HEIDELPAY_PAYTYPE'                                           => 'Unzer-Zahltyp:',
    'D3_UNZER_RESTRICTIONINFO'                                      => 'Sie verwenden Unzer \'Basic\', daher sind einige Funktionen nicht aktiv. Wenn Sie alle Möglichkeiten des Moduls zu nutzen möchten, erwerben Sie bitte Unzer \'Premium\'.',
    'd3_unzer_controllers_admin_order_unzer'                            => 'Unzer',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SUBMIT'             => 'absenden',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IS_NOT_HEIDELPAY'   => 'Keine Unzer Transaktionen vorhanden.',
    'D3_UNZER_PAYMENT_CC'                                           => 'Kreditkarte',
    'D3_UNZER_PAYMENT_DD'                                           => 'Lastschrift',
    'D3_UNZER_PAYMENT_DC'                                           => 'Debitkarte',
    'D3_UNZER_PAYMENT_VA'                                           => 'Virtual Account',
    'D3_UNZER_PAYMENT_OT'                                           => 'Online Transfer',
    'D3_UNZER_PAYMENT_IV'                                           => 'Rechnung',
    'D3_UNZER_PAYMENT_PP'                                           => 'Vorkasse',
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
        'Demo-Modus aktiv! Sie können das Modul nur im Testmodus verwenden.<br>'
        . 'Die Lizenz können Sie unter /Modul-Connector/Modulverwaltung/Unzer/ einsehen und ändern.',
    'D3_UNZER_UPDATE_OXCONTENTITEMS'                                =>
        'Es sind CMS-Seiten vorhanden, welche ggf. aktualisiert werden müssen. '
        . PHP_EOL
        . 'Der Inhalt kann leider nicht automatisch aktualisiert werden. '
        . PHP_EOL
        . 'Bitte überprüfen Sie diese unter:'
        . PHP_EOL
        . PHP_EOL
        . 'Shopadmin->Kundeninformationen->CMS-Seiten->Idents: '
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
        . 'Im Installationsverzeichnis unter setup+doku/CMS finden Sie '
        . 'zum Vergleich je eine TXT-Datei, benannt nach dem Ident der entsprechenden CMS-Seite.',
    'D3_UNZER_UPDATE_CHANNELCONFIGURATIONS'                  => 'Die Konfiguration der Channeldaten hat sich verändert.'
        .PHP_EOL.'Die bestehende Konfiguration wird in einen neuen Admin Bereich migriert.'
        .PHP_EOL.'Der neue Admin Bereich ist unter /D³ Module/Unzer/Channel-Konfigurationen/ zu finden.'
        .PHP_EOL.'Auf unserer Hilfe Seite bekommen Sie eine Übersicht, welche Einstellungen sich geändert haben: https://docs.oxidmodule.com/Unzer/6.1.0.0/changelog/Channel_Rekonfiguration.html'
        .'<br>',
    'D3_UNZER_models_update_legacy_assigments_updatemessage' =>
        'In diesem Schritt werden die Zuordnungen von den Shop-Zahlungsarten zu Unzer über ein Script aktualisiert.'
        . PHP_EOL
        . 'Um fortzufahren klicken Sie auf "Installationsschritt ausführen...".'
        . PHP_EOL
        . PHP_EOL
        . 'Hinweis: Dieser Schritt ist nur in den automatischen Installationen möglich.',
    Creditcard::class                                        => 'Kreditkarte',
    Debitcard::class                                         => 'Debitkarte',
    Cards::class                                             => 'kartenbasierte Zahlungsmethoden (Kreditkarten / Debitkarten)',
    Directdebit::class                                       => 'SEPA Lastschrift (ohne Zahlungsgarantie)',
    Secured::class                                           => 'Unzer Direct Debit (Lastschrift mit Zahlungsgarantie - DE/AT)',
    Prepayment::class                                        => 'Unzer Prepayment (autom. Vorkasse)',
    Postfinance::class                                       => 'PostFinance E-Finance',
    Sofortueberweisung::class                                => 'Sofort',
    Ideal::class                                             => 'iDeal',
    Giropay::class                                           => 'Giropay',
    Eps::class                                               => 'eps Überweisung',
    \D3\Unzer\Application\Model\payment\invoice\Secured::class => 'Unzer Invoice (abgesicherter Rechnungskauf B2C - DE/AT)',
    Unsecured::class                                           => 'ungesicherter Rechnungskauf (B2B / B2C)',
    Paypal::class                                              => 'PayPal',
    Przelewy24::class                                          => 'Przelewy24',
    Masterpass::class                                          => 'MasterPass',
    Easycredit::class                                          => 'Easy Credit Ratenkauf',
    Btobbillpurchase::class                                    => 'Unzer Invoice (abgesicherter Rechnungskauf B2B - DE/AT)',
    FlexiPayDirect::class                                      => 'Unzer Bank Transfer',
    'D3_UNZER_CHANNEL_CREDITCARD'                              => 'Kreditkarte',
    'D3_UNZER_CHANNEL_DEBITCARD'                               => 'Debitkarte',
    'D3_UNZER_CHANNEL_CARDS'                                   => 'kartenbasierte Zahlungsmethoden (Kreditkarten / Debitkarten)',
    'D3_UNZER_CHANNEL_DIRECTDEBITSECURED'                      => 'Unzer Direct Debit (Lastschrift mit Zahlungsgarantie - DE/AT)',
    'D3_UNZER_CHANNEL_DIRECTDEBITUNSECURED'                    => 'SEPA Lastschrift (ohne Zahlungsgarantie)',
    'D3_UNZER_CHANNEL_EASYCREDIT'                              => 'Easy Credit Ratenkauf',
    'D3_UNZER_CHANNEL_EPS'                                     => 'eps Überweisung',
    'D3_UNZER_CHANNEL_SOFORT'                                              => 'Sofort',
    'D3_UNZER_CHANNEL_GIROPAY'                                             => 'Giropay',
    'D3_UNZER_CHANNEL_PREPAYMENT'                                          => 'Unzer Prepayment (autom. Vorkasse)',
    'D3_UNZER_CHANNEL_IDEAL'                                               => 'iDeal',
    'D3_UNZER_CHANNEL_INVOICESECURED'                                      => 'Unzer Invoice (abgesicherter Rechnungskauf B2C - DE/AT)',
    'D3_UNZER_CHANNEL_INVOICEUNSECURED'                                    => 'ungesicherter Rechnungskauf (B2B / B2C)',
    'D3_UNZER_CHANNEL_MASTERPASS'                                          => 'MasterPass',
    'D3_UNZER_CHANNEL_PAYPAL'                                              => 'PayPal',
    'D3_UNZER_CHANNEL_PRZELEWY24'                                          => 'Przelewy24',
    'D3_UNZER_CHANNEL_POSTFINANCE'                                         => 'PostFinance E-Finance',
    'D3_UNZER_CHANNEL_B2BBILLPURCHASE'                                     => 'Unzer Invoice (abgesicherter Rechnungskauf B2B - DE/AT)',
    'D3_UNZER_CHANNEL_FLEXIPAYDIRECT'                                      => 'Unzer Bank Transfer',
    'D3_UNZER_CHANNEL_NOTSELECTABLE'                                       => 'nicht auswählbarer Zahltyp',
    'D3_UNZER_RESTRICTIONINFO_ORDER'                                => 'Sie verwenden Unzer \'Basic\', daher werden Ihnen die Zahloptionen (\'Refund\' etc.) zwar gezeigt, führen jedoch keine Transaktion aus.<br>Wenn Sie alle Möglichkeiten des Moduls nutzen möchten, erwerben Sie bitte Unzer \'Premium\'.',
    'D3_UNZER_UPDATE_CHANGE_HAENDLERKONTO'                          => 'Wichtige Hinweise zu Ihrem Unzer-Händlervertrag (betrifft Updates von kleiner 4.0.5.0 auf aktuelle Modulversion)'
        . PHP_EOL . PHP_EOL
        . 'Nur relevant bei Zahltyp "Sofort". '
        . PHP_EOL
        . 'Das Modul nutzt für Sofort eine spezielle Option der Unzer-Konfiguration. Der Endkunde gibt seine Bankdaten erst auf der Webseite von Sofort ein. Diese Option wird in Ihrem Händlerkonto eingerichtet.'
        . PHP_EOL
        . 'Nur mit dieser Einstellung ist eine Nutzung des Zahltyps "Sofort" möglich!'
        . PHP_EOL . PHP_EOL
        . 'Kontaktieren Sie vor dem Livegang des Moduls Ihren Unzer-Händlerbetreuer, so dass diese Option für Ihr Händlerkonto aktiviert werden kann.'
        . PHP_EOL . PHP_EOL
        . 'Wichtig: Sofern Sie ein Update des Moduls vornehmen, ist die oben genannte Option eventuell inaktiv. Bitte lassen Sie von Ihrem Unzer-Händlerbetreuer die genannte Option prüfen, bevor Sie das Modul-Update einspielen.
    ',
    'D3DYN_HEIDELPAY_ORDER_EXECUTE_POST_FIELDS'                         => 'Pflichtfelder für den Bestellabschluss',
    'D3DYN_HEIDELPAY_ADDITIONAL_URL_PARAMETER'                          => 'zusätzliche URL Parameter für Tracking',
    'D3UNZER_sD3HpHFOrderPendingTime'                               => 'Lebenszeit einer PENDING-Bestellung (in Stunden)',
    'D3UNZER_sD3HpHFOrderCancelType'                                => 'Aktion nach Lebenszeit',
    'D3UNZER_sD3HpHFOrderCancelType_PLEASE_CHOOSE'                  => 'NOT_FINISHED (oxorder__oxtransstatus)',
    'D3UNZER_sD3HpHFOrderCancelType_CANCEL_ORDER'                   => 'Bestellung stornieren',
    'D3UNZER_sD3HpHFOrderCancelType_DELETE_ORDER'                   => 'Bestellung löschen',
    'D3UNZER_sD3HpHFOrderLimit'                                     => 'Setzen Sie ein Limit an Bestellungen für den Cronjob.',
    'D3UNZER_blD3HpHFSetZeroOrderNumber'                            => 'generiere PENDING-Bestellungen mit Bestellnummer 0',
    'D3UNZER_SETTINGS_FOR_IDEAL_AND_P24_CRONJOB'                    => 'Cronjob Einstellungen (iDeal und Przelewy24)',
    'D3DYN_HEIDELPAY_LOGIN_LIVE_HEADER'                                 => 'Logindaten Liveumgebung',
    'D3DYN_HEIDELPAY_LOGIN_TEST_HEADER'                                 => 'Logindaten Testumgebung',
    'D3DYN_HEIDELPAY_EXTENDED_SETTINGS'                                 => 'Erweiterte Einstellungen zu den Unzer-Zahlarten',
    'D3DYN_HEIDELPAY_LOG_AND_SECURITY'                                  => 'Einstellungen zu Modul-Logging, Störungsfälle und Sprache',
    'D3UNZER_DIFFERENCE_IN_ORDER_SUBJECT'                           => 'Differenz zwischen Bestellung und Transaktion festgestellt! Bestellnr: ',
    'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORMESSAGE'                     => 'Es wurde eine Differenz festgestellt, zwischen dem bestellten Warenkorbwert und dem gebuchten Transaktionswert (Zahlung bei Unzer).' //
        . '<br>Bitte überprüfen Sie die Bestellung "%1$s" und die Transaktion bei Unzer mit der UniqueID  "%2$s".' //
        . '<br>In der Transaktion wurden "%3$s" gebucht und an der Bestellung sind "%4$s" hinterlegt.' //
        . '<br><br>Es kann sich zum Beispiel um in technischen Fehler oder einen un/wissentlichen Betrugsversuch handeln.',
    'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORMAIL'                        => 'E-Mailadresse für erkannte Störungsfälle',
    'D3UNZER_DIFFERENCE_IN_ORDER_ERRRORSTATUS'                      => 'Bestellstatus für erkannte Störungsfälle',
    'D3UNZER_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_SUBJECT'        => '"%1$s": eine erfolgreiche Transaktion ohne Bestellung ist eingegangen. ShortID: ',
    'D3UNZER_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_TEXT'           => 'Eine erfolgreiche Transaktion ist von Unzer eingegangen. Es wurde versucht die Bestellung anzulegen, dies wurde shopseitig abgelehnt.<br>'//
        . 'Vermutlich muss die Transaktion dem Kunden wieder gut geschrieben werden!(Refund) <br>Bei Fragen konsultieren Sie Ihren Shopbetreuer und leiten Sie Ihm diese Nachricht weiter.<br><br>Shopdetails: <br>',
    'D3UNZER_ERRRORMESSAGE_NORORDER_BUT_TRANSACTION_DETAILS'        => '<br>Transaktionsdetails: ',
    'D3UNZER_CARDTYPE_TIMEOUT'                                      => 'Zeitbeschränkung für die Karteneingabe (iFrame)',
    'D3UNZERNOTESHOWNFORSTOREDDATA'                                 => 'Es wurden gespeicherte Zahlungsdaten gefunden.' //
        . '<br>Diese können Debit\'s (DB) und Registrierungen (RG) enthalten.' //
        . '<br>Zukünftig wird eine Registrierung (RG) für Folgezahlungen benötigt.' //
        . '<br>Die automatische Installation entfernt im nächsten Schritt alle gespeicherten Zahlungsdaten die keine Registrierungen (RG) und vom Typ Kredit- oder Debitkarte sind.' //
        . '<br><br>Zusätzlich wird der aktive Haken bei "Registrierung für Karten nutzen (Kreditkarte, Debitkarte)" vorausgesetzt (ggf. wird diese Option in einem späteren Installationsschritt automatisch gesetzt).' //
        . '<br>Die Registrierung (RG) ist eine zusätzliche Transaktion und ist kostenpflichtig.' //
        . '<br><br>Wenn Sie diese Option nicht nutzen möchten, deaktivieren Sie bitte den Haken "Gespeicherte Daten dem Kunden anbieten?" und "Registrierung für Karten nutzen (Kreditkarte, Debitkarte)".' //
        . '<br>Diese finden Sie unter /D&sup3; Module/Unzer/Einstellungen/.' //
        . '<br><br>Bankdaten werden seit der Modul-Version 5.2.0.0 direkt im Shop gespeichert und sind nicht betroffen.' //
        . '<br><br>Mit Klick auf "Installationsschritt ausführen..." nehmen Sie die Löschung der nicht mehr nutzbaren Daten zur Kenntnis. ',
    'D3UNZERNOTESTOREDDATAWITHOUTRG'                                => 'Sie nutzen die Option "Gespeicherte Daten dem Kunden anbieten?".' //
        . '<br>Für den zukünftigen Gebrauch der Option, wird die aktive Einstellung "Registrierung für Karten nutzen (Kreditkarte, Debitkarte)" benötigt.' //
        . '<br>Diese wird mit diesem Installationsschritt aktiviert und kann bei Bedarf unter /Unzer/Einstellungen/ deaktiviert werden.' //
        . '<br><br>Info zu der Einstellung "Registrierung für Karten nutzen (Kreditkarte, Debitkarte)":',
    'D3UNZERNOTESTOREDDATAWITHOUTRG_SAVING'                         => 'Sie nutzen die Option "Gespeicherte Daten dem Kunden anbieten?".' //
        . '<br>Für den zukünftigen Gebrauch der Option, wird die aktive Einstellung "Registrierung für Karten nutzen (Kreditkarte, Debitkarte)" benötigt.'
        . '<br>Die Einstellung hat das Modul automatisch gesetzt und kann bei Bedarf deaktiviert werden.',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CRITERIONTAGS'      => 'Zusätzliche Parameter für die Transaktion',
    'criterion_paypal_payer_id'                                         => 'Paypal Payer ID',
    'criterion_paypal_reg_token'                                        => 'Paypal Referenz Token',
    'criterion_ideal_entrancecode'                                      => 'iDeal entrance code',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_HOLDER'             => 'Empfänger',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BANKNAME'         => 'Bank',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_IBAN'             => 'IBAN',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BIC'              => 'BIC',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_AMOUNT'           => 'Betrag',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_REASON'           => 'Verwendungszweck',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_UNIQUEID'         => 'UniqueID',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_CODE'             => 'Code',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_MESSAGE'          => 'Händlernachricht',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_ACTIONS'          => 'nachfolgende Aktionen',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_SHORTID'          => 'Short ID',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONTIME'  => 'Transaktionszeitpunkt',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_TRANSACTIONID'    => 'Transaktionsident',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_DESCRIPTOR'       => 'Descriptor',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_PAYMENTREFERENCE' => 'Verwendungszweck',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_HEIDELPAY_BANKTRANSFERDATA' => 'Hier können Sie die Transferinformationen für den Endkunden einsehen.',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_SELECTREASON'    => '-- Bitte Grund auswählen --',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_CANCEL'          => 'Kunde storniert die Bestellung',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_RETURN'          => 'Kunde gibt die Waren zurück',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_REASONCODE_CREDIT'          => 'Der Händler gibt dem Kunden Kredit',
    'D3_UNZER_CONTROLLERS_ADMIN_ORDER_UNIQUE_INVOICEID'           => 'eindeutige Rechnungsnummer',
    'D3_UNZER_CONTROLLERS_ADMIN_ERR_EMPTY_INVOICEID'              => 'Rechnungsnummer darf nicht leer sein.',
    'D3DYN_HEIDELPAY_PARAM_CSSPATH'                                   => 'CSS-Datei für iFrame vom Modul erkannt?',
    'D3DYN_HEIDELPAY_PARAM_CSSPATH_LINK'                              => 'Zur CSS-Datei',
    'D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES'                    => 'mehrsprachige Konfigurationen erlauben',
    'D3DYN_HEIDELPAY_PARAM_ALLOWMULTIPLELANGUAGES_REACTIVATE'           => 'Option &quot;mehrsprachige Konfigurationen erlauben&quot; aktivieren',
    'D3DYN_HEIDELPAY_PARAM_REMOVEMULTIPLELANGUAGES'                     => 'mehrsprachige Konfigurationen entfernen',
    'D3DYN_HEIDELPAY_HASMULTILANGCONFIGBUTNOSETTING'                    => 'Es wurde eine Konfiguration in einer anderen Sprache gefunden!<br>Soll/en die Konfiguration/en entfernt werden?',
    'D3UNZER_MULTIPLE_LANGUAGECONFIGURATIONS_FOUND'                 => 'Unzer: Es wurde eine Konfiguration in einer anderen Sprache gefunden!<br>Bitte gehen im Admin Sie unter /Unzer/Einstellungen/Stamm/ und folgen Sie der Anweisung.<br>Dieser Schritt wird Ihnen erst angezeigt, wenn die Unzer-Modul Installation fertig ist.',
    'D3DYN_HEIDELPAY_PARAM_EASYCREDITLIMITMINIMUM'                      => 'Mindestbestellwert für Easy Credit Ratenkauf',
    'D3DYN_HEIDELPAY_PARAM_EASYCREDITLIMITMAXIMUM'                      => 'Höchstbestellwert für Easy Credit Ratenkauf',
    'D3DYN_HEIDELPAY_PARAM_INVOICESECUREDLIMITMINIMUM'                  => 'Mindestbestellwert für Unzer Invoice (abgesicherter Rechnungskauf)',
    'D3DYN_HEIDELPAY_PARAM_INVOICESECUREDLIMITMAXIMUM'                  => 'Höchstbestellwert für Unzer Invoice (abgesicherter Rechnungskauf)',
    'D3UNZER_SETTINGS_NOTIFY_LABEL'                                 => 'Einstellungen und Info. zu Push Benachrichtigungen',
    'D3UNZER_SETTINGS_NOTIFYURL_INFO'                               => 'Damit Sie die Pushbenachrichtigungen nutzen können, muss bei Unzer die untenstehende Url der Empfängerdatei dem Unzer Support mitgeteilt werden.'
        . '<br>Die Url wird dann am Händler-Account durch den Unzer Support eingetragen.'
        . '<br>Erst dann kann der Shop die Push Benachrichtungen empfangen!',
    'D3UNZER_SETTINGS_NOTIFYURL'                                    => 'Push Benachrichtigungs Url',
    'd3_unzer_controllers_admin_channels_base'                      => 'Channel-Konfigurationen',
    'd3_unzer_controllers_admin_channels_main'                      => 'Einstellungen',
    'd3_unzer_controllers_admin_channels_payments'                  => 'Zahlungsarten',
    'D3UNZER_CONFIG_TITLE'                                          => 'Titel',
    'D3UNZER_CONFIG_CHANNEL'                                        => 'Channel',
    'D3UNZER_CONFIG_LOGLEVEL'                                       => 'Log Einstellungen',
    'D3UNZER_CONFIG_ISTESTCONFIG'                                   => 'Test Modus',
    'D3UNZER_INACTIVE'                                              => 'inaktiv',
    'D3UNZER_CONFIG_ALREADY_ASSIGNED_TO_OTHER_CONFIG'               => 'Diese Konfiguration ist bereits einer anderen Konfiguration zugeordnet',
    'D3UNZER_CONFIG_STATUS'                                         => 'Status',
    'D3UNZER_CONFIG_SHOPPAYMENT'                                    => 'Shop-Zahlungsart',
    'D3UNZER_CONFIG_ISASSIGNED'                                     => 'Zugeordnet?',
    'D3UNZER_CONFIG_UNASSIGNED'                                     => 'keine Zuordnung',
    'D3UNZER_CONFIG_CHANNELCONFIGURATION'                           => 'Channel-Konfiguration',
    'D3UNZER_NEW_CONFIG_CHANNEL'                                    => 'neue Channel-Konfiguration erstellen',
    'D3_UNZER_THIS_PAYMENT_RESTRICTIONINFO'                         => 'Sie möchten eine Premium Zahlungsart nutzen.' //
        .'<br>Der Aktiv Haken der Channel-Konfiguration und die Zuordnungen der Shop-Zahlungsarten werden nicht gespeichert!'//
        .'<br>Sie können das Premium Modul in unsererem <a href="https://www.oxidmodule.com/" title="oxidmodule.com" target="https://www.oxidmodule.com/">Onlineshop</a> erwerben.',
    'D3UNZER_INTERFACE_TYPE'                                        => 'Wählen Sie das Interface aus.',
    'D3UNZER_INTERFACE_TYPE_NGW'                                    => 'ngw',
    'D3UNZER_INTERFACE_TYPE_MGW'                                    => 'mgw/rest',
    'D3UNZER_SETTINGS_MGW_PRIVATE'                                  => 'privater Schlüssel (private key)',
    'D3UNZER_SETTINGS_MGW_PUBLIC'                                   => 'öffentlicher Schlüssel (public key)',
    'D3UNZER_LOGIN_MGW_HEADER'                                      => 'Zugangskeys',
    'D3UNZER_MGW_TRANSACTIONTYPE_authorization'                     => 'Reservierung',
    'D3UNZER_MGW_TRANSACTIONTYPE_cancellation'                      => 'Stornierung',
    'D3UNZER_MGW_TRANSACTIONTYPE_charge'                            => 'Belastung',
    'D3UNZER_MGW_TRANSACTIONTYPE_cancelAuthorize'                   => 'Reservierung stornieren',
    'D3UNZER_MGW_TRANSACTIONTYPE_cancelCharge'                      => 'Belastung stornieren',
    'D3UNZER_MGW_TRANSACTIONTYPE_finalize'                          => 'Rechnung finalisieren',
    'D3UNZER_MGW_AMOUNT_TOTAL'                                      => 'Gesamtbetrag',
    'D3UNZER_MGW_AMOUNT_REMAINING'                                  => 'verbleibender Gesamtbetrag',
    'D3UNZER_MGW_AMOUNT_CHARGED'                                    => 'gebuchter Gesamtbetrag',
    'D3UNZER_MGW_AMOUNT_CANCELED'                                   => 'stornierter Gesamtbetrag',
    'D3UNZER_MGW_PAYMENTSTATE_completed'                            => 'komplett bezahlt',
    'D3UNZER_MGW_PAYMENTSTATE_partly'                               => 'teilweise bezahlt',
    'D3UNZER_MGW_PAYMENTSTATE_canceled'                             => 'Zahlung abgebrochen',
    'D3UNZER_MGW_PAYMENTSTATE_pending'                              => 'warte auf Zahlung',
    'D3UNZER_MGW_PAYMENTSTATE_chargeback'                           => 'Rückbuchung durchgeführt',
    'D3UNZER_SETTINGS_MGW_DEBUGMODE'                                => 'Debug Modus aktiv',
    'D3DYN_HEIDELPAY_PARAM_SHOWSEPAGURANTEEDCUSTOMERFORMULAR'           => 'SEPA gesicherte Lastschrift - zeige Kundendateneingabe an:',
    'D3DYN_HEIDELPAY_PARAM_DONTSHOWDIRECTDEBITMANDATECHECKBOX'          => 'Lastschrift Mandat muss nicht akzeptiert werden:',

    'D3UNZER_PAYMENT_COMPANY_DATE'                                   => 'Datum',
    'D3UNZER_PAYMENT_COMPANY_RESULT'                                 => 'Ergebnis',
    'D3UNZER_PAYMENT_COMPANY_CARDS'                                  => 'Credit/Debit',
    'D3UNZER_PAYMENT_COMPANY_METHOD'                                 => 'Methode',
    'D3UNZER_PAYMENT_COMPANY_PAYMENTTYPE'                            => 'Zahlungstyp',
    'D3UNZER_PAYMENT_COMPANY_TXNID'                                  => 'Txn-ID',
    'D3UNZER_PAYMENT_COMPANY_UNIQUEID'                               => 'Unique ID',
    'D3UNZER_PAYMENT_COMPANY_SHORTID'                                => 'Short-ID',

    'D3UNZER_CHANNELS_ASSIGNED'                                      => 'Die Shop-Zahlungsart ist dieser Channel-Konfiguration zugeordnet.',
    'D3UNZER_CHANNELS_NOTASSIGNED'                                   => 'Die Shop-Zahlungsart hat keine Zuweisung und kann zugeordnet werden.',
    'D3UNZER_CHANNELS_SAVE'                                          => 'Zuordnung(en) speichern',

    'D3UNZER_WEBHOOKS_HEADLINE'                                      => 'registrierte Webhooks',
    'D3UNZER_WEBHOOKS_HEADLINE_URL'                                  => 'URL',
    'D3UNZER_WEBHOOKS_HEADLINE_EVENTS'                               => 'Events',
    'D3UNZER_WEBHOOKS_HEADLINE_ID'                                   => 'ID',
    'D3UNZER_WEBHOOKS_NOWEBHOOKREGISTERED'                           => 'Kein Webhook registriert!',
    'D3UNZER_WEBHOOKS_ERR_CLEARING'                                  => 'Webhook(s) bereinigen: %1$s',
    'D3UNZER_WEBHOOKS_ERR_CREATE'                                    => 'Webhook anlegen: %1$s',
    'D3UNZER_WEBHOOKS_ERR_GET'                                       => 'Webhook(s) abfragen: %1$s',
    'D3UNZER_WEBHOOKS_ERR_NOTBLANK'                                  => '%1$s darf nicht leer sein',
];
