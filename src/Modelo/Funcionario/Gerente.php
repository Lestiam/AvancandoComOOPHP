<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario //o gerente É UM Funcionario
{
    public function calculaBonificacao(): float //sobreescreveu o método padrão do funcionario
    {
        return $this->recuperaSalario(); //a bonificação do gerente é o proprio salario
    }
}