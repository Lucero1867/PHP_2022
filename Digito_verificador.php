<?php

$numero = strrev(readline("Ingrese rol: "));
$rol = str_split($numero);
$cantidad = count($rol);
$contador = 2;

while($contador <= $cantidad){
    foreach($rol as $valor){
        echo $valor * $contador. "\n";
    }
}



