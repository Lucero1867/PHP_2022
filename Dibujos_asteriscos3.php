<?php

$lado = readline("Lado: ");

function asteriscos($lado){
    for($i = 1; $i <= $lado; $i++){
        for($x = 1; $x <= $lado; $x++){
            echo "$x ";
        }
        echo "\n";
    }
}
echo asteriscos($lado);