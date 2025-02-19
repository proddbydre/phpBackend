<?php

class Voto implements JsonSerializable
{
    private $voto; 
    private $giudizio;
    private $materia;

    public function __construct($voto, $giudizio, $materia){
        $this->voto = $voto;
        $this->giudizio = $giudizio;
        $this->materia = $materia;
    }

    public function jsonSerialize(){
        return [
            'voto'=> $this->voto,
            'giudizio'=> $this->giudizio,
            'materia'=> $this->materia
        ];
    }

    function get_voto() {
        return $this->voto;
    }
    function get_giudizio() {
        return $this->giudizio;
    }
    function get_materia() {
        return $this->materia;
    }

    function set_voto($voto) {
        return $this->voto;
    }
    function set_giudizio($giudizio) {
        return $this->giudizio;
    }
    function set_materia($materia) {
        return $this->materia;
    }
}

?>