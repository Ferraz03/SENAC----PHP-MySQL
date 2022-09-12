<?php

$a = 10;
$b = 20;

$a ^= $b ^= $a ^= $b;

echo "$a & $b";

/* 
$a = 10;
$b = 20;
$c = 0;
//10
$c = $a;

$a = $b;
$b = $c;
$c = $a;

echo 'Atividade 06:' . PHP_EOL;
echo "Valor de A : $a - Valor de B : $b"; 
*/