<?php

$cantidad = readline("Cantidad de palabras: ");
$palabras = [];
$i = 0;

while ($i < $cantidad){
    $i++;
    $palabra = readline("Palabra $i: ");
    array_push($palabras, $palabra);
}

$palabraLarga = "";
$palabraCorta = $palabras[0];
foreach ($palabras as $valor){

    if(strlen($palabraLarga) < strlen($valor)){
        $palabraLarga = $valor;
    }

    if(strlen($palabraCorta) > strlen($valor)){
        $palabraCorta = $valor;
    }
    
}

echo "La palabra mayor es $palabraLarga \n";
echo "La palabra menor es $palabraCorta";