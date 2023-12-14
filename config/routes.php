<?php

// ['nom de la page','Nom du controller','nom de la methode','tableau d'arguments']

$routes =  [
    ['home', 'default', 'index'],
    ['contact', 'contact', 'index'],
    ['about', 'about', 'index'],
    ['articles', 'article', 'index'],
    ['article', 'article', 'show', ['id']],
    ['delete', 'article', 'delete', ['id']]
];
