<?php
require_once __DIR__ . '/controllers/controllerProdotti.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti animali</title>
</head>

<body>
    <!-- header -->
    <header>
        <h1>E-commerce</h1>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <h3>Lista dei prodotti</h3>
        <ul>
            <?php foreach ($prodotti as $prodotto) : ?>
                <li>Titolo prodotto: <?php echo $prodotto->titolo ?></li>
                <li>Prezzo prodotto: <?php echo $prodotto->prezzo ?> €</li>
                <li>Immagine prodotto: <?php echo $prodotto->immagine ?></li>
                <li>Animale: <?php echo $prodotto->animale ?></li>
                <li>Icona: <?php echo $prodotto->iconaAnimale ?></li>
                <li>Tipologia: <?php echo $prodotto->articolo ?></li>
                <hr>
            <?php endforeach; ?>
        </ul>
    </main>
    <!-- /main -->

    <!-- footer -->
    <footer>
        <h4>Made by Luigi | Classe #110</h4>
    </footer>
    <!-- /footer -->
</body>

</html>