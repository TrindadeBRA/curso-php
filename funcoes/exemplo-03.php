<?php

//Parametros obrigatorios, sempre a esquerda(os sem valores padroes)

function ola($nome = "Mundo", $periodo = "Bom dia"){
    return "Olá $nome! $periodo!<br>";
}

echo ola(null,"Boa tarde");
echo ola("Trindade");
echo ola("Pedro", "Boa noite");

?>