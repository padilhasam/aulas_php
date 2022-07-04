<?php

  //Classe Abstrata

    //Interface - Dita o padrão das classes implementadas.
    interface Veiculo{
      public function acelerar($velocidade);
      public function frenar($velocidade);
      public function trocaMarcha($marcha);
    }

    //Classe Abstrata - dita as funcionalidades
    abstract class Automovel implements Veiculo{
      public function acelerar($velocidade){
        echo "O veículo acelerou até: " . $velocidade . "Km/h";
      }
      public function frenar($velocidade){
        echo "O veículo frenou até: " . $velocidade . "Km/h";
      }
      public function trocaMarcha($marcha){
        echo "O veículo engatou a marcha: " . $marcha;
      }
    }

    //Classe comum - Herda da classe abstrata
    class DelRey extends Automovel{
      public function empurrar(){

      }
    }
    $delrey = new DelRey;
    $delrey -> acelerar(200);

?>
