<?php

$total = readline("n: ");

for($i = 1 ; $i <= $total; $i++){
    echo "$i ";

    $numero = $i;
    do{
        
        if($numero % 2 == 0){
            $numero = $numero / 2;
        }
        elseif($numero % 2 != 0){
            $numero = ($numero * 3) + 1;
        }
        echo "* ";                          
        
    }while($numero != 1);
    echo "\n";
}

   