---
title: Webhooks
---

Neben der synchronen Kommunikation mit Unzer kann auch unabhängig von der Nutzerinteraktion eine asynchrone Kommunikation seitens Unzer stattfinden.

Hierfür kann man [Webhooks](https://docs.unzer.com/reference/supported-webhook-events/) registrieren, über die Unzer die teilnehmenden Systeme (z.B. Shop, WaWi, ...) über Statusänderungen informieren kann. Das jeweilige System kann auf die Benachrichtigung passend reagieren.

## Warum sind Webhooks notwendig?

Es kommt immer wieder vor, dass beim Durchführen der Bezahlung bis zum Rücksprung in den Webshop die Transaktion abgebrochen wird. Dies kann technische Gründe haben (z.B. Shop nicht erreichbar), 
aber auch (versehentlich) vom Shopbesucher so ausgelöst werden (z.B. Browser geschlossen). Dann bleibt die Bestellung in einem unklaren Zwischenstadium stehen.
Mit Webhooks kann Unzer den Shop auch später noch anrufen und die konfigurierten Aktionen auslösen.

## Webhook einrichten

Für den Shop mit dem Unzer-Modul wird automatisch ein Webhook eingerichtet, sobald die Einstellungen unter "Admin -> D3 Module -> Unzer -> Einstellungen -> Stamm" gespeichert werden.

Alle dann eingerichteten Webhooks (Shopeigene und Shopfremde) werden dann dort angezeigt.

Beim erneuten Speichern werden alle Shopwebhooks aktualisiert.

## Aktionen

Die Webhooks werden grundsätzlich von Unzer selbst ausgelöst, können aber zu Debugzwecken auch manuell gestartet werden.

Im OXID-Modul wird auf die folgenden Trigger reagiert:

* payment.completed: Eine Transaktion wurde komplett bezahlt. Der Shop stellt den Bestellstatus auf "OK" und setzt das Versanddatum.
* payment.partly: Eine Transaktion wurde teilweise bezahlt. Die Bestellung wird auf "Pending" gestellt und eine Mail an den Shopbetreiber verschickt.
* payment.chargeback: Eine Belastung der Zahlungsart wird zurückgesetzt. Die Auslösung kann durch z.B. Kreditinstitute oder tlw. auch durch den Kunden erfolgen. Die Bestellung wird auf "Pending" gestellt und eine Mail an den Shopbetreiber verschickt.
