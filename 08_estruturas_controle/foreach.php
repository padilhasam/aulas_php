<?php

		//Foreach
		
		$frutas = array("Mamão","Banana","Maçã", "Abacate", "Laranja");
		
			print_r($frutas);
			
				echo "<br><br>";
			
			foreach($frutas as $key => $fruta){
				
				echo $key. " => ". $fruta . "<br>";			
			
			}
				echo "<br>";
				
			echo $frutas[2];

?>