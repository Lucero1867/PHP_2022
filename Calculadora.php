<?php

function calculadora($operando1, $operador, $operando2 ){
    $suma = "+" ;
    $resta = "-" ;
    $division = "/" ;
    $multiplicacion = "*" ;
    $exponente = "**" ;
    
    if ($operador == $suma){
        $ope_suma = $operando1 + $operando2;
        echo $operando1 . " + " . $operando2 . " = " . $ope_suma;
    }
    elseif ($operador == $resta){
        $ope_resta = $operando1 - $operando2;
        echo $operando1 . " - " . $operando2 . " = " . $ope_resta;
    }
    elseif ($operador == $division){
        $ope_division = $operando1 / $operando2;
        echo $operando1 . " / " . $operando2 . " = " . $ope_division;
    }
    elseif ($operador == $multiplicacion){
        $ope_multiplicacion = $operando1 / $operando2;
        echo $operando1 . " * " . $operando2 . " = " . $ope_multiplicacion;
    }
    elseif ($operador == $exponente){
        $ope_exponente = pow($operando1, $operando2);
        echo $operando1 . " ** " . $operando2 . " = " . $ope_exponente;
    }
}

$operando1 = readline("Operando: ");
$operador = readline("Operador: ");
$operando2 = readline("Operando: ");

echo calculadora($operando1, $operador, $operando2 );