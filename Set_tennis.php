<?php

$a = readline("Juegos ganados por A: ");
$b = readline("Juegos ganados por B: ");

if ($a = 6 && ($a - $b) == 2){
    echo "Gana A";
}
elseif ($b = 6 && ($b - $a) == 2){
    echo "Gana B";
}
elseif ($b < 6 && $a < 6){
    echo "Aun no termina";
}
elseif ($a = 5 || $a = 6 && $b = 7){
    echo "Gana B";
}
elseif ($b = 5 || $b = 6 && $a = 7){
    echo "Gana A";
}
elseif ($a < 5 && $b > 6 || $b < 5 && $a > 6){
    echo "Invalido";
}
