<?php

    require 'indirizzo.php';
    require 'voto.php';

    class Alunno implements JsonSerializable{
        private $nome;
        private $cognome;
        private $eta;
        private $voti;
        private $indirizzo;
    

    function __construct($nome, $cognome, $eta, $via, $civico, $citta, $cap){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->indirizzo = new Indirizzo($via, $civico, $citta, $cap);
        $this->voti = array();
      }

      function get_nome() {
        return $this->nome;
      }
      function get_cognome() {
        return $this->cognome;
      }
      function get_eta() {
        return $this->eta;
      }

      function set_nome($nome) {
        return $this->nome;
      }
      function set_cognome($cognome) {
        return $this->cognome;
      }
      function set_eta($eta) {
        return $this->eta;
      }

      public function jsonSerialize(): array {
        return [
          'nome'=> $this->nome,
          'cognome'=> $this->cognome,
          'eta'=> $this->eta,
          'voti'=> $this->voti,
          'indirizzo'=> $this -> indirizzo
        ];
      }

      public function addVoto($voto, $giudizio, $materia){
        array_push($this->voti, new Voto($voto, $giudizio, $materia));
      }
  }
?>