<?php

require_once("cane.php");
require_once("cavallo.php");

$cjen = new Cane();
$kali = new Cavallo();

echo $cjen -> verso();
"<br>";
echo $kali -> verso();

?>