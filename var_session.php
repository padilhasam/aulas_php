<?php

	require_once("config.php");
	
	//CRIANDO AS VARIÁVEIS DE SESSÃO

	$_SESSION['nome'] = "Jeferson";
	$_SESSION['idade'] = 35;
	$_SESSION['signo'] = "Escorpião";

		$sessao = session_id();

		echo "ID da Sessão => " . session_id() . "<br>";

		if(!empty($sessao)){
			echo "Sessão iniciada com Sucesso!!";
		}else{
			echo "Sessão não iniciada";
		}

?>