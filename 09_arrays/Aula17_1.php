<?php

	//ADICIONAR ITENS A UMA ARRAY JÁ CRIADA.

		//*** PARA ISSO UTILIZAMOS O MÉTODO "array_push()" ***
			
			// Syntaxe: array_push(Onde?, O que?);

		$pessoas = array(); // -> Array já criada.
			array_push($pessoas, array(
					"Nome"=>"Jeferson",
					"Idade"=>34
			)); //Adicionando uma array dentro de uma array;
			array_push($pessoas, array(
					"Nome"=>"Gabriel",
					"Idade"=>16
			));
			
		print_r($pessoas); //Imprime a Array Principal e todas as Arrays que estão dentro dela.
			echo "<br><br>";
		print_r($pessoas[0]); // Imprime a Array Secundária que está na linha zero da Array Principal.
			echo "<br><br>";
		print_r($pessoas[1]["Nome"]); // Imprime apenas o valor da chave "Nome" na array secundária que está na linha zero da Array principal.
		
?>