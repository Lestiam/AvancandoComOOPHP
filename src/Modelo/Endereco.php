<?php

namespace Alura\Banco\Modelo;
//para criar abaixo: /** + enter: isso se chama notations e servem para eu chamar esses atributos no meu executal (enderecos.php)

/**
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
final class Endereco
{
    use AcessoPropriedades; // se eu coloco o USE direto em uma classe, significa que eu estou usando uma Trait. Basicamente ele pega o código que está no Acesso Propriedades e cola ele aqui
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero; //nós não fazemos calculos com o nº de um endereço. A dica é, se vc não for fazer calculo, deixa como String para gastar menos memoria.

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }



//    public function alteraCidade($novaCidade): void{
//        $this->cidade = $novaCidade;
//    }
//    public function __set($nomeAtributo, $value): array
//    {
//        $metodo = 'altera' . ucfirst($nomeAtributo);
//        return $this->$metodo($value);
//    }
}