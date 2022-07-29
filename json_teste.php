<?php
	
	//BRINCANDO COM O JSON

	$pessoas = array();

		array_push($pessoas, array(
			"Nome" => "Gabriel",
			"Idade" => 17
		));

		print_r($pessoas);

		echo "<br>";

		echo json_encode($pessoas);

		echo "<br>";

	$decodifica = json_decode('[{"Nome":"Gabriel","Idade":17}]', true);

		print_r($decodifica);
?>