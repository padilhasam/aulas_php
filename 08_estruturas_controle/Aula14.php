<?php
	
		//LAÇOS DE REPETIÇÃO - FOR
		
		//Primeiro Caso
		
		echo "Primeiro Caso <br>";
		
		for($i=0; $i<= 100; $i+=2){
		
			echo $i . "<br>";
		
		}

		//LAÇO DE REPETIÇÃO COM INCREMENTO DE 5 EM 5
		
		//Segundo Caso

		echo "Segundo Caso <br>";

		for($i=0; $i<= 200; $i+=5){
			
			if($i > 20 && $i < 80){
				
				continue; //incrementa de 5 em 5, mas ignora um intervalo entre 20 e 80;			
			
			}
			
			if($i == 150){
				
				break; //Sai do laço assim que $i for igual a 150;		
			
			}
			
			echo $i;
				echo "<br>";
						
		}
		
		// Terceiro Caso -  Dropdown

			echo "Terceiro Caso <br>";

			echo "<select>"; //Abre a tag option
			
				for($i = date("Y"); $i >= date("Y")-100; $i--){
				
					echo '<option value="'.$i.'">'.$i.'</option>'; // inicia pelo ano de 2021 e decrementa até chegar a 1921, adicionando os valores dentro do menu de opções.
					//O valor entre as tags será a nomenclatura e o valor do parâmetro value é o valor que será enviado ao servidor.			
				
				}			
				
			echo "</select>"; // Fecha a tag option

		
?>		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
