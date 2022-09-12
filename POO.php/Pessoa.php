<?php

class Pessoa 
{
    public $nome;
    public $cpf;
    public $rg; 
    public $dataNascimento;
    public $endereco;
  
    // Nome
    public function setNome(string $parametro)
    {
        $this -> nome = $parametro;
    }

    public function getNome()
    {
        return $this -> nome;
    }
    // Cpf
    public function setcpf(string $parametro)
    {
        $this -> cpf = $parametro;
    }

    public function getcpf()
    {
        return $this -> cpf;
    }
    // rg
    public function setrg(string $parametro)
    {
        $this -> rg = $parametro;
    }

    public function getrg()
    {
        return $this -> rg;
    }
    // Data de Nascimento
    public function setdataNascimento(string $parametro)
    {
        $this -> dataNascimento = $parametro;
    }

    public function getdataNascimento()
    {
        return $this -> dataNascimento;
    }
    // Endereço
    public function setendereco(string $parametro)
    {
        $this -> endereco = $parametro;
    }

    public function getendereco()
    {
        return $this -> endereco;
    }
}