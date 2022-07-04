<?php

			//OPERADORES DO PHP
	
	//OPERADORES DE ATRIBUIÇÃO
	$nome = "Hcode"; // O Igual é um operador de atribuição
		echo "$nome <br>";
		
	//OPERADOR DE CONCATENAÇÃO
	$sobrenome = "Treinamentos";
	$nomeCompleto = $nome." ".$sobrenome; // O ponto é o operador de concatenação
		echo "$nomeCompleto <br>";
		
	//OPERADOR COMPOSTO	
	$texto = " alguma coisa";
	$nome .= $texto; // A variável nome já possui um valor atribuido neste caso (Hcode), mas está recebendo também o valor contido na variável TEXTO (alguma coisa).
		//resultado = HCODE  + ALGUMA COISA.
		echo "$nome <br>";

?>