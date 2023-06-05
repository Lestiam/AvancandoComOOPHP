<?php
//uma interface nada mais é que uma classe abstrata com todos os seus métodos abstratos
////é o mesmo que dizer "eu assino esse contrato, eu sou obrigado a implementar os métodos daqui"
/// //é algo para chegar proximo a uma herança dupla
// a vantagem da interface é que qualquer um pode implementa-la, pois ela não herda de nada, seja funcionario, titular, etc. Neste caso, Diretor, Gerente e Titular implementam esta interface
//conceito da POO: sempre devemos programar para as inetrfaces e para as abstrações (como a classe Funcionario, Pessoa, etc) pois assim nosso sistema fica mais maleável
namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;

}