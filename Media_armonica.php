<?php

$cantidad = readline("Cuantos numeros: ");
$contador = 1;
$suma = 0;

while ($contador <= $cantidad){
    $numero = readline("n $contador = ");
    $suma += (1 /$numero);
    $contador++;
}

$media_armonica = $cantidad / $suma;
echo $media_armonica;