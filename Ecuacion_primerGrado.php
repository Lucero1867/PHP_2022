<?php

$a = readline("Ingrese a: ");
$b = readline("Ingrese b: ");

$ecuacion = (0 - $b) / $a;

if( $ecuacion == 0 || $a == 0 && $b == 0){
    echo "Sin solucion";
}else{
    echo "Solución única: $ecuacion";
}