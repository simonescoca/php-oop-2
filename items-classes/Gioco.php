<?php include_once __DIR__ . "/../parent-classes/Prodotto.php"; ?>
<?php
    class Gioco extends Prodotto {
        public $tipo;
        public $colore;

        function __construct (string $tipo, string $colore, int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating) {
            parent::__construct ($id, $nome, $descrizione, $prezzo_euro, $categoria, $rating);
            $this -> tipo = $tipo;
            $this -> colore = $colore;
        }

        // public function  () {
        //     return ;
        // }
    }
?>