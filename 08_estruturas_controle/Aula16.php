<?php

	//LAÇO DE REPETIÇÃO - WHILE
	
		$condicao = true;
		
			while($condicao){
				$number = rand(1,10);
					if($number == 3){
						echo "Três";
						$condicao = false;
					}
				echo " ".$number;
			};
			
			echo "<br><br>";

			/*

				*** EXPLICANDO O CÓDIGO

					WHILE - Enquanto a condição for verdadeira (true) $numero receberá um valor randomico (rand) entre 1 e 10;
					IF - Se algum dos valores for igual a 3, então o valor será exibido de forma descritiva e a condição se tornará FALSA (False), fazendo com que o WHILE pare de executar;

			
			*/
			
	//LAÇO DE REPETIÇÃO - DO WHILE

		//OBS.: O "DO WHILE" executa o código pelo menos 1 vez. 
	
		$total = 150;
		$desconto = 0.9;

			do{
				$total *= $desconto;
					echo "Total = " .$total. "<br>";	
			}while($total > 100);
			
			
			/*

				*** EXPLICANDO O CÓDIGO

					DO - $total que possui valor inicial de 150 será multiplicado por $desconto que possui valor inicial de 0.9 e então receberá o resultado como valor, ou seja, $total = 135.
					WHILE - Faz com que o DO seja executado enquanto o $total seja maior que 100.
						*** Neste caso o "DO" foi executado 4 vezes. ***

			*/
?>