<?php
header ("Content-Type: application/json");
require_once("alunno.php");

$alunni = [new Alunno("Dre", "JJ", 18, "Via della Stazione", 27, "Lastra a Signa", 50055),
           new Alunno("Mattia", "Sabi", 18, "Via della Resistenza", 312, "Scandicci", 50018),];


$alunni[0]->addVoto(10,"wallahi", "Sistemi e Reti");
$alunni[0]->addVoto(8,"dubai chocolate", "tpsit");   
$alunni[0]->addVoto(2,"adinai devi shtudiare", "Informatica");   

$alunni[1]->addVoto(6, "Studio essenziale e poco approfondito", "Scienze della Terra");   
$alunni[1]->addVoto(9, "Filosofia", "Matematica");   
$alunni[1]->addVoto(6, "yea", "chimica");   

echo json_encode($alunni);

?>