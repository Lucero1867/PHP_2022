<?php

$resultado_a = 0;
$resultado_b = 0;
$resultado = 0;

while($resultado_a < 3 && $resultado_b < 3){
    $a = readline("A: ");
    $b = readline("B: ");

    if($a == "tijera" && $b == "papel" || $a == "papel" && $b == "piedra" || $a == "piedra" && $b == "tijera"){
        $resultado_a += 1;
        
    }
    elseif($b == "tijera" && $a == "papel" || $b == "papel" && $a == "piedra" || $b == "piedra" && $a == "tijera"){
        $resultado_b += 1;
    }
    
    echo  "$resultado_a - $resultado_b \n";
    
}

if($resultado_a == 3){
    echo "Gana A";
}
else{
    echo "Gana B";
}