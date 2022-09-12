<?php 

$comprimento = null;
$largura = null;
$altura = null;



echo "Qual o valor do commprimento ? ";
$comprimento = trim(fgets(STDIN));
echo "Qual o valor da largura ? ";
$largura = trim(fgets(STDIN));
echo "Qual o valor da altura ? ";
$altura = trim(fgets(STDIN)) ;

$volume = $comprimento * $largura * $altura;

echo "O volume dessa caixa retangular é $volume!";