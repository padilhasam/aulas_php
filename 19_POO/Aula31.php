<?php

  //Polimorfismo
  
  abstract class Animal{
    public function falar(){
      return "Som";
    }
    public function mover(){
      return "Anda";
    }
  }
  // Uma classe abstrata não pode ser instanciada, ou seja ela te obriga a definir uma nova classe para extendê-la.
  class Cachorro extends Animal{
    public function falar(){
      return "Late";
    }
  }
  class Gato extends Animal{
    public function falar(){
      return "Mia";
    }
  }
  class Passaro extends Animal{
    public function falar(){
      return "Canta";
    }
    public function mover(){
      return "Voa e " . parent::mover(); //A palavra reservada parent serve para acessar a classe PAI, que neste caso é a classe Animal
    }
  }

  $dog = new Cachorro();
  echo $dog -> falar() . "<br>";
  echo $dog -> mover() . "<br>";

  echo "<hr>";

  $cat = new Gato();
  echo $cat -> falar() . "<br>";
  echo $cat -> mover() . "<br>";

  echo "<hr>";

  $bird = new Passaro();
  echo $bird -> falar() . "<br>";
  echo $bird -> mover() . "<br>"; //Retorna "Voa e" do método mover() da classe Pássaro e concatena com "Anda" do método mover() da classe Animal (Pai);

?>
