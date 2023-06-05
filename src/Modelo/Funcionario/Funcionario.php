<?php

namespace Alura\Banco\Modelo\Funcionario;

//funcionario é uma pessoa
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa //como não faz mais sentido instanciar um "funcionario" ao inves de um cargo, esta classe se tornou abstrata
{
    private String $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome,$cpf); //seria o "super" no java; É para chamar a classe mãe ou pai, parent são pais em ingles. Acesso metodos e atributos da classe base
        $this->cargo = $cargo;
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

    public function calculaBonificacao():float //se eu não sobscrever o método em Diretor, Gerente, etc, este método continua válido
    {
        return $this->salario * 0.1;
    }

}