<?php

use Alura\Banco\Modelo\{Conta\Conta, Conta\ContaCorrente, Conta\ContaPoupanca, Conta\Titular, CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Igor Teles', new Endereco('Belo Horizonte','bairro teste','lá','37')
    )
);


$conta->deposita(500);
$conta->saca(100); //com tava de 5%

echo $conta->recuperaSaldo();