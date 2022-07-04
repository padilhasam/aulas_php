<?php

	require_once("config.php");

	//VERIFICANDO CONTEÚDO DAS VARIÁVEIS - PARTE 1

	echo session_id() . "<br>";

	echo $_SESSION['nome'] . "<br>";
	echo $_SESSION['signo'] . "<br>";


?>