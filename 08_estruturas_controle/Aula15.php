<?php
	
	$meses = array(
		"Janeiro", "Fevereiro", "Março",
		"Abril", "Maio", "Junho", "Julho",
		"Agosto", "Setembro", "Outubro",
		"Novembro", "Dezembro"
	);
	
		print_r($meses); // Imprime o array completo com todos os valores contidos nele.
			echo "<br><br>";

		echo $meses[9] . "<br><br>";  // Imprime apenas o valor contido na posição 9 do array.
	
	//UTILIZAÇÃO DO FOREACH

		// Foreach cria uma variável MÊS e adiciona a ela, cada item contido na Array MESES.
		//Syntaxe: foreach($nome_Array_Existente as $nome_Nova_Váriavel){};
	
			foreach($meses as $mes){
			
				echo "O Mẽs é: $mes <br>"; //Pegou cada mês contido no Array MESES e colocou dentro da variável MES, criando uma variável MES para cada item.	
			
			}
			
				echo "<br><br>";

			//Exibe o Indíce(posição) de cada item do array que foi adicionado na variável MES.
			
			foreach($meses as $index => $mes){
			
				echo $index . " => ";
				echo "O mês é: ".$mes."<br>";
			
			}

?>