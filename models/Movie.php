<?php
// Classe per i Movie
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