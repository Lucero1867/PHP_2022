<?php

$cantidad = readline("Ingrese n: ");
$n_mayor = [];
$contador = 0;

while ($contador < $cantidad){
    $dato = readline("Ingrese número: ");
    $contador++;
    array_push($n_mayor, $dato);
   
}
echo "El mayor es " . max($n_mayor);

    

