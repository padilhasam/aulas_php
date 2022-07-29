<?php
	
	//Exemplo função com vários parâmetros
	
	function ola(){
		$argumentos = func_get_args(); //$argumentos receberá mais de um valor;
		return $argumentos;
	}
	var_dump(ola("Bom Dia", 10, "Santos", 1912)); // Função com mais de um parâmetro.

?>