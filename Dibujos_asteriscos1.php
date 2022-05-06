<?php

$altura = readline("Altura: ");
$ancho = readline("Ancho: ");

function asteriscos($altura, $ancho){
    for($i = 1; $i <= $altura; $i++){
        for($x = 1; $x <= $ancho; $x++){
            echo "*";
        }
        echo "\n";
    }
}
echo asteriscos($altura, $ancho);