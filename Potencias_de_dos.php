<?php

$numero = readline("Ingrese número: ");

function potencias($numero){
    for($i = 0; $i <= $numero; $i++){
       $potencia = pow(2, $i);
       echo $potencia . " ";
    }
}

echo potencias($numero);
?> 