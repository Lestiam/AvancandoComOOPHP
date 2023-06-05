<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{

    public function calculaBonificacao(): float //alt + enter para implementar o método automaticamente
    {
        return 600; //ele recebe 600 reais de bonificação
    }
}