<?php include_once __DIR__ . "/../parent-classes/Prodotto.php"; ?>
<?php
    class Cuccia extends Prodotto {
        public $materiale; // il materiale della cuccia (legno, plastica, tessuto)
        public $dimensioni; // le dimensioni della cuccia (lunghezza, larghezza, altezza)

        function __construct (string $materiale, string $dimensioni, int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating, string $image) {
            parent::__construct ($id, $nome, $descrizione, $prezzo_euro, $categoria, $rating, $image);
            $this -> materiale = $materiale;
            $this -> dimensioni = $dimensioni;
        }

        // public function  () {
        //     return ;
        // }
    }
?>