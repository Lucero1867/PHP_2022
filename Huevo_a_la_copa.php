<?php

$temperatura = readline("Ingrese temperatura del huevo: ");

function huevo_a_la_copa($temperatura){
    $masa = 47;
    $p = 1.038;
    $c = 3.7;
    $k = 5.4 * pow(10, -3);
    $t = (pow($masa, 2/3) * $c * pow($p, 1/3)) / ($k * pow(pi(), 2) * pow(4 * pi()/3, 2/3));
    $ln = log(0.76 * ($temperatura - 100) / (70 - 100));
    return ($resultado_t = $t * $ln);
}

$huevo_en_minuto = round(huevo_a_la_copa($temperatura), 2) / 60;

echo "Se demora " . round(huevo_a_la_copa($temperatura), 2) . " segundos, huevo a la copa. \n" ;
echo "Se demora " . round($huevo_en_minuto, 2) . " minutos, huevo a la copa." ;


?> 