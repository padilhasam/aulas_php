<?php

	require_once "configuracao_sessao.php";

	//VARIÁVEIS DE SESSÃO
	
	//session_start();

		echo "ID da Sessão => " . session_id() . "<br>";
		echo $_SESSION["usuario"]." ".$_SESSION["carro"]." ".$_SESSION["cor"];

?>