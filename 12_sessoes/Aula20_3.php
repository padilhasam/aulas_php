<?php

	// FORÇANDO A CRIAÇÃO DE UMA NOVA ID DE SESSÃO.
	
	require_once "configuracao_sessao.php";
	
		session_regenerate_id(); // Gera uma nova ID sempre que atualizar a página.
		
		echo session_id()."<br>";
		
		var_dump($_SESSION); //Exibe o conteúdo das variáveis de sessão

?>