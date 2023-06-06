<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
//titular é uma pessoa

class Titular extends Pessoa implements Autenticavel
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf); //seria o "super" no java; É para chamar a classe mãe ou pai, parent são pais em ingles. Acesso metodos e atributos da classe base
        $this->validaNome($nome);
        $this->endereco = $endereco;
    }

    public function reuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd'; //senha do titular
    }
}
