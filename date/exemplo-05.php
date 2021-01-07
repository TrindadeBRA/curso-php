<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$dt = new DateTime();

$periodo = new DateInterval("P15Y");

echo $dt->format("D, d/m/Y H:i");

$dt->add($periodo);
echo "<br>";
echo $dt->format("D, d/m/Y H:i");


?>