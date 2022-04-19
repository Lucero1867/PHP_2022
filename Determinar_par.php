<?php

$numero = readline("Ingrese un número: ");

function par($numero){
    $resto = $numero % 2;
    return $resto;
}

if (par($numero) == 0){
    echo "Sú número es par.";
} else {
    echo "Sú número es impar.";
}