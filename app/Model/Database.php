<?php

require 'config/dbConfig.php';

$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=' . DBCHARSET . '';

$options = [
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION, //Gestion des erreurs
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,       //Gestion du mode par défaut de récupération des données 
];

//voir doc PHP "étendre les exceptions". //On ne fais jamais ça en mode prod. Juste en mode dev.

$connexion = new PDO($dsn, DBUSERNAME, DBUSERPASSWORD,$options);