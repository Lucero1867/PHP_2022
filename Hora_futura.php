<?php

$hora_actual = readline("Hora actual: ");
$cantidad_horas = readline("Cantidad de horas: ");

function hora_futura($hora_actual, $cantidad_horas){
    $dia = 24;
    $resultado = ($hora_actual + $cantidad_horas) % $dia;
    return $resultado;
}

echo "En " . $cantidad_horas . " horas, ". " el reloj marcara las ". hora_futura($hora_actual, $cantidad_horas);
?> 