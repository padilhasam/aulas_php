<?php
	
	// ARRAY UNIDIMENSIONAL
		
		// Exibirá uma linha de array apenas;	
	
		$frutas = array(
			"Maçã", "Banana", "Morango",
			"Uva", "Laranja", "Mamão"
		);
		print_r($frutas);
			
			echo "<br><br>";
	
	// ARRAY BIDIMENSIONAL

		// São parecidas com MATRIZES -> (Array[Linha][Coluna])

		$carros[0][0] = "GM";
		$carros[0][1] = "Ônix";
		$carros[0][2] = "Cobalt";
		$carros[0][3] = "Camaro";
		
		$carros[1][0] = "FORD";
		$carros[1][1] = "Fiesta";
		$carros[1][2] = "Fusion";
		$carros[1][3] = "Eco Sport";
		
		$carros[2][0] = "FIAT";
		$carros[2][1] = "Pálio";
		$carros[2][2] = "Uno";
		$carros[2][3] = "Strada";
		
			print_r($carros);
				echo "<br><br>";


			//exibindo o ultimo item de uma linha de array;
			echo end($carros[1]) . "<br>"; // Neste caso o valor exibido será "Eco Sport". 
			echo end($carros[2]); // Neste caso o valor exibido será "Strada".
			
?>