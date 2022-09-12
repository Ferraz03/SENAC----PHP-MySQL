<?php

$nome = null; 
$sobrenome = null;

echo "Qual o seu nome ? ";
$nome = trim(fgets(STDIN)) ;
echo "Qual o seu sobrenome ? ";
$sobrenome = trim(fgets(STDIN)) ;

echo "Prazer em conhêce-lo,". PHP_EOL;
echo "$nome $sobrenome";
