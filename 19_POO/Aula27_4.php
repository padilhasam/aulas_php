<?php

  //Encapsulamento

  class Pessoa{
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
      echo $this -> nome . "<br>";
      echo $this -> idade . "<br>";
      echo $this -> senha;
    }
  }
  class Developer extends Pessoa {
    public function verDados(){
      echo get_class() . "<br>"
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
  echo $objeto -> nome . "<br>";
  //echo $objeto -> idade . "<br>";
  //echo $objeto -> senha . "<br>";
  echo "<br>";
  $objeto -> verDados();
?>
