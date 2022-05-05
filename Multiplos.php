<?php

$multiplo = readline("Ingrese un número: ");

function multiplos($multiplo){
    for($i = 1; $i <= 10; $i++){
        $resultado = $multiplo * $i;
        echo $multiplo . " x " . $i . " = " . $resultado . "\n";
    }
}

echo multiplos($multiplo);
?> 