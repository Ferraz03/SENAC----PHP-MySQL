<?php

function limpartela() 
{
    for($i = 0; $i <= 50; $i++) {
        echo PHP_EOL; // apenas diciona um linha em branco 
    }
}

function mensagem_inicial() 
{
    echo ' _________________________________________________' . PHP_EOL;
    echo '|                                                 |' . PHP_EOL;
    echo "|                   PHP e MySQL                   |" . PHP_EOL;
    echo "|  Bem vindo ao matriculador de alunos do SENAC:  |" . PHP_EOL;
    echo '|_________________________________________________|' . PHP_EOL;
}

function menu() 
{
    echo PHP_EOL;
    echo 'MENU - escolha uma das opções a seguir:' . PHP_EOL;
    echo '--------------------------------------------' . PHP_EOL;
    echo '[1] Adicionar novo aluno' . PHP_EOL;
    echo '[2] Imprimir listar dos alunos cadastrados' . PHP_EOL;
    echo '[3] Sair do programa' . PHP_EOL;
    echo PHP_EOL;
   
    return trim(fgets(STDIN));
}

function mensagem_generica() 
{
            echo PHP_EOL; 
            echo ":: Para cadastrar um novo aluno, informe os dados a seguir:" . PHP_EOL;
            echo '-----------------------------------------------------------' . PHP_EOL;
}