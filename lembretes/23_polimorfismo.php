<?php
    //Polimorfismo
    
    abstract class Animal{
        public function falar(){
            return "Som";
        }
        public function mover(){
            return "Andar";
        }
    }
    class Golfinho extends Animal{
        public function falar(){
            return "Ecolocalização";
        }
    }
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
            return "Voar e " . parent::mover();
        }
    }
    $labrador = new Cachorro();
    echo $labrador -> falar() . "<br>";

    $trincaFerro = new Passaro();
    echo $trincaFerro -> mover() . "<br>";
?>