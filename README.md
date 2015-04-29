# Mail-php
Formulaire html permetant l'envoi de mail via php

Ce script php permet d'envoyer des mails via php. Il suffit de remplir le formulaire et de l'envoyer. Il faut cependant paramétrer le SMTP et en option cURL.

Developper avec Bootstrap et php.

# Paramétrage sous Windows :

## SMTP :

Ouvrir le fichier php.ini
Dans la section [mail function]
Trouver la ligne "SMTP=...."
Mettre l'adresse du serveur smtp de votre FAI et la modifier comme ceci : SMTP = smtp.sfr.fr (exemple pour sfr).
Si souci à l'envoi du mail : Remplacer le mail dans la ligne sendmail_from = you@yourdomain par le mail de l'expéditeur.
Recharger la conf du serveur

## cURL :

Activer en décommentant la ligne ;extension=php_curl.dll (enlever le point virgule (;) au début de ligne) dans le fichier php.ini.

# Paramétrage sous Linux :

Sous Linux il suffit d’installer le paquet php5-curl: sudo apt-get install php5-curl pour les distributions dérivées de Debian. Et de redémarrer Apache: sudo /etc/init.d/apache2 restart.
