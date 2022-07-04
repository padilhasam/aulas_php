<?php

	//Novo exemplo de Valor por Referência
	
	$pessoa = array(
		'nome' => "Jeferson",
		'idade' => 34,
		'dia_aniversario' => 24,
		'mes_aniversario' => 10,
		'ano_aniversario' => 1986
	);
	foreach($pessoa as $key => &$value){
		if(gettype($value) === 'integer'){
			$value += 10;		
		}		
			echo $key. " = " .$value. "<br>";
	}
		print_r($pessoa);

	/*

		******** ENTENDENDO O CÓDIGO ******

		O FOREACH pega cada item contido dentro do array $pessoa e coloca em uma chave com seu respectivo valor.
		Depois, entra nos VALORES e pega apenas aquele que seja do tipo INTEIRO, e soma a estes valores + 10. Após, ele sai da condicional.
		Na linha 13 ele irá imprimir o valor a chave com o seu valor (somado com + 10, caso seja um INTEIRO).
		Na linha 15 imprime o Array inteiro.  

	*/
?>