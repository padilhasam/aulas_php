<?php

	require_once "configuracao_sessao.php"; // Arquivo contendo SESSION_START();

	/* 

		***** VARIÁVEIS DE SESSÃO *****
		
		* SESSÕES SERVEM PARA ARMAZENAR INFORMAÇÕES QUE SERÃO UTILIZADAS EM VÁRIAS PÁGINAS.
		** GERALMENTE SÃO USADAS PARA CRIAR CARRINHOS DE COMPRA E SISTEMAS DE LOGIN.

	*/

		//session_start(); //inicia uma sessão gerando uma ID única (Neste caso, a sessão está sendo iniciada pelo arquivo "configuracao_sessao.php");
	
		$_SESSION["usuario"] = "Jeferson";
		$_SESSION["carro"] = "Mustang";
		$_SESSION["cor"] = "Preto";
		
			echo "ID da Sessão => " . session_id() . "<br>"; // exibe o ID da sessão iniciada.
			echo " PILOTO: " . $_SESSION["usuario"] . "<br>";
			echo " CARRO: " . $_SESSION["carro"] . "<br>";
			echo " COR: " . $_SESSION["cor"] . "<br>";

		/* 
			* Ao abrir o arquivo "Aula20.php", o compilador identificará por PRIMEIRO a REQUIRE que inicia a sessão, gerando uma ID que será usada para recuperar as informações salvas nas variáveis de sessão.
			** Após, o compilador encontrará as variáveis de sessão ($_SESSION) que armazenam os dados (Neste caso os dados são Jeferson, Mustang e Preto.) e salva tudo dentro da ID da sessão iniciada. 
			*** O arquivo AULA20_1.php, se aberto após a sessão iniciada, identifica a sessão iniciada através da REQUIRE, recuperando as informações.
					
					******  ATENÇÃO *******

			*Caso eu tente abrir o arquivo AULA20_1.php PRIMEIRO possuindo uma REQUIRE sem sessão iniciada, a mesma exibirá um erro informando UNDEFINED INDEX, ou seja, Índice Indefinido;
			** Caso eu tente abrir o arquivo AULA20_1.php PRIMEIRO sem uma REQUIRE, a mesma exibirá um erro informando UNDEFINED VARIABLE, ou seja, variável indefinida;

		*/

?>