<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario //o diretor É UM Funcionario
{
    public function calculaBonificacao(): float //sobreescreveu o método padrão do funcionario
    {
        return $this->recuperaSalario() * 2; //a bonificação do diretor é 2x o proprio salario
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234'; //se a senha for 1234, o diretor pode autenticar
    }
}