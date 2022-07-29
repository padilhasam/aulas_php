<?php
    //Classe Abstrata

    Interface Transporte{
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocaMarcha($marcha);
    }
    abstract class Veiculo implements Transporte{
        public function acelerar($velocidade){
            echo "A velocidade de aceleração é de: " . $velocidade . "Km/h <br>";
        }
        public function frenar($velocidade){
            echo "A velocidade de frenagem é de: " . $velocidade . "km/h <br>";
        }
        public function trocaMarcha($marcha){
            echo "a marcha atual é: " . $marcha . "<br>";
        }
    }
    class Carro extends Veiculo{
        public function empurrar(){
            echo "O carro quebrou!!";
        }
    }
    $palio = new Carro();
    $palio -> frenar(80);
?>