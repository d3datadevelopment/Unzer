---
title: technische Details
---

## PCI 3 Konformität
PCI DSS Level SAQ-A wird ab Modulversion 5.2.0.0 unterstützt. Details zu PCI finden Sie unter [diesem Link](https://www.pcisecuritystandards.org/).

## Unterstützte Zahlungsarten
Die Liste der unterstützen Zahlungsarten können Sie der [Editionsseite](015_Editionsunterschiede.md) entnehmen.

## Transaktionsübersicht an den Bestellungen 
Das Modul verfügt über einen eigenen Administrationsbereich an den Bestellungen, wo Sie mit der Premium-Version Buchungen, Stornierungen, Gutschriften etc. durchführen können.  
Eine separate Anmeldung am Unzer-Händlerbereich ist für die Zahlungsabwicklungen der Shopbestellungen dadurch nicht nötig.

## Webhooks
Damit wird der Shop aktiv über Statusänderungen benachrichtigt und kann die Bestellungen automatisch aktualisieren bzw. weiter verarbeiten.

## verwendete Schnittstelle
Mit Modulversion 7 wird ausschliesslich die aktuelle PaymentApi / MGW Schnittstelle verwendet. Den Wechsel von der alten NGW-Schnittstelle beschreiben wir Ihnen [hier](../configuration/040_Schnittstellenwechsel).