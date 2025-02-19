<?php

class Indirizzo implements JsonSerializable
{
    private $via; 
    private $civico;
    private $citta;
    private $cap;

    public function __construct($via, $civico, $citta, $cap) {
        $this->via = $via;
        $this->civico = $civico;
        $this->citta = $citta;
        $this->cap = $cap;
    }

    public function jsonSerialize(){
        return [
            'via'=> $this->via,
            'civico'=> $this->civico,
            'citta'=> $this->citta,
            'cap'=> $this->cap,
        ];
    }

    function get_via() {
        return $this->via;
    }
    function get_civico(){
        return $this->civico;
    }
    function get_citta(){
        return $this->citta;
    }
    function get_cap(){
        return $this->cap;
    }

    function set_via($via){
        return $this->via;
    }
    function set_civico($civico){
        return $this->civico;
    }
    function set_citta($citta){
        return $this->citta;
    }
    function set_cap($cap){
        return $this->cap;
    }
}

?>