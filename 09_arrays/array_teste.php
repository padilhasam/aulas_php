<?php
	
//TESTE DE ARRAY
	$clientes = array(
 		"Nome" => "Gabriel Leonardo Padilha",
 		"Idade" => 16
	);
 		print_r($clientes); //Imprime o array na tela;
 			echo "<br><br>";

 //INSERINDO DADOS DENTRO DE UM ARRAY - PARTE 1

 	$novoCliente = array(
 		array(
 			"Nome"=>"Marlene Periotto Tambani",
 			"Idade"=>58
 		)
 	);

 	array_push($novoCliente, array(
 		"Nome" => "Jeferson Moisés Padilha",
 		"Idade" => 35
 		)
 	);
 	array_push($novoCliente, array(
 		"Nome" => "Aline Ribeiro de Souza",
 		"Idade" => 31
 		)
 	);
 		print_r($novoCliente);

 //INSERINDO DADOS DENTRO DE UM ARRAY - PARTE 2

 		$frutas = array(
 			"Abacaxi", "Maçã", "Banana"
 		);
 			print_r($frutas);
 				echo "<br><br>";
			array_push($frutas, "Morango", "Abacate"); //Insere Morange e Abacate na array $frutas;
 			print_r($frutas);



?>