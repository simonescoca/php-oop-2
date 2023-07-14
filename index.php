<?php
    /**
     *   Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
     *   L'e-commerce vende prodotti per animali.
     *   I prodotti sono categorizzati, le categorie sono Cani o Gatti.
     *   I pr anche giochi,odotti saranno oltre al cibo, cucce, etc.
     *   Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
     *   icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
     */
    include_once __DIR__ . "/database/istanze.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./styles/style.css">
        <title>E-Commerce</title>
    </head>
    <body>
        <header>
            <div class="container">
                <h2>
                    E-Commerce di prodotti per animali
                </h2>    
            </div>
        </header>
        <main>
            <div class="d-flex justify-content-between align-items-center container">
                <?php
                    foreach ($prodotti as $prodotto) {
                ?>
                        <div class="card">
                            <img src="<?php echo $prodotto -> image; ?>" class="card-img-top" alt="<?php echo $prodotto -> descrizione; ?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $prodotto -> nome; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo number_format ($prodotto -> prezzo_euro, 2, '.', '') . "€"; ?>
                                </p>
                                <p class="card-text">
                                    <?php echo "Categoria: " . $prodotto -> categoria; ?>
                                </p>
                                <p class="card-text">
                                    <?php echo "Rating: " . $prodotto -> rating; ?>
                                </p>
                                <?php
                                    if (isset ($prodotto -> taglia)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Tipo Cibo: " . $prodotto -> tipo;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> colore)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Colore: " . $prodotto -> colore;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> taglia)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Taglia: " . $prodotto -> taglia;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> colore)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Tipo: " . $prodotto -> tipo;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> principio_attivo)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Prinicipio attivo: " . $prodotto -> principio_attivo;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> dosaggio)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Dosaggio: " . $prodotto -> dosaggio;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> materiale)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Materiale: " . $prodotto -> materiale;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (isset($prodotto -> dimensioni)) {
                                ?>
                                        <p class="card-text">
                                            <?php
                                                echo "Dimensioni: " . $prodotto -> dimensioni;
                                            ?>
                                        </p>
                                <?php
                                    }
                                ?>
                                <p class="card-text">
                                    <?php
                                        echo "Descrizione: " . $prodotto -> descrizione;
                                    ?>
                                </p>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        </main>
    </body>
</html>