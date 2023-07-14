<?php include_once __DIR__ . "/../parent-classes/Prodotto.php"; ?>
<?php
    class Cibo extends Prodotto {
        public $tipo; // il tipo di cibo (crocchette, umido, snack)
        public $taglia; // la taglia del cibo (piccolo, medio, grande)

        function __construct (string $tipo, string $taglia, int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating, string $image) {
            parent::__construct ($id, $nome, $descrizione, $prezzo_euro, $categoria, $rating, $image);
            $this -> tipo = $tipo;
            $this -> taglia = $taglia;
        }

        // public function  () {
        //     return ;
        // }
    }
?>