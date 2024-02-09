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
    - Sofortüberweisung
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
