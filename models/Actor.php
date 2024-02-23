<?php
// Classe per gli Actor
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

    public function getFullName(){
        return $this->first_name . ' ' . $this->last_name;
    }
}