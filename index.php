<?php 
// definisco la classe movie

class Movie {
    // dichiaro le variabili di istanza
    public $titolo;
    public $anno; 
    public $genere;
    public $cast;

    // definisco il costruttore
    public function __construct($_titolo, $_anno, $genere, $_cast) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->cast = $cast;
    }
}
?>