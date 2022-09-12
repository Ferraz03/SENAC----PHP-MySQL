<?php

/*
1. Armazenar um número secreto
2. Pedir ao usuário que digite um número no teclado.
3. Comparar SE o número dado é igual ao número secreto.
* True => se igual, exibir a mensagem de sucesso e sair do programa.
* False => Senão, exibir a mensagem "Você errou". 
4. Enquanto não acertar, repetir o processo.  
*/
// fgets(stdin) é a a forma de input no PHP 

$ns = 3;
$teclado = null;

while ($teclado != $ns) {
    echo "Digite um número:";
    $teclado = fgets(STDIN);

    if ($teclado == $ns) {
        echo "Você acertou!" . PHP_EOL;
    } else {
        echo "Você errou!!!" . PHP_EOL;
    }
}
