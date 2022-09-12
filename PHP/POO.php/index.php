<?php

require_once("./Pessoa.php");


$pessoa1 = new Pessoa();
$pessoa1 -> setNome("Breno Ferraz");
$pessoa1 -> setCpf("012.564.875.99");
$pessoa1 -> setRg("8.564.848");
$pessoa1 -> setDataNascimento("5/11/2000");
$pessoa1 -> setEndereco("Rua Dom Vital, 234");


$pessoa2 = new Pessoa();
$pessoa2 -> setNome("João Pedro");
$pessoa2 -> setCpf("841.974.333.47");
$pessoa2 -> setRg("2.741.654");
$pessoa2 -> setDataNascimento("08/09/2022");
$pessoa2 -> setEndereco("Rua Dom Marcos, 99");

$listaDePessoas = [$pessoa1,$pessoa2];

foreach ($listaDePessoas as $pessoa) {
    echo "------------------------------------" . PHP_EOL;
}



















// $turma_php = new Turma();
// $turma_php -> setNome("Só PHP");


// $turma_sql = new Turma();
// $turma_sql -> setNome("Só MySQL");

// $turma_html = new Turma();
// $turma_html -> setNome("Só HTML");

// echo $turma_php -> getNome() . PHP_EOL;
// echo $turma_sql -> getNome() . PHP_EOL;
// echo $turma_html -> getNome();