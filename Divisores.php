<?php

$numero = readline("Ingrese numero: ");

function divisores($numero){
    for($i = 1; $i <= $numero; $i++){
        $divisor = $numero % $i;
        if($divisor == 0){
            echo $i . " ";
        }
    }
}

echo divisores($numero);