<?php
  //Teste de interface e classe Abstrata
  interface Veiculo {
		public function acelerar($velocidade);
		public function frear($velocidade);
		public function trocarMarcha($marcha);
	}
	interface  Finalidade{
		public function tipoTransporte();
	}

	abstract class Automovel implements Veiculo, Finalidade {
		public function acelerar($velocidade) {
			echo "O veículo acelerou até " . $velocidade . " km/h";
		}
		public function frear($velocidade) {
			echo "O veículo freou até " . $velocidade . " km/h";
		}
		public function trocarMarcha($marcha) {
			echo "O veículo engatou a marcha " . $marcha;
		}
	}

  class DelRey extends Automovel {
		public function empurrar(){

		}
    public function tipoTransporte(){
      echo "Transporte Coletivo";
    } // Não da erro, Pois não precisa ser implementada apenas dentro da classe abstrata. Neste caso, foi implementada dentro da classe normal.
	}
  $carro = new DelRey();
  $carro->acelerar(90);
?>
