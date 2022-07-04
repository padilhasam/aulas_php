<?php

//CONSTANTES E ARRAYS CONSTANTES

	//Syntaxe: define("NOME DA CONSTANTE EM MAIÚSCULO", "VALOR CONSTANTE")
	
	define("SERVIDOR","127.0.0.1", true); 
	
		echo SERVIDOR . "<br><br>";


		/* 

					**** OBSERVAÇÕES **** 

			* Para definirmos uma constante como CASE INSENSITIVE (tanto faz nomes maiúsculos e minúsculos), utilizamos a palavra reservada TRUE.
			** Como boa prática de programação, o ideal é nomear e chamar CONSTANTES sempre com MAIÚSCULAS.
			*** Somente colocar valores do TIPO STRING entre aspas. Para valores INTEIROS, FLOAT e DOUBLE não se faz necessário.


		*/

			// CONSTANTES PADRÕES DO PHP 7.0

			echo "A versão atual do PHP é: " . PHP_VERSION . "<br><br>";
			echo " Barra de diretorio invertida => " . "( " .  DIRECTORY_SEPARATOR . " )<br><br>";



		
?>