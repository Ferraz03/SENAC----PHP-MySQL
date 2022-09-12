<?php

require_once ('./functions.php');

// A coordenação de tecnologia do SENAC solicitou à turma de PHP e MySQL um programa para cadastrar
// os dados dos alunos matriculados no curso. O programa deverá contar com as seguintes funcionalidades:

// 1. Exibir uma mensagem de boas vindas, apenas no início da execução;

// 2. Exibir um Menu principal que exibirá as seguintes opções para o usuário:

// a.) [1] Cadastrar um novo aluno;
// i. Um aluno deverá ter: nome_completo, matricula, telefone e nota_do_curso.
// b.) [2] Listar os alunos cadastrados com todos os seus respectivos dados;
// c.) [3] Sair do programa e exibir uma mensagem de despedida.
// d.) Se o número digitado não corresponder a nenhuma das opções, deverá exibir uma
// mensagem de erro e redirecionar o usuário para o menu novamente;

// 3. DICAS:
// a. Se preferir, utilize a função readline(“string”) para capturar as entradas digitadas no
// teclado;
// b. Utilize arrays guardar os valores e laços de repetição para garantir o fluxo do sistema;
// c. Para facilitar o desenvolvimento e manutenção, separe o código em partes menores
// utilizando os recursos include/require do PHP;
// d. Usem e abusem da criatividade: DIVIRTAM-SE!!!

$turma = []; // iniciando o array turma com 0 itens.
$aluno = []; // iniciando o array aluno com 0 itens.

$continuar_loop = true; // iniciando a variável que será testada no while para loop do programa.

//Limpando a tela
limpartela();

mensagem_inicial();

echo PHP_EOL;
readline(':: Aperte a tecla ENTER para acessar ao menu inicial.');

while($continuar_loop) { // enquanto a variável $continuar_loop for verdadeira, faça loop. Se false, saia do loop.

    //Limpando a tela
    limpartela();

    // Menu
    $opcao_usuario = menu();

    switch($opcao_usuario) {
        case 1 :

            //Limpando a tela
            limpartela();

            //iniciando o cadastro do aluno
            mensagem_generica();

            echo  PHP_EOL; // apenas adiciona um linha em branco.
            $nome_aluno = trim(readline("Informe o nome: "));
            $idade_aluno = trim(readline("Informe a idade: "));
            $matricula = trim(readline("Informe o número de matricula: "));
            $telefone = trim(readline("Imforme o número de telefone: "));

            $aluno['nome'] = $nome_aluno;
            $aluno['idade'] = $idade_aluno;
            $aluno['matricula'] = $matricula;
            $aluno['telefone'] = $telefone;

            //contando o tamanho do array turma antes de adicionar um novo aluno.
            $tamanho_da_turma_antes_da_adicao = count($turma);

            $turma[] = $aluno; // salvando o novo aluno no array.

            //contando o tamanho do array turma depois de adicionar um novo aluno.
            $tamanho_da_turma_depois_da_adicao = count($turma);

            echo PHP_EOL . ">> Aguarde, salvando dados";

            for($i = 0; $i <= 5; $i++) {
                sleep(1);
                echo ".";
            }

            echo PHP_EOL; // apenas adiciona um linha em branco.

            /** 
             * verifica se o tamanho do array da turma está maior após a inclusão de um novo aluno.
             * Se estiver maior, significa que um novo aluno foi adicionado ao array.
             * Se não, nenhum aluno adicionado.
            */
            if($tamanho_da_turma_antes_da_adicao < $tamanho_da_turma_depois_da_adicao) {
                echo PHP_EOL . ">> Aluno cadastrado com sucesso!:" . PHP_EOL;
            } else {
                echo PHP_EOL . ">> Nenhum novo aluno foi adicionado." . PHP_EOL; 
            }

            //Solicitando apertar a tecla ENTER para voltar ao início do loop.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            readline(':: Aperte a tecla ENTER para voltar ao menu inicial.');

            break;

        case 2 :

            //Limpando a tela
            limpartela();

            /**
             * Verifica se o array $turma está vazio, 
             * ou seja, se ele contém um número de elementos maior que zero:
             * Se Sim, imprime.
             * Se não, exibe a mensagem Array vazio.
             */
            if(count($turma) > 0) {

                $tamanho_da_turma = count($turma);
            
                echo PHP_EOL; // apenas adiciona um linha em branco.
                echo ":: A turma possui $tamanho_da_turma aluno(s) matriculados:" . PHP_EOL;
                echo '--------------------------------------------------------' . PHP_EOL;
            
                foreach($turma as $aluno) {
                    echo 'Nome:' . $aluno['nome'] . PHP_EOL;
                    echo 'Idade:' . $aluno['idade'] . PHP_EOL;
                    echo '------------------------------------------------------' . PHP_EOL;
                }
            
            } else {
                echo '>> Array vazio - Não há alunos cadastrados no sistema.' . PHP_EOL ;
            }
            
            //Solicitando apertar a tecla ENTER para voltar ao início do loop.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            readline(':: Aperte a tecla ENTER para voltar ao menu inicial.');

            break;

        case 3 :

            //Limpando a tela
            limpartela();
            
            $continuar_loop = false; // setando a variável que será testada no while para loop do programa para false.

            //exibe uma mensagem de finalização do programa.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            echo ":: Obrigado por utilizar o nosso sistema. Saindo em...";
            for($i = 5; $i >= 0; $i--) {
                echo "$i, ";
                sleep(1);
            }
            echo "...fui!!! :) " . PHP_EOL;
            
            break;

        default :
        
            //Limpando a tela
            limpartela();
        
            echo 'Opção inválida. Por favor, tente novamente.' . PHP_EOL;

            //Solicitando apertar a tecla ENTER para voltar ao início do loop.
            echo PHP_EOL; // apenas adiciona um linha em branco.
            readline(':: Aperte a tecla ENTER para voltar ao menu inicial.');
    }

    echo PHP_EOL; // apenas adiciona um linha em branco.
}
