<?php
function edad($dia, $mes, $anno){
    $dia_actual = date("d");
    $mes_actual = date("m");
    $anno_actual = date("Y");
    
    if ($dia <= $dia_actual  && $mes < $mes_actual ){
        $edad = $anno_actual - $anno;
        echo "Usted tiene " . $edad . " años";
    }
    elseif ($dia >= $dia_actual && $mes == $mes_actual){
        $edad = $anno_actual - $anno;
        echo "Usted tiene " . $edad . " años";
    }
    elseif ($dia >= $dia_actual && $mes >= $mes_actual){
        $edad = ($anno_actual - $anno) - 1 ;
        echo "Usted tiene " . $edad . " años";
    }
}

echo "Ingresa su fecha de nacimiento \n";
$dia = readline("Día: ");
$mes = readline("Mes: ");
$anno = readline("Año: ");
echo edad($dia, $mes, $anno);

