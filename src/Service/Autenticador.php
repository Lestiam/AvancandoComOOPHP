<?php

namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void //a senha recebe um diretor e uma senha, devolve se teve sucesso ou não
    {
        if ($autenticavel->podeAutenticar($senha)) { // pego meu diretor e verifico se ele pode autenticar come esta senha
            echo "OK. Usuário logado no sistema";
        } else {
            echo "Ops. Senha incorreta";
        }
    }
}