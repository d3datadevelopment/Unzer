---
title: ({unreleased}) Integration der PaymentApi / MGW Schnittstelle
---
## Einleitung
Seit 10. Dezember 2018 bietet Unzer offiziell eine Rest Api (auch PaymentApi / MGW genannt) an.  
Die neue Schnittstelle unterscheidet sich erheblich zu den vorherigen Schnittstellen.  
Mit der Modulversion 7 wird ausschließlich die neue PaymentApi / MGW unterstützt.

## Was ändert sich für den Shopbetreiber im Modul?
Die Daten SenderId, Login, Passwort und Channels werden durch Zugangskeys (Key Pair) ersetzt.  
Diese können im Adminbereich des Moduls in Abschnitt [Zugangskeys] eingetragen werden.

Den Zahlungsmitteln entsprechende Formulare werden im Bestellschritt "3. Versand & Zahlungsart" angezeigt.

## Welche Zahlungsarten werden unterstützt?
- Kartentypen (Kredit- und Debitkarten wurden zusammengefasst)
- SEPA ELV mit / ohne Zahlungssicherung
- Rechnungskauf B2B versichert 
- Rechnungskauf B2C versichert / unversichert 
- iDeal
- Flexipay Direct
- Paypal
- Vorkasse
- Sofort
- EPS
- Przelewy24
- Giropay
