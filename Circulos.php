<?php

$radio = readline("Ingrese el radio: ");

function perimetro($radio){
    $perimetro = 2 * pi() * $radio;
    return round($perimetro, 2);
}

function area($radio){
    $area = pow($radio, 2) * pi();
    return round($area, 2);
}

echo "Perimetro: ". perimetro($radio) . "\n";
echo "Área: " . area($radio);

?> 