<?php

		//Teste recuperação de dados de formulário
	
	echo '<form method="POST" action="testeForm.php">';
	echo	'<input type ="text" name="person">';
	echo	'<input type="submit" value="Enviar">';
	echo '</form>';
	
		echo $_POST['person'];
	
?>