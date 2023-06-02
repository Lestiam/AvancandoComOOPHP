<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    //isso se chama sobrescrita de métodos, na minha classe base é cobrada uma taxa de 5% (corrente) e na classe filha é cobrada uma taxa de 3%
    public function saca(float $valorASacar): void //se eu escrever o nome do método (saca nesse caso, pq é herdado da classe Conta) e der Enter, ele ja cria essa função
    {

        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}