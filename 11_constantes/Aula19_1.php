<?php
	
	//Definindo uma Array Constante
	
	define("DATABASE",
	["127.0.0.1",
	"root",
	"faesp",
	"airquality"], true);
	
	print_r(database);
		echo "<br>";
	print_r(DATABASE);
	
	/* 
			**** OBSERVAÇÕES ****

		1) O nome da constante está em minúsculo, pois ao utilizarmos o parâmetro
		TRUE faz com que o nome se torne CASE INSENSITIVE, ou seja, não faz diferença
		entre maiúsculas e minúsculas. 

		2) Os colchetes são utilizados para informar os valores que serão armazenados dentro do array da constante.

	*/

?>