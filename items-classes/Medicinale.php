<?php include_once __DIR__ . "/../parent-classes/Prodotto.php"; ?>
<?php
    class Medicinale extends Prodotto {
        public $principio_attivo;
        public $dosaggio;

        function __construct (string $principio_attivo, string $dosaggio, int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating) {
            parent::__construct ($id, $nome, $descrizione, $prezzo_euro, $categoria, $rating);
            $this -> principio_attivo = $principio_attivo;
            $this -> dosaggio = $dosaggio;
        }

        // public function  () {
        //     return ;
        // }
    }
?>