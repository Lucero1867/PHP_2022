<?php

$numero = readline("Cuantos primos : ");

function primo($numero){
    $posibleprimo = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $posibleprimo++;
        }
    }
    return $posibleprimo == 2;
}

$contador = 0;
$i = 1;
do {
   
    if(primo(++$i)){
        $contador++;
        echo $i . "\n";
    }
    
} while($contador < $numero);