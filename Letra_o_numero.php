<?php

function letra_o_numero($caracter){
    if (is_numeric($caracter)){
        echo "Es número.";
    }
    elseif (ctype_upper($caracter)){
        echo "Es letra mayúscula.";
    }
    elseif (ctype_lower($caracter)){
        echo "Es letra minuscula.";
    }
    else {
        echo "No es letra ni número.";
    }
}

$caracter = readline("Ingrese caracter: ");
echo letra_o_numero($caracter);
