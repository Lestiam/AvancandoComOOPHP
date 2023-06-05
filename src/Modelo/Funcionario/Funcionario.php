<?php

namespace Alura\Banco\Modelo\Funcionario;

//funcionario é uma pessoa
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa //como não faz mais sentido instanciar um "funcionario" ao inves de um cargo, esta classe se tornou abstrata
    //a classe funcionario é um conceito, por isso não consigo instanciar um método abstrato
    //sempre que tem a palavra abstract na classe, eu sei que esta relacionada a herança, algum classe ema lgum lugar precisa extender funcionario, para que tudo isso faça sentido, se não, tudo isso é inútil
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome,$cpf); //seria o "super" no java; É para chamar a classe mãe ou pai, parent são pais em ingles. Acesso metodos e atributos da classe base
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebAumento(float $valorAumento): void //método par dar aumento a algum funcionario
    {
        if ($valorAumento < 0 ) {
            echo "Auemeto deve ser positivo";
            return; //return para sair do metodo
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao():float; //toda vez que preciso criar um método que precisa ser obrigatorio, crio um método abstrato
    //todo funcionario vai ter esta implementação, mas não existe uma implementação padrão, eu não tenho na classe Funcionario uma implementação padrão, por isso este método é abstrato.
    //o contrario de abstrato é concreto
}