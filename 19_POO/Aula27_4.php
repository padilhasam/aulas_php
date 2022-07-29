<?php

  //Encapsulamento

  class Pessoa{
    public $nome = "Rasmus Lerdorf"; //Atributo público - pode ser visto por todos;
    protected $idade = 48; //Atributo protegido - pode ser visto pela propria classe e pela classe filha(extendida);
    private $senha = "123456"; //Atributo Privado - Só pode ser visto pela própria classe;

    public function verDados(){
      echo $this -> nome . "<br>";
      echo $this -> idade . "<br>";
      echo $this -> senha;
    }
  }//Fim da Classe

  class Developer extends Pessoa {
    public function verDados(){
      echo get_class($this) . "<br>"; //Mostra de qual classe o método verDados está sendo executado. Neste caso verDados está sendo executado da classe Developer;
      echo $this -> nome . "<br>";
      echo $this -> idade . "<br>";
      echo $this -> senha;
    }
  }
  /*
    Uma classe EXTENDS (Extendida), herda tudo da classe principal, exceto métodos e atributos PRIVATE (Privados).
  */

//Instanciando uma get_declared_classes
$objeto = new Developer();
  $objeto -> verDados();

?>
