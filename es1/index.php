<?php
require_once("alunno.php");


$alunni = array();

$alunni[0] = new Alunno("Dre", "JJ", "18");
$alunni[1] = new Alunno("Mattia", "Sabi", "18");

$alunni[0] -> stampa();
$alunni[1] -> stampa();

?>