<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta //minha conta poupança esta completando a classe conta
{
    //isso se chama sobrescrita de métodos, na minha classe base é cobrada uma taxa de 5% (corrente) e na classe filha é cobrada uma taxa de 3%
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}

