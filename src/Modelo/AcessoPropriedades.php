<?php

namespace Alura\Banco\Modelo;
 //uma Trait é basicamente uma forma do PHP pegar um código e injetá-lo na classe que eu quiser
trait AcessoPropriedades
{
    public function __get(string $nomeAtributo) //esse parametro é o nome do atributo que queremos acessar.
    {
        //rua-> recuperaRua - se eu receber rua quero executar o método recuperaRua
        //upper case first, pega a primeira letra e deixa ela maiuscula
        $metodo = 'recupera' . ucfirst($nomeAtributo); //chama o método e adiciona a palavra "recupera" na frente dele, vai traz o nome em letra maiuscula
        return $this->$metodo(); //basicamente este método retorna o meu get, chamando o que eu passar para ele

        //Nós implementamos o método mágico __get(), que é chamado sempre tentamos acessar um atributo/propriedade que não existe ou é privado.
        // Por meio dele, montamos uma lógica que coloca a primeira letra do nome desse atributo em letra maiúscula e adiciona a string recupera ao início,
        // resultando no padrão que utilizamos nos nossos métodos de acesso (getters). Com isso, conseguimos o nome do método, a partir do qual conseguimos recuperar o conteúdo do atributo.
        //Para que as IDE nos ajude com sugestões de autocompletar, incluímos na classe Endereco anotações informando a existência de
        // propriedades de leitura chamadas $cidade, $bairro, $rua e $numero.
    }
}