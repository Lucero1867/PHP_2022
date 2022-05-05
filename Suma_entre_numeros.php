<?php

$numero1 = readline("Ingrese número: ");
$numero2 = readline("Ingrese número: ");

function suma($numero1, $numero2){
    $contador = 0;
    for($i = $numero1 + 1; $i < $numero2; $i++){
       $contador = $i + $contador;
    }
    echo $contador;
}

echo suma($numero1, $numero2);
?> 