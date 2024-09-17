<?php 
// definisco la classe movie

class Movie {
    // dichiaro le variabili di istanza
    public $titolo;
    public $anno; 
    public $genere;
    public $cast;

    // definisco il costruttore
    public function __construct($_titolo, $_anno, $_genere, $_cast) {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->cast = $_cast;
    }
}

// creo le istanze della classe Movie
    $firs_movie = new Movie ("Will Hunting - Genio Ribelle", 1997, "Drammatico", "Matt Damon, Ben Affleck, Robin Williams");
    $second_movie = new Movie ("Il Padrido", 1972, "Giallo", "Al Pacino, Marlon Brando");

?>