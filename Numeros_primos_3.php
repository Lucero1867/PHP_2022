<?php

$numero = readline("Primos menores que  : ");

function primo($numero){
    $posibleprimo = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $posibleprimo++;
        }
    }
    return $posibleprimo == 2;
}

for($i = 1; $i < $numero; $i++){
    if(primo($i)){
        echo $i . "\n";
    }
}