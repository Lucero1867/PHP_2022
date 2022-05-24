<?php

$lado = readline("Lado: ");

function asteriscos($lado){
    echo "   ";
    for($i = 1; $i <= $lado; $i++){
        echo "$i";
    }
    echo "   ";
    echo "\n";
    echo "  ";
    for($x = 1; $x <= $lado + 2; $x++){
        echo "$x";
    }
    echo "  ";
    echo "\n";
    echo " ";
    for($y = 1; $y <= $lado + 4; $y++){
        echo "$y";
    }
    echo " ";
    echo "\n";
    for($p = 1; $p <= $lado + 6; $p++){
        echo "$p";
    }
    echo " ";
    echo "\n";
    echo " ";
    for($yy = 1; $yy <= $lado + 4; $yy++){
        echo "$yy";
    }
    echo " ";
    echo "\n";
    echo "  ";
    for($xx = 1; $xx <= $lado + 2; $xx++){
        echo "$xx";
    }
    echo "  ";
    echo "\n";
    echo "   ";
    for($i = 1; $i <= $lado; $i++){
        echo "$i";
    }
    echo "   ";
}


echo asteriscos($lado);

/* for($x = 1; $x <= $lado + 6; $x++){
    echo "$x";
}

for($x = 1; $x <= $lado + 6; $x++){
    echo "$x";
} */