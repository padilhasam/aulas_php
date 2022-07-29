<?php
    //Encapsulamento
    
    class Pessoa{
        
        //Atributos
        public $nome = "Jeferson Moisés Padilha";
        protected $idade = 35;
        private $senha = "123456";

        //Métodos
        public function verDados(){
            echo $this -> nome . "<br>";
            echo $this -> idade . "<br>";
            echo $this -> senha . "<br>";
        }
    }

    class Developer extends Pessoa{
        public function verDados(){
            echo get_class($this) . "<br>";
            echo $this -> nome . "<br>";
            echo $this -> idade . "<br>";
            echo $this -> senha . "<br>";
        }
    }
    $programador = new Developer();
    $programador -> verDados();
?>