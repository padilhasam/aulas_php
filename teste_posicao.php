<?php
	
	/* $texto = "Hoje vai chover aqui em Araucária!";
			$palavra = strpos($texto, "chover"); //Busca a POSIÇÃO da palavra "CHOVER" dentro de $texto (Resultado = 10);
				echo $palavra;  */
				
		$search = "chover"; //Palavra que será procurada.
		$texto2 = "Hoje vai chover aqui em Araucária!"; //Texto onde a palavra será procurada;

			$palavra2 = strpos($texto2, $search); //Pega a posição de "Chover" ($search) dentro de $texto2.
				echo $palavra2; //Resultado = 9;
					echo "<br>";	
						
			//strlen() conta a quantidade de caracteres;		
				echo strlen($search)."<br>"; //strlen($search) = 6;
				echo strlen ($texto2)."<br>"; //sterlen($texto2) = 35;  						
							
			$novaQuery3 = substr($texto2, $palavra2 + strlen($search), strlen($texto2)); //Pega toda a string contida em $texto2 começando na posição 15 e terminando na posição 35;
				echo $novaQuery3;
					echo "<br>";
								
?>