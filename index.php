<?php
require_once __DIR__ . '/controllers/controllerProdotti.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti animali</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- /css -->
    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!-- /font roboto -->
</head>

<body>
    <!-- header -->
    <header>
        <h1>Boolcommerce</h1>
        <h3>Prodotti per animali</h3>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <h2>Lista dei prodotti</h2>
        <div class="cont">
            <ul>
                <?php foreach ($prodotti as $prodotto) : ?>
                    <li class="card">
                        <div class="img">
                            <img src="<?php echo $prodotto->immagine ?>" alt="<?php echo $prodotto->titolo ?>">
                        </div>
                        <div class="info">
                            <h4><?php echo $prodotto->titolo ?></h4>
                            <p><?php echo $prodotto->descrizione ?></p>
                            <p>Prezzo prodotto: <?php echo $prodotto->prezzo ?> €</p>
                            <div class="animale">
                                <p>Animale: <?php echo $prodotto->animale ?></p>
                                <img src="<?php echo $prodotto->iconaAnimale ?>" alt="<?php echo $prodotto->animale ?>">
                            </div>
                            <p>Tipologia Prodotto: <?php echo $prodotto->articolo ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <!-- /main -->

    <!-- footer -->
    <footer>
        <h3>Made by Luigi | Classe #110</h3>
    </footer>
    <!-- /footer -->
</body>

</html>