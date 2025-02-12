<?php

require_once("automobile.php");

$mercedes =  new Automobile("Mercedes-Benz", "2023", "C220d");
$ford = new Automobile("Ford", "2010","KA");

$mercedes -> stampa();
$ford -> stampa();

?>