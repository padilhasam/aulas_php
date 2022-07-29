<?php

  interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);
  }
  abstract class Automovel implements Veiculo{
    public function acelerar($velocidade){
      echo "A velocidade de aceleração é: " . $velocidade . "Km/h <br>";
    }
    public function frenar($velocidade){
      echo "A velocidade de frenagem é: " . $velocidade . "Km/h <br>";
    }
    public function trocaMarcha($marcha){
      echo "A marcha atual é: " . $marcha . "<br>";
    }
  }

?>
