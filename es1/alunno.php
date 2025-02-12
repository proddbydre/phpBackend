<?php

    class Alunno implements JsonSerializable{
        private $nome;
        private $cognome;
        private $eta;
    

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
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
      /*
      function stampa()
      {
        echo "{$this -> nome} {$this -> cognome} {$this -> eta} <br>";
      }
      */

      public function jsonSerialize(): array {
        return [
          'nome'=> $this->nome,
          'cognome'=> $this->cognome,
          'eta'=> $this->eta
        ];
      }
  }
?>