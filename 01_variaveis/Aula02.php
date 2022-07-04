<?php

	/* Padrão CamelCase	
	$nomeUsuario = "Jeferson";
	$anoNascimento = 1986; */
	
	// Limpando Variável
	$nome = "Padilha";
		echo $nome . "<br>";
		unset($nome); // Limpa a variável o conteúdo da variável NOME;
		
		echo $nome . "<br>"; //apresenta um erro, pois a variável foi limpa.

	$nome = "Panda";
		echo $nome . "<br>"; // Exibe o novo conteúdo da variável NOME após a limpeza.
	
	//Validando a Variável
	if(isset($nome)){
		echo 'A variável $nome existe!';
		echo "<br>";
	} //isset = se existir;
	
	// Concatenação de dados
	
	$sobrenome = "Gabriel";
	$nomeCompleto = $nome." ".$sobrenome;
		echo $nomeCompleto;
	
	
?>