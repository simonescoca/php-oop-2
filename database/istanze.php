<?php
    include_once __DIR__ . "/../items-classes/Cibo.php";
    include_once __DIR__ . "/../items-classes/Cuccia.php";
    include_once __DIR__ . "/../items-classes/Gioco.php";
    include_once __DIR__ . "/../items-classes/Medicinale.php";
?>

<?php
    $medicinale = new Medicinale ("Principio attivissimo", "Una pasticca al secondo", 1, "Medicina per la gattina", "La tua gattina torna nuova", 49.99, "Gatti", 4.5);
    $cibo = new Cibo ("Snack", "Media", 2, "Snack delizioso", "Il tuo cane si leccherà i baffi che non ha", 2.99, "Cani", 4.0);
    // $cuccia = new Cuccia ("Tessuto", "Grande", 3, "Cuccia cucciosa", "Provocatrice di pisolini infiniti", 79.39, "Cani", 4.5);
    $gioco = new Gioco ("Pallina", "Rosso", 4, "Speedball", "Farà impazzire il tuo gatto questa pallina super veloce", 14.50, "Gatti", 5.0);

    var_dump ($medicinale);
    var_dump ($cibo);
    var_dump ($cuccia);
    var_dump ($gioco);
?>