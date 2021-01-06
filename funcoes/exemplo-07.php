<?php

//todos os parametros vao ser int
function soma(int ...$valores){

    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";

echo soma(20,100);
echo "<br>";

echo soma(20,100,1000);
echo "<br>";

echo soma(20,100,1000.50);
echo "<br>";
?>