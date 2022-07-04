<?php
  // Aula de Atributos e Métodos

  class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
      return $this -> modelo;
    }
    public function setModelo($modelo){
      $this -> modelo = $modelo;
    }

    public function getMotor():float{
      return $this -> motor;
    }
    public function setMotor($motor){
      $this -> motor = $motor;
    }

    public function getAno():int{
      return $this -> ano;
    }//Cast Para o Tipo INTEIRO.
    public function setAno($ano){
      $this -> ano = $ano;
    }

      public function exibir(){
        return array(
          "Modelo" => $this -> getModelo(),
          "Motor" => $this -> getMotor(),
          "Ano" => $this -> getAno()
        );
      }
  } // Fecha a classe

    $gol = new Carro(); //Instanciando a Classe

    $gol -> setModelo("GOL GT"); //Acessando o método da classe instanciada
    $gol -> setMotor("1.6");
    $gol -> setAno("1986");

    echo $gol -> getModelo() . "<br>";
    var_dump($gol -> getMotor()) . "<br>";
    print_r($gol -> exibir());
?>
