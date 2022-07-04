<?php

	//Estruturas de Controle
	
	$menorIdade = 12;
	$maiorIdade = 18;
	$melhorIdade = 60;

		$qualASuaIdade = 20;
	
			if($qualASuaIdade <= $menorIdade){
					
					echo "Piá de Bosta!!";		
			
			}else if($qualASuaIdade > $menorIdade && $qualASuaIdade < $maiorIdade){
			
					echo "Muleque do Djanho!!";
					
			}
			else if($qualASuaIdade >= $maiorIdade && $qualASuaIdade < $melhorIdade){
			
					echo "Bah!! Tá ficando Véio";		
			
			}
			else if($qualASuaIdade > $melhorIdade){
						
					echo "Tá fazendo hora extra!!";

			}
			
			//OPERADOR TERNÁRIO
			
			echo "<br>";
			
				echo ($qualASuaIdade < $maiorIdade)? "Menor de idade" :	"Maior de idade"; 
				//Verifica o que esta dentro do parênteses: 
					// ? -> Se Verdadeiro
					// : -> Se Falso 
					// 1) Se for VERDADEIRO executa a primeira String.
					// 2) Se for FALSO executa a segunda String.
?>