<?php


//Include - Tenta funcionar mesmo com problema, mesmo nao existindo.
//include "exemplo-01.php";

//Require - Obrigado o arquivo funcionar, e existir.
//require "exemplo-01.php";

//Once - Traga só uma vez, se ja tiver trago, aborta.
require_once "exemplo-01.php";
require_once "exemplo-01.php";
require_once "exemplo-01.php";
require_once "exemplo-01.php";

$resultado = somar(100,20);
echo $resultado;

?>