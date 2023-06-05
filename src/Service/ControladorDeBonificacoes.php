<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;
    public function adicionaBonificacao(Funcionario $funcionario) //neste caso apesar de eu estar passando um "Funcionario" como referencia, ao sobrescrever o método, eu posso passar um Diretor, um Dev, etc, pois eles são funciorios. Este é o conceito do Polimorfismo
        //a referencia pe do tipo Funcionario, mas o objeto pode ser do tipo Gerente, Diretor, etc
        //o Polimorfismo dita que uma referencia pode ter varios tipos e se comportar de forma diferente mas se parecer com a mesma forma
        //podemos acessar a mesma referencia de formas diferentes
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao(); //a classe vai pegar o totalBonificacoes que vai receber a bonificação desse funcionario
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes; //vai pegar o valor de todo o tatal de bonificações pago pela empresa
    }
}