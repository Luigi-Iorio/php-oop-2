<?php
require_once __DIR__ . '/../trait/descrizione.php';

// classi
class Prodotto
{
    use Descrizione;

    public $titolo;
    public $prezzo;
    public $immagine;

    function __construct($descrizione, $titoloProdotto, $prezzoProdotto, $immagineProdotto)
    {
        $this->descrizione = $descrizione;
        $this->titolo = $titoloProdotto;
        $this->prezzo = $prezzoProdotto;
        $this->immagine = $immagineProdotto;
    }
}

class CategoriaAnimale extends Prodotto
{
    public $animale;
    public $iconaAnimale;

    function __construct($descrizione, $titoloProdotto, $prezzoProdotto, $immagineProdotto, $animaleCategoria, $iconaCategoria)
    {
        parent::__construct($descrizione, $titoloProdotto, $prezzoProdotto, $immagineProdotto);
        $this->animale = $animaleCategoria;
        $this->iconaAnimale = $iconaCategoria;
    }
}

class CategoriaArticolo extends CategoriaAnimale
{
    public $articolo;

    function __construct($descrizione, $titoloProdotto, $prezzoProdotto, $immagineProdotto, $animaleCategoria, $iconaCategoria, $articoloCategoria)
    {
        parent::__construct($descrizione, $titoloProdotto, $prezzoProdotto, $immagineProdotto, $animaleCategoria, $iconaCategoria);
        $this->articolo = $articoloCategoria;
    }
}
