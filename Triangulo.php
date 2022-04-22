<?php

$a = readline("Ingrese a: ");
$b = readline("Ingrese b: ");
$c = readline("Ingrese c: ");

if ((($a + $b) > $c) && (($b + $c) > $a) && (($c + $a) > $b)){
    if(($a == $b) && ($a == $c)){
        echo "El triangulo es equilatero";
    }
    elseif (($a != $b) && ($b != $c) && ($c != $a)){
        echo "El triangulo es escaleno";

    }else{
        echo "El triangulo es isósceles";
    }
} 
else{
    echo "No es un triangulo valido.";
}