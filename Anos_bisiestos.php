<?php

$anno = readline("Ingrese un año: ");

function ano_bisiesto($anno){
    if( $anno % 4 == 0){
        if($anno % 100 != 0 or $anno % 400 == 0){
            echo $anno . " es bisiesto";
        }else{
            echo $anno . " no es bisiesto";
        }
    }else {
        echo $anno . " no es bisiesto";
    }
}

echo ano_bisiesto($anno);