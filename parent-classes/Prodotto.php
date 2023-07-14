<?php
    class Prodotto {
        public $id;
        public $nome;
        public $descrizione;
        public $prezzo_euro;
        public $categoria;
        public $rating;
        public $image;

        function __construct (int $id, string $nome, string $descrizione, float $prezzo_euro, string $categoria, float $rating, string $image) {
            $this -> id = $id;
            $this -> nome = $nome;
            $this -> descrizione = $descrizione;
            $this -> prezzo_euro = $prezzo_euro;
            $this -> categoria = $categoria;
            $this -> rating = $rating;
            $this -> image = $image;
        }

        // public function  () {
        //     return ;
        // }
    }
?>