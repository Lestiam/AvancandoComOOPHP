<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel//o gerente É UM Funcionario
{
    public function calculaBonificacao(): float //sobreescreveu o método padrão do funcionario
    {
        return $this->recuperaSalario(); //a bonificação do gerente é o proprio salario
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321'; //essa é a senha do gerente
    }
}