<?php include_once __DIR__ . "/../parent-classes/Prodotto.php"; ?>
<?php
    class Cuccia extends Prodotto {
        public $materiale;
        public $dimensioni;

        function __construct (string $materiale, string $dimensioni, int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating) {
            parent::__construct ($id, $nome, $descrizione, $prezzo_euro, $categoria, $rating);
            $this -> materiale = $materiale;
            $this -> dimensioni = $dimensioni;
        }

        // public function  () {
        //     return ;
        // }
    }
?>