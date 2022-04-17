<?php

$certamen1 = readline("Ingresa nota certamen 1: ");
$certamen2 = readline("Ingresa nota certamen 2: ");
$laboratorio = readline("Ingresa nota laboratorio: ");

function nota($certamen1, $certamen2, $laboratorio){
    $certamen3 = ((60 - $laboratorio * 0.3) /0.7) * 3 - $certamen1 - $certamen2;
    return intval($certamen3);
}

echo "Necesito nota ". nota($certamen1, $certamen2, $laboratorio) . " en el certamen 3.";
?> 