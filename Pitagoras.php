<?php

$cateto_a = readline("Ingrese cateto a: ");
$cateto_b = readline("Ingrese cateto b: ");

function pitagoras($cateto_a, $cateto_b){
    $hipotenusa = sqrt(pow($cateto_a, 2) + pow($cateto_b, 2));
    return $hipotenusa;
}

echo "La hipotenusa es: ". pitagoras($cateto_a, $cateto_b);

?> 