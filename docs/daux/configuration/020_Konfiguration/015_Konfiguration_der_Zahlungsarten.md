---
title: Konfiguration der Zahlungsarten
---

## 1. verfügbare Zahltypen:

Die lizenzabhängig verfügbaren Zahltypen entnehmen Sie bitte der [Editionsübersicht](../../description/015_Editionsunterschiede.md).

## 2. Zuordnung der Shop-Zahlungsarten zu den Unzer Zahltypen:

1. Bereiten Sie die gewünschten Shop-Zahlungsarten unter [ Shopeinstellungen ] / [ Zahlungsarten ] vor.
    Diese müssen aktiviert, vollständig konfiguriert und im Frontend sichtbar sind.
    Es werden durch den Installationsassistenten weitere Shop-Zahlungsarten hinzugefügt:
    - Debitkarte
    - Apple Pay
    - Google Pay
    - Sofortüberweisung
    - Unzer Direktüberweisung
    - iDeal Niederlande
    - Giropay Deutschland
    - EPS Österreich
    - Unzer Paypal
    - Unzer Przelewy24

2. Gehen Sie anschließend in den Menüpunkt [ (D3) Module ] / [ {$menutitle} ] / [ Channel-Konfigurationen ].
(Sie können die bereits mitgelieferten Channel-Konfigurationen verwenden und verändern.)
3. Andernfalls vergeben Sie einen [ Titel ] (bspw. Kreditkarte Inland) und wählen Sie den Unzer-Zahltyp aus.

> [i] Wenn der Haken bei "Test Modus" gesetzt wird, ist die Channel-Konfiguration erst dann aktiv, wenn das Modul sich im Test Modus befindet. 

4. Gehen Sie in den Tab [ Zahlungsarten ]. Hier sehen Sie eine Liste der Shop-Zahlungsarten und deren aktuellen Zuordnung.
    Wählen Sie für die aktive Channel-Konfiguration die zu verwendente Shop-Zahlungsart in der Spalte [ Zugeordnet? ] aus.
    Sobald die Shop-Zahlungsart aktiv und zugeordnet ist, wird die Konfiguration im Frontend angewendet.
> [i] Sie können mehrere Shop-Zahlungsarten einer Channel-Konfiguration zuordnen. 
 
> [i] Eine Shop-Zahlungsart kann jedoch nur einer Channel-Konfiguration zugeordnet werden.
 
> [i] Eine Shopzahlungsart wird grau/inaktiv angezeigt, wenn diese bereits einer anderen Channel-Konfiguration zugeordnet ist

5. Checkliste
    - Sind die Shop-Zahlungsarten im Frontend sichtbar?
    - Ist der Test/Livemodus im Modul aktiv? 
    - Sind die Channel-Konfigurationen korrekt eingestellt (Aktiv, Test Modus, Zuordnung der Shop-Zahlungsart)?
    - Sind die Test/Livedaten im Modul hinterlegt?

## Hinweise zu Apple Pay

Apple Pay steht als PaymentApi / MGW-Zahltyp zur Verfügung und wird wie die anderen Zahlarten über eine Channel-Konfiguration eingerichtet.

Legen Sie dafür eine Channel-Konfiguration mit dem Unzer-Zahltyp [ Apple Pay ] an und ordnen Sie ihr die Shop-Zahlungsart [ Unzer Apple Pay ] zu. Im Tab [ Einstellungen ] der Channel-Konfiguration kann der Apple-Pay-Country-Code gepflegt werden. Tragen Sie hier den ISO-2-Ländercode ein, der zu Ihrer Freischaltung passt, zum Beispiel `DE`.

Im Frontend wird Apple Pay über den Apple-Pay-Button im Bestellschritt "Versand & Zahlungsart" autorisiert. Die Zahlart wird nur angezeigt beziehungsweise nutzbar, wenn Apple Pay auf dem verwendeten Gerät, im Browser und mit der hinterlegten Konfiguration verfügbar ist. Im Testmodus bleibt die Zahlart sichtbar, damit die Sandbox-Konfiguration geprüft werden kann.

## Hinweise zu PayLater-Lastschrift

PayLater-Lastschrift steht als PaymentApi / MGW-Zahltyp [ Unzer Direct Debit (paylater-direct-debit) ] zur Verfügung. Die Zahlart bietet eine Zahlungsgarantie und wird vom Modul ausschließlich für Privatkunden mit Rechnungsadresse in Deutschland oder Österreich und der Währung EUR angeboten. Kunden mit ausgefülltem Firmenfeld können diese Zahlart nicht verwenden.
Legen Sie unter [ Shopeinstellungen ] / [ Zahlungsarten ] eine eigene Shop-Zahlungsart an, zum Beispiel [ Unzer PayLater-Lastschrift ], aktivieren Sie diese und konfigurieren Sie die Länderzuordnung für Deutschland und Österreich. Der Installationsassistent legt für PayLater-Lastschrift keine eigene Shop-Zahlungsart an.
Erstellen Sie anschließend eine Channel-Konfiguration mit dem Unzer-Zahltyp [ Unzer Direct Debit (paylater-direct-debit) ] und ordnen Sie ihr die Shop-Zahlungsart im Tab [ Zahlungsarten ] zu. Hinterlegen Sie die passenden Test- beziehungsweise Live-Zugangskeys für die bei Unzer freigeschaltete Zahlart.
Im Bestellschritt "Versand & Zahlungsart" wird das Unzer-Eingabeformular für PayLater-Lastschrift angezeigt. Die im Formular erforderlichen Angaben und Zustimmungen müssen vor dem Fortsetzen vollständig sein. Die Zahlart benötigt außerdem ein Geburtsdatum sowie eine vollständige Rechnungsadresse.
PayLater-Rechnungskauf und die bisherige gesicherte SEPA-Lastschrift sind eigene Unzer-Zahltypen. Verwenden Sie für PayLater-Lastschrift die oben genannte Channel-Konfiguration.
