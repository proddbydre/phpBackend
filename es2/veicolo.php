<?php

class Veicolo
{
    private $marca;
    private $anno;

    function __construct($marca, $anno) {
        $this->nome = $marca;
        $this->cognome = $anno;
    }

    function get_marca() {
        return $this->marca;
    }
    function get_anno() {
        return $this->anno;
    }

    function set_marca($marca) {
        return $this->marca;
    }
    function set_anno($anno) {
        return $this->anno;
    }
}

?>