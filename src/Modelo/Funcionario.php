<?php

namespace Alura\Banco\Modelo;

//funcionario é uma pessoa
class Funcionario extends Pessoa
{
    private String $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__constructor($nome,$cpf); //seria o "super" no java; É para chamar a classe mãe ou pai, parent são pais em ingles. Acesso metodos e atributos da classe base
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

}