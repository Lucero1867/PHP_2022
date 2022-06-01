<?php

$oracion = readline("Ingrese oracion: ");
$sin_espacios = str_replace(' ', '', $oracion);
$oracion_invertido = strrev($sin_espacios);

if ($sin_espacios== $oracion_invertido){
    echo "Es palindromo";
}
else{
    echo "No es palindromo";
} 

