<?php

namespace Alura\Banco\Modelo;//o namespace não é obrigatório, mas facilita a visualização. Sei que Pessoa esta dentro da pasta Modelo

abstract class Pessoa
{

    protected String $nome; //consigo acessa-lo tanto na propria classe quanto nas filhas desta classe
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome, $cpf);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}