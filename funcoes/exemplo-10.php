<?php

function test($callback){
    //Processo lento 
    $callback();
}

test(function(){
    echo "Processo Finalizado!";
})

?>