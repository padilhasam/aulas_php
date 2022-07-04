<?php

	// Tipos de Dados Primitivos
	
	//Tipos Básicos
	
		$nome = "Jeferson"; //String
		$anoNascimento = 1986; //Inteiro
		$altura = 1.72; //Ponto Flutuante (float/double)
		$bloqueado = false; // Booleano
	
	// Tipos Compostos
	
		 $frutas = array("Laranja", "Abacate", "Manga"); //Array
		 	print_r($frutas); // Exibe o conteúdo da Array.
		 		echo "<br>";
		 	echo $frutas[1]; // Exibe o conteúdo da Array na posição 01.
		 		echo "<br>";
		 	
		 $nascimento = new DateTime(); // Objeto
		 	var_dump($nascimento); // Exibe o conteúdo do Objeto DateTime();
		 		echo "<br>";
		 		
		 //Tipos Especiais
		 
		 $arquivo = fopen("Aula01.php", "r"); // Arquivo
		 
		 	var_dump($arquivo); //Exibe o conteúdo da variável ARQUIVO;
	 
		$nulo = NULL;
	 	$vazio = " "; 
	 
	 	//Null é considerado como nulo ou ausente. Contudo, espaço é considerado caracter, portanto tem valor definido.
	 
?>