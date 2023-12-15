<?php

// ['nom de la page','Nom du controller','nom de la methode','tableau d'arguments']

$routes =  [
    ['home', 'default', 'index'],
    ['contact', 'contact', 'index'],
    ['about', 'about', 'index'],

    // Articles
    ['articles', 'article', 'index'],
    ['article', 'article', 'show', ['id']],
    ['add', 'article', 'add'],
    ['edit', 'article', 'edit', ['id']],
    ['delete', 'article', 'delete', ['id']]
];
