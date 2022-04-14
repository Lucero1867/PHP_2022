<?php

$certamen1 = readline("Ingresa nota certamen 1: ");
$certamen2 = readline("Ingresa nota certamen 2: ");
$laboratorio = readline("Ingresa nota laboratorio: ");

$nc = ($certamen1 + $certamen2)/3;
$nf = ($nc * 0.7) + ($laboratorio * 0.3);

$certamen3 = ((60 - $nf) / 0.7) / 0.3;

echo $certamen3;
?> 