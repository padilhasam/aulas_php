<?php
	
	// PARÂMETROS DE FUNÇÕES
	
	function ola($texto0){
		return "Olá $texto0 !!";
	}
		echo ola("Mundo!"). "<br>";
		echo ola("Jeferson"). "<br>";
		echo ola ("Pandaniel") . "<br><br>";
		
	//NOTA1: Neste caso o valor do parâmetro não é fixo, pois como podemos observar podemos informar qualquer valor a $texto0.
	
	function ola2($texto1 = "Aliens", $texto2 = "Good Morning!"){
		return "Olá $texto1 $texto2";
	}
		echo ola2(). "<br>";
		echo ola2("", "Buenas Tardes"). "<br>";
		echo ola2("Pandaniel", "Cara de pastel"). "<br>";
		echo ola2("Brasillllll", ""). "<br><br>";
		
	//NOTA2: Neste caso $texto1  e $texto2 possuem um valor predefinido, portanto, caso eu não passe um novo parâmetro
	//ele manterá o valor padrão.
	
	function ola3($texto3, $texto4 = "Novamente"){
		return "Olá, $texto3 $texto4";
	}
		echo ola3("Voe"). "<br>";
		echo ola3("", "Aniversariante!!"). "<br>";
		echo ola3("Panda", "Gordinho :) "). "<br>";
		echo ola3("Aline!!", ""). "<br><br>";
	
	//NOTA3: Neste caso $texto3 não possui um valor predefinido, sendo assim, será obrigatório informar um valor para o mesmo.
	
	function ola4($texto5 = "México", $texto6){
		return "Olá, $texto5 $texto6";
	}
		echo ola4("Morelia"). "<br>"; // Falta Parâmetro para $texto6, por ser obrigatório deveria estar a esquerda.
		
	
	//NOTA GERAL: Parâmetros que não possuem valor padrão devem ficar a esquerda para que se tenha sentido.
	
?>