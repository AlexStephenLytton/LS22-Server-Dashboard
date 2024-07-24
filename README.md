# LS22 Server Dashboard
LS22 Dedicated Server Dashboard Website in Fendt One design written in HTML and PHP

- LS22 Server Dashboard basierend auf dem PHP Code von Giants Software auf Basis des LS19 Dashboards
- Design basiert auf dem Konzept des Fendt One Bedienkonzept

## Features
- 6 Felder im Hauptdisplay, die in der index.php frei belegt werden können mit jeweils einem der vorhanden Module
- - Game Info (allgemeine Infos zum Server)
  - Online Players (Übersicht der sich auf dem Server befindlichen Spieler
  - Vehicle (Liste der Fahrzeuge)
  - Map Overview (Map mit Standorten der Fahrzeuge)
  - Mods (eine Modliste)
- 16 Icons in der Kopfzeile
- 16 Icons in der Fußzeile
- Zusätzliche Module können mit etwas HTML und XML Kenntnis einfach selbst erstellt werden

## Installation
1. Kopiere den Inhalt dieses Repositorys in einen Ordner auf Deinem Webserver
2. Ändere in der Datei Index.php folgende Zeile:

`<?php $serverAddress = "http://xxx.xxx.xxx.xxx:xxxxx/feed/dedicated-server-stats.xml?code=abcdefghijklmnop"; ?>`

mit der URL, die Du auf Deinem Farming Simulator Dedicated Server Dashboard unter ***Settings*** -> ***Link XML*** findest

3. Rufe in Deinem Browser Deine Website mit dem entsprechenden Unterordner (z.B. [http://meinewebsite.com/ls22server](http://meinewebsite.com/ls22server)) auf wobei /ls22server dem Ordner entspricht, in dem Du die Dateien aus diesem Repository gespeichert hast

## Screenshot

![ls22serverdashboard](https://github.com/user-attachments/assets/a21e3a36-74dd-4e96-bf83-b0a65ea4d88a)

