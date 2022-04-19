<?php

$dividendo = readline("Dividendo: ");
$divisor = readline("Divisor: ");

function resto($dividendo, $divisor){
    $resto = $dividendo % $divisor;
    return $resto;
}

function cuociente($dividendo, $divisor){
    $cuociente = intval($dividendo / $divisor);
    return $cuociente;
}

if(resto($dividendo, $divisor) == 0){
    echo "La división es exacta. \n";
} else {
    echo "La división no es exacta. \n";
}

echo "Cuociente: ". cuociente($dividendo, $divisor). "\n";
echo "Resto: ". resto($dividendo, $divisor). "\n";
