<?php

$numero = readline("Ingrese n: ");
$s1 = suma($numero);
$s2 = ($numero * ($numero + 1)) / 2;

function suma($numero){
    $contador = 0;
    for($i = 1; $i <= $numero; $i++){
        $contador += $i;
    }
    return $contador;
}

echo  "S1: $s1 \n";
echo  "S2: $s2  \n";

if ($s1 == $s2){
    echo "Son iguales";
}
else{
    echo "Son diferentes";
}


