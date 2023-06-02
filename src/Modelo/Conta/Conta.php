<?php

namespace Alura\Banco\Modelo\Conta;
//a separação de namespaces é com contrabarra. Namespaces é como se fossem pacotes
abstract class Conta //quando eu digo que uma classe é abstrata eu estou dizendo: olha eu tenho aqui definição, mas minha classe ainda não está completa, faltam coisas,
// voce precisa extender essa classe para completar ela (ela não é completa)
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }


    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float; //se eu tenho um método abstrato, todas as classes que extenderm dela, são obrigados a implementar
}
