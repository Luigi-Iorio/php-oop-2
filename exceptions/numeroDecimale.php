<?php
require_once __DIR__ . '/../models/prodotti.php';

function verificaNumeroDecimale($argomento)
{
    if (!is_float($argomento)) {
        throw new Exception("Errore, il prezzo inserito ($argomento) non è un numero decimale");
    }
}
