<?php
 
 //Interface

  interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
  }

  class Civic implements Veiculo{
    public function acelerar($velocidade){
      echo "O veículo acelerou até: " . $velocidade . "km/h";
    }
    public function frenar($velocidade){
      echo "O veículo frenou até: " . $velocidade . "km/h";
    }
    public function trocarMarcha($marcha){
      echo "O veículo engatou a marcha: " . $marcha;
    }
  }
  
  $carro = new Civic;
  $carro -> trocarMarcha(1);

  /* A INTERFACE obriga a classe que a implementa a seguir o padrão da mesma. 
  Assim, caso a classe não apresente os métodos, conforme estabelecido pela INTERFACE, o algoritmo apresentará um erro. */ 

?>
