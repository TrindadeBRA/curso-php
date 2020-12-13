<?php

$total = 250;
$desconto = 0.5;

do {
    $total *= $desconto;

} while ($total >= 50);

echo $total;


?>