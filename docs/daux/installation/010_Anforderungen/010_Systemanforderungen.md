---
title: Systemanforderungen
---

* PHP Version
    * 7.1.x bis 8.1
* PHP Decoder
    * installierter ionCube Loader (PHP bis 7.4) *oder*
    * installierter SourceGuardian Loader (PHP ab 8.0)
* Shopeditionen
    * OXID eShop Community Edition (CE)
    * OXID eShop Professional Edition (PE)
    * OXID eShop Enterprise Edition (EE)
    * OXID eShop B2B Edition
* Shopversionen
    * OXID eShop in Compilation Version 
        * 6.2.x
        * 6.3.x
        * 6.4.x
        * 6.5.x
* Themes
    * flow
    * wave
* D3 Modul-Connector ([kostenfrei bei D3 erhältlich](https://www.oxidmodule.com/connector/)) ab Version 5.3.0.0 
* Installation via [Composer](https://getcomposer.org)
* bei Verwendung der Zahlungsart „iDeal“ oder „Przelewy24“ wird ein freier Cronjob benötigt
* bei Verwendung der Zahlungsart „Vorkasse“ oder „Rechnungskauf“ wird ein freier Cronjob benötigt

Beachten Sie, dass die Ihnen vorliegende Modulversion entsprechend für Ihre genutzte PHP-Version sowie dem auf Ihrem Server vorhandenen Decoder kompatibel ist. Im Zweifelsfall kontaktieren Sie uns und nennen den für Ihren Shop genutzten Decoder und die PHP-Version.

Kontrollieren Sie bitte auch, ob diese Modulversion für die von Ihnen eingesetzte Shopedition (Professional Edition (PE) oder Enterprise Edition (EE)) ausgelegt ist. 

### Hinweis:
> Durch composer werden die Abhängigkeiten direkt vor der Installation geprüft.  
> D.h. wenn eine der Anforderung nicht erfüllt ist, wird das Modul nicht installiert und die entsprechende Anforderung wird direkt auf der Konsole ausgegeben.
