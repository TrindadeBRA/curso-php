<?php

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "VW";
$carros[1][1] = "Polo";
$carros[1][2] = "Gol";
$carros[1][3] = "Golf";

print_r ($carros);

echo "<br><br>";

echo "Eu tenho um:" . $carros[1][1];

echo "<br><br>";

echo "Ultimo carro listado em GM é um: " . end($carros[0]);



?>