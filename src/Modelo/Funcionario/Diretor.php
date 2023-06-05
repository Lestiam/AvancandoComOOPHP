<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel //o diretor É UM Funcionario. o implements obriga a gente a implementar o método da interface. Eu posso implementar varias interfaces ao mesmo tempo
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