<?php
header ("Content-Type: application/json");
require_once("alunno.php");

$alunni = [new Alunno("Dre", "JJ", 18),
           new Alunno("Mattia", "Sabi", 18),];

echo json_encode($alunni);

?>