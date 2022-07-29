<?php

	date_default_timezone_set('America/Sao_Paulo'); //Fuso hrário do XAMPP está configurado pra EUROPE.

		//SWITCH CASE
	
	//Primeiro Caso

	$diadaSemana = date("w");
	$hora = date("H:i:s");
			
			//date("w")-> Devolve o número de dias da semana;
			//date("d")-> Devolve o número de dias do mês; 
			//date("z")-> devolve o dia do ano;

		print_r($diadaSemana);
			echo "<br>";

		print_r($hora);
			echo "<br>";
		
		var_dump($diadaSemana);
			echo "<br>";

	//Segundo Caso
	
	//$diasSemana = 7;
	
	switch($diadaSemana){
		
		case 0: 
		echo "Domingo <br>";
			break;
		
		case 1: 
		echo "Segunda-feira <br>";
			break;		
	
		case 2: 
		echo "Terça-feira <br>";
			break;
		
		case 3: 
		echo "Quarta-feira <br>";
			break;
		
		case 4: 
		echo "Quinta-feira <br>";
			break;
		
		case 5: 
		echo "Sexta-feira <br>";
			break;
		
		case 6: 
		echo "Sábado <br>";
			break;
			
		default:
			echo "Não existe!!";
			
	}	

?>