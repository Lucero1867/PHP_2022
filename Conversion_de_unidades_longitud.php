<?php

$cm = readline("Ingrese lonitud: ");

function conversion_longitud($cm){
    $pulgada = $cm / 2.54;
    return round($pulgada, 4);
}

echo $cm . "cm = " . conversion_longitud($cm). " in";
?> 