<?php
    //GET and SET - Orientação a Objetos
    
    class Carro{
        //Atributos
        public $marca;
        public $modelo;
        public $cor;
        public $ano;

        //Métodos
        public function getMarca(){
            return $this -> marca;
        }
        public function setMarca($marca){
            $this -> marca = $marca;
        }

        public function getModelo(){
            return $this -> modelo;
        }
        public function setModelo($modelo){
            $this -> modelo = $modelo;
        }
        
        public function getCor(){
            return $this -> cor;
        }
        public function setCor($cor){
            $this -> cor = $cor;
        }
        
        public function getAno(){
            return $this -> ano;
        }
        public function setAno($ano){
            $this -> ano = $ano;
        }

        function exibir(){
            return array(
                "Marca" => $this -> getMarca(),
                "Modelo" => $this -> getModelo(),
                "Cor" => $this -> getCor(),
                "Ano" => $this -> getAno()
            );
        }
    }

    //Instanciando Objeto

    $gol = new Carro();
    $gol -> setMarca("VolksWagen");
    $gol -> setModelo("GTI");
    $gol -> setCor("Preto");
    $gol -> setAno("2005");

    echo $gol -> getCor() . "<br>";
    print_r($gol -> exibir());
    
?>