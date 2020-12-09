<?php

$anoNascimento = 1996;
$nome = "Lucas";
$sobrenome = "Trindade";
$nomeCompleto = $nome . " " . $sobrenome;

//Comentários
/*Comentarios*/

echo $nome;
echo "<br>";

// unset($nomeCompleto);
// echo $nomeCompleto;

if (isset($nomeCompleto)) {
    echo $nomeCompleto;
}

?>