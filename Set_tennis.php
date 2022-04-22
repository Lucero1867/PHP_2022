<?php

$a = readline("Juegos ganados por A: ");
$b = readline("Juegos ganados por B: ");

if ($a < 5 && $b > 6 || $b < 5 && $a > 6){
    echo "Invalido";
}
elseif (($a == 5 && $b == 7) || ($a == 6 && $b == 7) || ($b == 6 && $a < 5)) {
    echo "Gana B";
}
elseif (($b == 5 && $a == 7) || ($b == 6 && $a == 7) || ($a == 6 && $b < 5)){
    echo "Gana A";
}
else {
    echo "Aun no termina";
}

