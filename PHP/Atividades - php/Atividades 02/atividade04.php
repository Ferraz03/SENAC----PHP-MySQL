<?php

$a = null;
$b = null;
$c = null;

echo "Escolha um número: ";
$a = trim(fgets(STDIN));
echo "Escolha um outro número: ";
$b = trim(fgets(STDIN)) ;
echo "Escolha um ultimo número: ";
$c = trim(fgets(STDIN));

$soma = $a + $b;

if ($soma == $c) {
    echo "O primeiro número + o segundo número é igual ao terceiro número";
} elseif ($soma < $c) {
    echo "O primeiro número + o segundo número é menor que o terceiro número";
} else {
    echo "O primeiro número + o segundo número é é maior que o terceiro número";
}