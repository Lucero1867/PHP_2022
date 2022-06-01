<?php

$numero = readline("Ingrese un numero: ");
$numero_invertido = strrev($numero);

if ($numero_invertido === $numero){
    echo "$numero es palindromo";
}
else{
    echo "$numero no es palindromo";
}