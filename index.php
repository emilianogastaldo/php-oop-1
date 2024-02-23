<?php

echo'prova';

class Movie{
    public $id;
    public $title;
    public $overview;
    public $vote;
    public $release_date;
    public $director;
    public $cast;

    public function __construct(String $title, String $overview, Int $vote, String $release_date, Director $director, Array $cast){
        $this->id = uniqid();
        $this->title = $title;
        $this->overview = $overview;
        $this->vote = $vote;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->cast = $cast;
    }

    public function getTitle(){
        return $this->title;
    }
}

class Director{
    public $id;
    public $first_name;
    public $last_name;
    public $birthday;

    public function __construct($first_name, $last_name, $birthday){
        $this->id = uniqid();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birthday = $birthday;
    }
    public function getFullName(){
        return $this->first_name . ' ' . $this->last_name;
    }
}

class Actor{
    public $id;
    public $first_name;
    public $last_name;
    public $birthday;
    public $role;

    public function __construct($first_name, $last_name, $birthday, $role){
        $this->id = uniqid();
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birthday = $birthday;
        $this->role = $role;
    }
}

// Dati Movie
$title1 = "The Witcher: Nightmare of the Wolf";
$overview1 = "Escaping from poverty to become a witcher, Vesemir slays monsters for coin and glory, but when a new menace rises, he must face the demons of his past.";
$vote1 = rand(1,10);
$release_date1="2020-08-26";

$title2 = "Kommissar Pippo";
$overview2 = 'Kommissar Pippo is searching the biggest dealer of Locarno City.';
$vote2 = rand(1,10);
$release_date2 = "2004-08-04";

// Creo due Director
$giorgio = new Director ('Giorgio', 'Bianchi', '24/06/1974');
$emanuele = new Director ('Emanuele', 'Diversi', '14/10/1954');

// Creo degli Actor
$luisa = new Actor ('Luisa', 'Gialli', '31/01/1995', 'Main');
$gennaro = new Actor('Gennaro', 'Costa', '23/07/1990', 'Main');
$annalisa = new Actor ('Annalisa', 'Rossi', '15/03/1987', 'Secondary');
$guglielmo = new Actor ('Guglielmo', 'Perusi', '15/06/1967', 'Secondary');
$elisa = new Actor ('Elisa', 'Monti', '15/04/1977', 'Secondary');
$sofia = new Actor ('Sofia', 'Leoni', '15/08/1997', 'Secondary');

// Creo un array per il cast
$cast1 = [$luisa, $annalisa, $guglielmo];
$cast2 = [$gennaro, $elisa, $sofia];

// Creo i movies
$movie1 = new Movie($title1, $overview1, $vote1, $release_date1, $giorgio, $cast1);
$movie2 = new Movie($title2, $overview2, $vote2, $release_date2, $emanuele, $cast2);

var_dump($movie1);
var_dump($movie2);

?>