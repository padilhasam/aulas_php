<?php
    //INTERFACE

    interface Transporte{
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocaMarcha($marcha);
    }

    class Carro implements Transporte{
        private $velocidade;

        public function acelerar($velocidade){
            echo "A velocidade de aceleração é: " . $velocidade . "Km/h <br>";
        }
        public function frenar($velocidade){
            echo "A velocidade de frenagem é: " . $velocidade . "Km/h <br>";
        }
        public function trocaMarcha($marcha){
            echo "A marcha usada é: " . $marcha . "Km/h <br>";
        }
    }

    $palio = new Carro();
    $palio -> acelerar(50);
?>