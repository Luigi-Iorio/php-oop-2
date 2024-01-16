<?php

// classi
class Prodotto
{
    public $titolo;
    public $prezzo;
    public $immagine;

    function __construct($titoloProdotto, $prezzoProdotto, $immagineProdotto)
    {
        $this->titolo = $titoloProdotto;
        $this->prezzo = $prezzoProdotto;
        $this->immagine = $immagineProdotto;
    }
}

class CategoriaAnimale extends Prodotto
{
    public $animale;
    public $iconaAnimale;

    function __construct($titoloProdotto, $prezzoProdotto, $immagineProdotto, $animaleCategoria, $iconaCategoria)
    {
        parent::__construct($titoloProdotto, $prezzoProdotto, $immagineProdotto);
        $this->animale = $animaleCategoria;
        $this->iconaAnimale = $iconaCategoria;
    }
}

class CategoriaArticolo extends CategoriaAnimale
{
    public $articolo;

    function __construct($titoloProdotto, $prezzoProdotto, $immagineProdotto, $animaleCategoria, $iconaCategoria, $articoloCategoria)
    {
        parent::__construct($titoloProdotto, $prezzoProdotto, $immagineProdotto, $animaleCategoria, $iconaCategoria);
        $this->articolo = $articoloCategoria;
    }
}
