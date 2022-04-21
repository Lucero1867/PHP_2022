<?php
function orden_ascendente($numero1, $numero2){
    $numeros = [$numero1, $numero2];
    sort($numeros);
    
    foreach ($numeros as $numero){
        echo $numero . "\n";
    }
}

$numero1 = readline("Ingrese numero: ");
$numero2 = readline("Ingrese numero: ");



echo orden_ascendente($numero1, $numero2);