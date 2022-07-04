<?php

		//OPERADORES DE COMPARAÇÃO
	
			$a = 22;
			$b = 59;
				
			var_dump($a > $b); //A maior que B? (resposta falsa)
				echo "<br>";
			var_dump($a < $b); //A menor que B? (resposta verdadeira)
				echo "<br>";
			var_dump ($a == $b); // A Igual a B? (resposta falsa)
				echo "<br>";
			var_dump ($a != $b); // A diferente de B? (resposta verdadeira)
				echo "<br>";
			var_dump($a >= $b); //A maior ou igual a B? (resposta falsa)
				echo "<br>";
			var_dump($a <= $b); //A menor ou igual a B? (resposta verdadeira)
				echo "<br><br>";

				var_dump ($a === $b); // A Igual a B em valor e tipo? (resposta falsa)
					echo "<br>";
				var_dump ($a !== $b); // A diferente de B em valor e tipo? (resposta verdadeira)
					echo "<br><br>";

		// OPERADORES LÓGICOS
			$x = 15;
			$y = 10;

			//NOT (NÃO - NEGAÇÃO)
			$var = false;
				echo "Não é falsa => ";
				var_dump(!$var); 
					echo "<br><br>";
			
			// AND (E)
			echo "AND => ";
				if($x == 10 && $y == 10){
					echo "Verdadeiro, pois os dois são verdade";
				} else{
					echo "Falso, pois os dois ou ao menos um deles é falso";
				}
					echo "<br><br>";
			
			//OR (OU)
			echo "OR => ";
				if($x == 10 || $y == 10){
					echo "Verdadeiro, pois os dois ou ao menos um deles é verdade";
				} else{
					echo "Falso, pois nenhum deles é verdade";
				}
					echo "<br><br>";

		// OPERADOR SPACESHIPS - Faz 3 comparações ao mesmo tempo.
		$c = 18; $d = 18;
		var_dump($c <=> $d); // Como $c é IGUAL a $d o resultado retornado é 0 (zero);
			echo "<br>";
		$c = 5; $d = 18;
		var_dump($c <=> $d); // Como $c é MENOR que $d o resultador retornado é -1;
			echo "<br>";
		$c = 50; $d = 18;
		var_dump($c <=> $d); // Como $c é MAIOR que $d o resultado retornado será 1;
			echo "<br><br>";
			
		//OPERADOR NULL COALESCE - Ignora os valores NULOS e exibe o primeiro valor válido encontrado.
		$e = NULL; $f = NULL; $g = 10;
			echo $e ?? $f ?? $g;

?>