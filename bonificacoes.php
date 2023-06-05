<?php
//pilares da orientação a objeto: abstração, encapsulamento, herança e polimorfismo
//Este 4º princípio está diretamente ligado ao 3º (herança), pois através da herança conseguimos alcançar o polimorfismo.
//Polimorfismo é a capacidade de um objeto poder ser referenciado de várias formas (cuidado, polimorfismo não quer dizer
// que o objeto fica se transformando, muito pelo contrário, um objeto nasce de um tipo e morre daquele tipo, o que pode mudar é a maneira como nos referimos a ele).
//Com isso podemos, por exemplo, receber um Funcionario por parâmetro em uma função/método e passar um Gerente.
// Podemos nos referir à instância de Gerente de mais de uma forma, e isso nos pode ser útil em vários casos, como já vimos nesta aula.
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{EditorVideo, Gerente, Diretor, Desenvolvedor};

// alt + enter em cima do nome da classe para importa-la aqui

$umFuncionario = new Desenvolvedor(
    'Igor Teles',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel(); //aumenta o salario do desenvolvedor

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('132.951.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario); //adiciono a bonificação do igor
$controlador->adicionaBonificacao($umaFuncionaria); //adiciono a bonificação da Patricia
$controlador->adicionaBonificacao($umDiretor); //adiciono a bonificação da Ana
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal(); //pego o total das bonificações gastas