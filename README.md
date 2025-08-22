# Magento 4 newbies - Cron

Magento 4 newbies è una raccolta di video in lingua italiana dove Webito spiega come sviluppare in Magento2.
Questa repo in particolare è stata utilizzata durante la registrazione del video esplicativo dell'utilizzo delle factory, degli observer e dei cron job in Magento.

---


## Argomenti trattati nel video

Nel video viene spiegata la gestione dei cron di Magento, parlando della configurazione del file cron.xml e di crontab.xml, mostrando un esempio pratico di utilizzo e riportando delle considerazioni sui casi d'uso e buone pratiche da rispettare.
Nel dettaglio un cron job si occupa di inviare una mail di test.

## Installazione

1. Puoi installare il modulo in un progetto Magento 2/Mage-OS tramite composer:
    ```
    composer config repositories.webito-dev vcs https://github.com/webito-dev/magento4newbies-cron
    composer require webito-dev/magento4newbies-cron
    ```
   Oppure copiando direttamente il contenuto di questa repository nella cartella app/code/Webito/CronTest del tuo progetto.


2. Abilita il modulo
    ```
    bin/magento module:enable Webito_CronTest
    bin/magento setup:upgrade
    ```

## A proposito di Webito e degli autori di Magento 4 newbies 

Davide Lunardon e Samuele Martini sono due sviluppatori fullstack web specializzati nella consulenza e-commerce con particolare verticalità nello sviluppo con Magento.
Con più di 20 anni di esperienza nel settore web e-commerce, dati dalla somma delle carriere dei due, Webito cerca di ridurre la curva di apprendimento legata allo sviluppo su Magento tramite la creazione di video youtube nella rubrica "Magento 4 newbies".
I due autori sono anche contributori per la piattaforma Mage-OS, mirror di Magento Opensource supportato da una vasta community che si prefigge come obiettivo l'evoluzione e la manutenzione dell'applicativo Magento.
