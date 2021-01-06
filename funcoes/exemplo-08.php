<?php

function soma(int ...$valores):float{

    return array_sum($valores);
}

var_dump(soma(-1,1));
echo "<br>";

echo soma(20,100);
echo "<br>";

echo soma(20,100,1000);
echo "<br>";

echo soma(20,100,1000.50);
echo "<br>";


?>