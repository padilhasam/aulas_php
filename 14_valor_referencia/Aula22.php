<?php

		// Passagem de valores por valor e por referência
	
	// Passagem de Parâmetro por Valor
	
		$a = 10;
		
			function trocaValor1($a){
				$a = 60;		
				return $a;	
			}
			function trocaValor2($b){
				$b += 20;		
				return $b;	
			}
	
		echo "Valor da variável 'A' fora da função =  $a <br>"; // igual a 10.
		echo "Valor da variável 'A' dentro da função 1 = " .trocaValor1($a). "<br>"; // trocaValor = 60
		echo "Valor da variável 'A' dentro da função 2 = " .trocaValor2($a). "<br>";
		echo 'Valor de "A" após as funções = '. $a; //Neste momento, $a passa o valor 10 a $b, que somará com 20 dentro da função.
			echo "<br><br>";
			
	// Passagem de Parâmetro por Referência
	
		$c = 26;
		
			function trocaValor3(&$d){
				$d += 38;		
				return $d;	
			}
	
		echo "Valor da variável 'C' fora da função =  $c <br>";
		echo "Valor da variável 'C' dentro da função 3 = " .trocaValor3($c). "<br>"; //Neste momento, $c passa o valor 26 a $d, que somará com 38 dentro da função.
		echo 'Valor de "C" após a função = '. $c; 
	
?>