<?php

namespace Alura\Banco\Modelo; //Alura\Banco é o nome raiz do meu nasmespace

final class CPF //se eu digo que uma classe é final, quer dizer que ninguem mais extende dela, serve pq por exemplo, podemos acabar tirando a validação caso extendamos de CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
