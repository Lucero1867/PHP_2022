<?php

$numero = readline("n: ");

echo "$numero ";

do{
    
    if($numero % 2 == 0){
        $numero = $numero / 2;
    }
    else{
        $numero = ($numero * 3) + 1;
    }

    echo "$numero ";
} while ($numero != 1);
   