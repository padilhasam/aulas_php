<?php

		//String em PHP
	
	$nome = "Hcode";
	$nome2 = 'Treinamentos';
	
	//Converter em maiúsculas
		$novoNome = "jeferson padilha";
			echo strtoupper($novoNome); //Converte o valor da variável $novoNome em MAIÚSCULAS.
				echo "<br>";
	
	//converter para minúsculas
		$outroNome = strtolower($novoNome);
			echo $outroNome; //Converte o valor da variável $novoNome em MINÚSCULAS.
				echo "<br>";
				
	//Converter a primeira letra da primeira palavra do texto em maiúscula.
		$primeiraPalavra = "eu sou um cara legal";
			echo ucfirst($primeiraPalavra); //Converte a PRIMEIRA LETRA DA PRIMEIRA PALAVRA em MAIÚSCULA.
				echo "<br>";
				
	//Converter a primeira letra de TODAS as palavras em maiúscula.
		$todaPalavra = "naruto uzumaki";
			echo ucwords($todaPalavra); //Converte a PRIMEIRA LETRA DE TODAS AS PALAVRAS em MAIÚSCULA.
				echo "<br>";
				
	//Substituir informação de uma palavra

		//(Syntaxe: str_replace(O que?/ Pelo que?/ Onde?);
		$empresa = "Deboche";
		$empresa = str_replace("e","3", $empresa); //Substitui a letra "e" da string contida em $empresa por "3"; 
		echo $empresa;
		echo "<br>";
				
	//Procurar a posição de uma string

		//(Syntaxe: strpos(Onde?/ O que?);
		$frase = "A pressa é inimiga da perfeição!";
		$query = strpos($frase, "da"); // Busca a POSIÇÃO de uma STRING ou CARACTER dentro de uma variável;
		var_dump($query); //Resultado = int(20);
		echo "<br>";
				
	//Pegar frase que antecede palavra procurada

		//(Syntaxe: substr(Onde?/ Posição Inicial, Posição Final);
		$texto = "Hoje vai chover aqui em Araucária!";
		$palavra = strpos($texto, "chover"); //Busca a POSIÇÃO da palavra "CHOVER" dentro de $texto;
		echo $palavra; //Resultado = 9;
			echo "<br>";
			$novaQuery = substr($texto, 0, $palavra); // Pegou o valor contido em $texto iniciando na posição zero e terminando na posição 9 ("$palavra = 9"); 
			echo $novaQuery; //Resultado: "Hoje vai ";
			echo "<br>";
		
	//Pegar frase que vem depois da palavra procurada
		
			$search = "chover"; //Palavra que será procurada.
			$texto2 = "Hoje vai chover aqui em Araucária!"; //Texto onde a palavra será procurada;

			// Primeiro: Pega a posição de CHOVER
			$palavra2 = strpos($texto2, $search); //Pega a posição de "Chover" ($search) dentro de $texto2.
			echo $palavra2; //Posição = 9;
			echo "<br>";
			
			//Segundo: Conta a quantidade de caracteres e soma com a posição
			$novaQuery2 = substr($texto2, $palavra2 + strlen($search), strlen($texto2)); //Pega toda a string contida em $texto2 começando na posição 15(9 + 6) e terminando na posição 35;
			echo $novaQuery2; //Resultado = " aqui em Araucária!";
			echo "<br>";

			//strlen() conta a quantidade de caracteres;
			//strlen($palavra2). "<br>" = 9;					
			//strlen($search)."<br>"; //strlen($search) = 6;
			//strlen ($texto2)."<br>"; //sterlen($texto2) = 35;
						
				
?>