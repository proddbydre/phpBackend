<?php

require_once ("veicolo.php");

class automobile extends Veicolo
{
    private $modello;

    function __construct($marca, $anno, $modello){
        $this->marca = $marca;
        $this->anno = $anno;
        $this->modello = $modello;
    }


    function get_modello()
    {
        return $this->modello;
    }

    function set_modello($modello)
    {
        return $this->modello;
    }

    function stampa()
    {
        echo "{$this -> marca} {$this -> anno} {$this -> modello} <br>";
    }

}

?>