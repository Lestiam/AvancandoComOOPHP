<?php

//titular é uma pessoa

class Titular extends Pessoa
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf); //seria o "super" no java; É para chamar a classe mãe ou pai, parent são pais em ingles. Acesso metodos e atributos da classe base
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;
    }

    public function reuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
