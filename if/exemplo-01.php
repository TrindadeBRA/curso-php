<?php

$qualSuaIdade = 100;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca){
    echo "É uma Criança";
} else if ($qualSuaIdade < $idadeMaior){
    echo "É Adolecente";
} elseif ($qualSuaIdade < $idadeMelhor){
    echo "É Adulto";
} else {
    echo "É Idoso";
}

echo "<br>";

// ? = então
// : = else
echo ($qualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de Idade";

?>