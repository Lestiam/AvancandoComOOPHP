<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro Qualquer', 'Minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'centro', 'Uma rua aí', '50');


//echo $umEndereco->cidade . PHP_EOL; //esse "cidade" só apareceu aqui por causa do meu notation que esta na classe "Endereco.php, linha 5"
//echo $umEndereco->rua;
//exit();

//$umEndereco->cidade = "Nova Cidade";
//echo $umEndereco;
//exit();
echo $umEndereco . PHP_EOL;
echo $outroEndereco;