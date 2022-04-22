<?php

$peso = readline("Ingrese peso (kg): ");
$estatura = readline("Ingrese estatura (mt): ");
$edad = readline("Ingrese edad: ");

function imc($peso, $estatura){
    $imc = ($peso / pow($estatura, 2));
    return $imc;
}

if ((imc($peso, $estatura) < 22) && ($edad < 45)){
    echo "Riesgo cardiovascular bajo.";
}
elseif((imc($peso, $estatura) < 22) && ($edad >= 45)){
    echo "Riesgo cardiovascular medio.";
}
elseif((imc($peso, $estatura) >= 22) && ($edad < 45)){
    echo "Riesgo cardiovascular medio.";
}
elseif((imc($peso, $estatura) >= 22) && ($edad >= 45)){
    echo "Riesgo cardiovascular alto.";
}