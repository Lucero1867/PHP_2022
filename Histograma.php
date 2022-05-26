<?php

$valores = readline("Ingrese varios valores, termine con cero: ");
$numero = "";
$contador_negativo = "";
$contador_positivo = "";

while ($numero != 0){
    $numero = readline(" ");
    if($numero < 0){
        $contador_negativo .= "*";
    }
    else{
        $contador_positivo .= "*";
    }
}

echo "Negativos: $contador_negativo\n";
echo "Positivos: $contador_positivo";
