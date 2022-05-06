<?php

$altura = readline("Altura: ");

function asteriscos($altura){
    for($i = 1; $i <= $altura; $i++){
        for($x = 1; $x <= $i; $x++){
            echo "$x ";
        }
        echo "\n";
    }
}
echo asteriscos($altura);