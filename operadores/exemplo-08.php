<?php

$resultado = (10 + 3) / 2;

echo $resultado;
echo "<br>";

// "E" &&
$resultadoB = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($resultadoB);
echo "<br>";

// "OU" ||
$resultadoC = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultadoC);
echo "<br>";


?>