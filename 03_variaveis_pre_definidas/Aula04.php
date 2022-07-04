<?php

	// VARIÁVEIS PRÉ-DEFINIDAS
	
	$nome = $_GET['user']; //user = nome da chave da array;
	$idade = (int)$_GET['idade']; //Cast para inteiro.
		var_dump($nome);
		echo "<br>";
		var_dump($idade);
		echo "<br>";
	// $_GET -> Faz a captura dos valores atribuidos a nome "USER" pela URL, bastando inserir dentro da URL "?user=valor"
	// Em caso de haver mais de um nome, as mesmas devem ser separadas por e-comercial (&). 
		
	//PEGANDO O IP DO USUÁRIO
	
	$ip = $_SERVER["REMOTE_ADDR"]; // Pega o IP da Máquina.
		echo "$ip <br>";

	$ip = $_SERVER["SCRIPT_NAME"]; // Pega o endereço do arquivo contendo o script.
		echo "$ip <br>";
?>