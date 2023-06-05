<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario //o desenvolvedor É UM Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebAumento($this->recuperaSalario() * 0.75); //o aumento do desenvolvedor foi de 75% do salario
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}