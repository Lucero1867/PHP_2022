<?php

$numero = readline("n: ");
$suma = 0;
$contador = 0;

for($i = 1; $i <= ($numero * 2) - 1; $i = $i + 2){
    $contador++;
    if($contador % 2 == 0){
        $suma = $suma - 1/$i;
    }
    else{
        $suma = $suma + 1/$i;
    }
}
$total = $suma * 4;
echo "Total: $total";



