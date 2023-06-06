<?php

namespace Alura\Banco\Modelo;//o namespace não é obrigatório, mas facilita a visualização. Sei que Pessoa esta dentro da pasta Modelo

abstract class Pessoa
{
    use AcessoPropriedades;

    protected String $nome; //consigo acessa-lo tanto na propria classe quanto nas filhas desta classe
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome, $cpf);
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

    final protected function validaNome(string $nomeTitular) //o final no mpétodo significa que podemos extender a classe Pessoa, mas não podemos sobrescrever este método
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}