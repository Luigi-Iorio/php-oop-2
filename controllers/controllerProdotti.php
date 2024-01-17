<?php

require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../models/prodotti.php';
require_once __DIR__ . '/../trait/descrizione.php';

$prodotti = [];

foreach ($database as $prodotto) {
    array_push($prodotti, new CategoriaArticolo($prodotto["descrizione"], $prodotto["titolo"], $prodotto['prezzo'], $prodotto['immagine'], $prodotto['animale'], $prodotto['iconaAnimale'], $prodotto['articolo']));
}
