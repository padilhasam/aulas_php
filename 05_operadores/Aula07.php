<?php

			//CONTINUAÇÃO OPERADORES DO PHP
	
	//OPERADORES COMPOSTOS
	
	$valorTotal = 0;
	$valorTotal += 100; // 100
	$valorTotal += 25; // 125		
		echo $valorTotal . "<br>"; //Resultado Final = 125.
	
	$desconto = 35;
	$valorTotal -= $desconto; // 125 - 35 = 90;
		echo "$valorTotal <br>"; //Resultado = 90.

	$valorTotal *= .9; //Desconto de 10% (90-9) --> 81;
		echo "$valorTotal <br>"; //Resultado = 81.
	
	//OPERADORES ARITMÉTICOS
	
	$a = 10; $b = 18; $c = 25; $d = 62; $e = 11;
	$res1; $res2; $res3; $res4; $res5; $res6;
	
	$res1 = $a + $b; //Soma
		echo "$res1 <br>"; //Resultado = 28;
	$res2 = $d - $c; //Subtração
		echo "$res2 <br>"; //Resultado = 37;
	$res3 = $b * $d; //Multiplicação
		echo "$res3 <br>"; //Resultado = 1116;
	$res4 = $c / $a; //Divisão
		echo "$res4 <br>"; //Resultado = 2.5;
	$res5 = $d % $a; //Módulo
		echo "$res5 <br>"; //Resultado = 2;
	$res6 = $e ** 2; //Potência
		echo "$res6 <br>"; //Resultado = 121;
		
?>