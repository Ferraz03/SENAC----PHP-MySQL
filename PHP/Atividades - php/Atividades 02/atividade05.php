<?php

$numl = null;

echo "Digite um múmero: ";
$numl = trim(fgets(STDIN));

if ($numl % 2 == 0) {
    echo "O número é par";
}  else {
    echo "O número é ímpar";
}

/* No PHP, como pode haver em várias outras linguagens, 
uma forma de saber se um número é par ou ímpar, 
pode se usar o operador %, que significar MOD, 
para calcular o "resto" da divisão do valor. 
Se o resto do número tem valor zero, então sabemos que o resultado é par */