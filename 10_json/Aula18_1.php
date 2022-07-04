<?php
	
	//LENDO CÓDIGO SERIALIZADO - JSON

	$json = '[{"Nome":"Jeferson","Idade":34},{"Nome":"Gabriel","Idade":16}]'; // Necessário colocar o JSON entre aspas simples.
	
		print_r(json_decode($json, true)); // Parâmetro TRUE adicionado para não retornar um objeto.


		/*     *** OBSERVAÇÃO *** 

			Os colchetes Separam as ARRAYS PRINCIPAIS.
			As chaves do JSON separam as ARRAYS SECUNDÁRIAS.

		*/
		
?>