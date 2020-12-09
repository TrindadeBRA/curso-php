<?php

$nome = "Lucas";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "Pietro";
    echo $nome." agora no teste2";
}

teste();
echo "<br>";
teste2();

?>