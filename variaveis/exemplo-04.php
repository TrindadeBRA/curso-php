<?php

$nome = (int)$_GET["a"];
$bloqueado = (bool)$_GET["b"];

// var_dump($nome);
// echo"<br>";
// var_dump($bloqueado);
// echo"<br>";

// http://localhost/curso-php/exemplo-04.php?a=123&b=0

//$ip = $_SERVER["REMOTE_ADDR"];
$scriptName = $_SERVER["SCRIPT_NAME"];
var_dump($scriptName);

?>