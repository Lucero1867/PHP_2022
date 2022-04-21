<?php

function conteo_palabra($palabra1, $palabra2){
    $largo1 = strlen($palabra1);
    $largo2 = strlen($palabra2);

    if($largo1 < $largo2){
        $diferencia = $largo2 - $largo1;
        echo "La palabra " . $palabra2 . " tiene " . $diferencia . " letras mas que " . $palabra1;
    }
    elseif($largo1 > $largo2){
        $diferencia = $largo1 - $largo2;
        echo "La palabra " . $palabra1 . " tiene " . $diferencia . " letras mas que " . $palabra2;
    }
    else{ 
        echo "Las 2 palabras tienen el mismo largo. ";
    }
}

$palabra1 = readline("Palabra 1: ");
$palabra2 = readline("Palabra 2: ");

echo conteo_palabra($palabra1, $palabra2);