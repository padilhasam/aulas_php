<?php
	// SERIALIZAND UMA ARRAY - JSON
	
	$pessoas = array(); // -> Array já criada.
		array_push($pessoas, array(
				"Nome"=>"Jeferson",
				"Idade"=>34
		)); //Adicionando uma array dentro de uma array;
		array_push($pessoas, array(
				"Nome"=>"Gabriel",
				"Idade"=>16
		));
	
	echo json_encode($pessoas); // SERIALIZANDO A ARRAY ***

		/* 

			RESULTADO:

				[{"Nome":"Jeferson","Idade":34},{"Nome":"Gabriel","Idade":16}]


		*/


?>