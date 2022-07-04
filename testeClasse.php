<?php
	//Brincando com as Classe - POO

	class Pessoa{

		public $nome; //Atributo 1
		public $idade; //Atributo 2

		public function falar(){
			return "meu nome é: " . $this -> nome;
		}

	}

		$jeferson = new Pessoa();
		$jeferson -> nome = "Jeferson";
			echo $jeferson -> falar(); 
?>