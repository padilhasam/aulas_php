<?php

	//ESCOPO DE VARIÁVEL
	
	$nome = "Glaucio"; // Variável Externa
	
		function teste(){
			//escopo 1 - Variável não enxergada
			echo $nome; // não imprime nada, pois não enxerga a variável externa.
		};
		
		function teste2(){
			//Escopo 2 - Variável enxergada
			global $nome; //Atributo para fazer a variável externa ser enxergada dentro do escopo da função.
			echo $nome;	// Imprime o nome GLAUcIO.	
		};
		
		function teste3(){
			//Escopo 3 - Criada variável interna e definido valor para ela.
			$nome = "Panda"; //Valor da variável interna, que é diferente da externa.
			echo $nome;	//Exibe o nome PANDA.	
		};

		//Chamando as funções
		
		teste();
			echo "<br>"; //Quebra de linha;
		teste2();
			echo "<br>"; //Quebra de linha;
		teste3();
			echo "<br>"; //Quebra de linha;
			
?>