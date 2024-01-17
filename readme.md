# PHP Prodotti Per Animali

### Descrizione

Questo progetto simula uno shop online di prodotti per animali domestici. Il progetto utilizza il linguaggio PHP e il paradigma della programmazione orientata agli oggetti (OOP).

### Funzionalità chiave

- L'e-commerce vende prodotti per animali di diverse categorie: Cani o Gatti.
- I prodotti sono di vari tipi: cibo, giochi, cucce.
- Il progetto mostra delle card con i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria e il tipo di articolo.

### Implementazioni

#### Implementazione Classi

Nel file `prodotti.php` sono definite tre classi principali:

##### - Prodotto

La classe `Prodotto` rappresenta un prodotto generico e contiene le seguenti proprietà:

- **$titolo**: titolo del prodotto.
- **$prezzo**: prezzo del prodotto.
- **$immagine**: il percorso dell'immagine del prodotto.

Il costruttore \_\_construct inizializza queste proprietà quando si crea un nuovo oggetto di tipo `Prodotto`.

##### - CategoriaAnimale

La classe `CategoriaAnimale` estende la classe `Prodotto` e aggiunge due nuove proprietà:

- **$animale**: la categoria dell'animale (Cani o Gatti).
- **$iconaAnimale**: il percorso dell'icona rappresentativa della categoria animale.

Anche questa classe ha un costruttore che chiama il costruttore della classe padre (`Prodotto`) e inizializza le sue proprietà aggiuntive.

##### - CategoriaArticolo

La classe `CategoriaArticolo` estende la classe `CategoriaAnimale` e introduce una nuova proprietà:

- **$articolo**: il tipo di articolo (cibo, giochi, cucce).

Anche in questo caso, il costruttore chiama il costruttore della classe genitore (`CategoriaAnimale`) per inizializzare le proprietà ereditate e successivamente inizializza la propria proprietà.

#### Implementazione Controller

Nel file `controllerProdotti.php`, viene gestita la logica di caricamento dei dati dal database e la creazione degli oggetti. I passaggi includono:

- **Richiamo dei file necessari**: Viene inclusa la definizione del database (database.php) e la definizione delle classi dei prodotti (prodotti.php).

- **Inizializzazione dell'array dei prodotti**: Viene creato un array vuoto ($prodotti) che conterrà gli oggetti dei prodotti.

- **Iterazione sui dati del database**: Un ciclo foreach scorre ogni elemento del database e crea un nuovo oggetto CategoriaArticolo per ogni elemento, popolando l'array $prodotti.

Questo controller si occupa di creare un set di oggetti in base ai dati forniti dal database, preparando così i dati necessari per la visualizzazione in pagina.

#### Implementazione Trait

Nel file `descrizione.php`, è stato implementato un trait denominato Descrizione. Il trait è stato definito con una singola proprietà pubblica `$descrizione`.

Questo trait può essere utilizzato da altre classi, permettendo loro di includere facilmente una descrizione.

#### Implementazione Exceptions

Nel file `numeroDecimale.php`, è stata implementata una funzionalità che verifica se un dato argomento è un numero decimale. La funzione `verificaNumeroDecimale` prende un argomento e lancia un'eccezione se non è di tipo float. L'eccezione viene generata con un messaggio di errore personalizzato indicando anche il valore che ha causato il problema.

Nel file `index.php`, all'interno di un blocco try-catch, viene chiamata la funzione `verificaNumeroDecimale` passando il prezzo del prodotto come argomento. Se l'argomento non è un numero decimale, viene catturata e gestita l'eccezione, stampando il messaggio di errore appropriato.
