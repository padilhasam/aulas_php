<?php
	// TESTE DE GETS AND SETS

	class Carro{
		private	$modelo;
		private $marca;
		private $cor;
		private $ano;

		public function getModelo(){
			return $this -> modelo;
		}
		public function setModelo($modelo){
			$this -> modelo = $modelo;
		}

		public function getMarca(){
			return $this -> marca;
		}
		public function setMarca($marca){
			$this -> marca = $marca;
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

		public function exibe(){
			return array(
				"Modelo" => $this -> getModelo(),
				"Marca" => $this -> getMarca(),
				"Cor" => $this -> getCor(),
				"Ano" => $this -> getAno()
			);
		}
	}

	$opala = new Carro();
	$opala -> setModelo("Comodoro");
	$opala -> setMarca("GM");
	$opala -> setCor("Preto");
	$opala -> setAno("1981");

	echo $opala -> getModelo();
		echo "<br>";

	print_r($opala -> exibe());
?>