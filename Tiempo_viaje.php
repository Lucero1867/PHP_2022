<?php

$contador = 0;

do {
    $tramo = readline("Duración Tramo: ");
    $contador = $tramo + $contador;
} while ($tramo != 0);

$total_hora = $contador / 60; 
$hora = explode('.', $total_hora);
$minutos = $contador % 60;

echo "Tiempo total del viaje: " . $hora[0] . ":" . $minutos . " horas";
