<?php

$suma = 0;
$contador = 0;

for($i = 2; $i <= 100000; $i *= 2){
    $fraccion = 1/$i;
    $contador++;
    $suma = $suma + $fraccion;
    
    echo "\n";
    echo "$contador\t";
    echo "$fraccion\t";
    echo "$suma\t";
}