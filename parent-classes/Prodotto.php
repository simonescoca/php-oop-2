<?php
    class Prodotto {
        public $id;
        public $nome;
        public $descrizione;
        public $prezzo_euro;
        public $categoria;
        public $rating;

        function __construct (int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating) {
            $this -> id = $id;
            $this -> nome = $nome;
            $this -> descrizione = $descrizione;
            $this -> prezzo_euro = $prezzo_euro;
            $this -> categoria = $categoria;
            $this -> rating = $rating;
        }

        // public function  () {
        //     return ;
        // }
    }
?>