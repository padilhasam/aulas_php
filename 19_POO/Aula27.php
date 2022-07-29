<?php
  //CRIANDO A PRIMEIRA CLASSE - POO

  class Pessoa{
    //Atributo da Classe Pessoa
    public $nome;
    public $idade;
    //Método da Classe Pessoa
    public function falar(){
      return "O meu nome é " . $this -> nome; //$this se refere a classe instanciada;
    }
  }

  $jeferson = new Pessoa(); // Criou um Objeto a partir da classe Pessoa
    $jeferson -> nome = "Jeferson"; //Acessou o atributo nome e atribui a ele um valor.
    echo $jeferson -> falar() . "<br>"; //Acessou e exibiu na tela o método falar, o qual concatena a string com valor recebido no atributo nome.
  $gabriel = new Pessoa();
    $gabriel -> nome = "Gabriel";

  /* Chamarei o atributo como $nome quando ele estiver dentro de uma classe, mas fora de algum método. Agora se eu quiser fazer referência deste atributo dentro de algum método, então utilizarei a palavra reservada Sthis -> nome

  ***** FUNCIONA PARA REFERENCIAR ATRIBUTOS E MÉTODOS DENTRO DE OUTROS MÉTODOS
  */

?>
