<?php

$cantidad = readline("Ingrese el puntaje: ");
$combinaciones = 0;

if($cantidad > 12){
    echo "Hay 0 combinaciones para obtener $cantidad";
}else{
    for ($i = 1; $i <= 6; $i++){
        for ($x = 1; $x <= 6; $x++){
            if($i + $x == $cantidad){
                $combinaciones++;
            }
        }
    }
}

echo "Hay $combinaciones combinaciones para obtener $cantidad";