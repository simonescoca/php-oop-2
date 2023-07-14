<?php
    include_once __DIR__ . "/../items-classes/Cibo.php";
    include_once __DIR__ . "/../items-classes/Cuccia.php";
    include_once __DIR__ . "/../items-classes/Gioco.php";
    include_once __DIR__ . "/../items-classes/Medicinale.php";
?>

<?php
    $medicinale = new Medicinale ("Principio attivissimo", "Una pasticca al secondo", 1, "Medicina per la gattina", "La tua gattina torna nuova", 49.99, "Gatti", 4.5, "https://www.helpfarma.it/23019-medium_default/drontal-2cpr-gatto.jpg");
    $cibo = new Cibo ("Snack", "Media", 2, "Snack delizioso", "Il tuo cane si leccherà i baffi che non ha", 2.99, "Cani", 4.0, "https://qz-petshop.com/8734-large_default/pedigree-snack-per-cani-rodeo-manzo-7-sticks.jpg");
    $cuccia = new Cuccia ("Tessuto", "Grande", 3, "Cuccia cucciosa", "Provocatrice di pisolini infiniti", 79.39, "Cani", 4.5, "https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_UF894,1000_QL80_.jpg");
    $gioco = new Gioco ("Pallina", "Rosso", 4, "Speedball", "Farà impazzire il tuo gatto questa pallina super veloce", 14.50, "Gatti", 5.0, "https://m.media-amazon.com/images/I/71yg2KYeq6L._AC_UF894,1000_QL80_.jpg");

    $prodotti = [$medicinale, $cibo, $cuccia, $gioco];
?>