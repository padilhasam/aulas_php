<?php
	//Novidades Funções PHP 7.0

	//Função para somar N numeros inteiros e realizar um cast durante o retorno do valor.

	function soma(int ... $valores):string{
		return array_sum($valores);
	}
		echo var_dump(soma(15,30,12,27,6))."<br>";
		echo var_dump(soma(25,33))."<br>";
		echo "<hr><br>";

/*OBS: Neste caso os dois pontos(:) mais a palavra STRING, tem a função de realizar um cast no valor retornado
		Funciona como uma DECLARAÇÃO DE TIPO DE RETORNO.
 */

	//Cast dentro da variável

	$ano = (int)$_GET["data"]; //Faz um cast e retorna um valor INTEIRO.

	var_dump($ano);

?>