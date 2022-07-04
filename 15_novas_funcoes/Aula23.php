<?php
		//Novidades Funções PHP 7.0
	
	//Função para somar N numeros inteiros.	
	
	function soma(int ... $valores){
		return array_sum($valores); //Função para somar N valores.
	}
		echo soma(15,30,15,18,29)."<br>";
		echo soma(25,33)."<br>";
		echo soma(30,10,10);

/*OBS: A reticências serve para informar ao computador que serão adicionados N valores para cálculo. 
Neste caso valores inteiros*/	

?>