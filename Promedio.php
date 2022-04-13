<?php

$nota1 = readline("Primera Nota: ");
$nota2 = readline("Segunda Nota: ");
$nota3 = readline("Tercera Nota: ");
$nota4 = readline("Cuarta Nota: ");

function promedio($nota1, $nota2, $nota3, $nota4){
    $promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    return $promedio;
}

echo "El promedio es: " . promedio($nota1, $nota2, $nota3, $nota4);

?> 