<?php
	
	//TESTANDO UMA CLASSE NO PHP

	date_default_timezone_set('America/Sao_Paulo'); //Atualiza o fuso horário do servidor local.

	class Pessoa{

		public $nome;
		public $idade;

		public function falar(){

			return "Meu nome é: " . $this -> nome . "<br> Tenho " . $this -> idade . " anos";

		}
	}

	$jeferson = new Pessoa();
	$jeferson -> nome = "Jeferson Moisés Padilha";
	$jeferson -> idade = 35;

	echo $jeferson -> falar() . "<br>";

	$hora = time();
	$data = date("d/m/Y");

		echo $hora . "<br>";
		echo $data . "<br>";


	$data_nascimento = strtotime("1986-10-24");
		echo $data_nascimento . "<br>";

	$aniversario = date("d/m/Y", $data_nascimento);
		echo $aniversario;
?>
