<?php

class Turma
{
    //Atributos
    private $alunos;
    private $nome;

    //Métodos
    public function setNome(string $parametro)
    {
        $this -> nome = $parametro;
    }

    public function getNome()
    {
        return $this -> nome;
    }
}
