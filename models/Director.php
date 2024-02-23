<?php
// Classe per i Director
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