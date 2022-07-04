<form>
	Nome: <input type="text" name="Nome">
	Idade: <input type="text" name="Idade">
	Signo: <select name="Signo">
				<option></option>
				<option value="Aries">Aries</option>
				<option value="Touro">Touro</option>
				<option value="Gemeos" >Gêmeos</option>
				<option value="Cancer">Câncer</option>
				<option value="Leao">Leão</option>
				<option value="Virgem">Virgem</option>
				<option value="Libra">Libra</option>
				<option value="Escorpiao">Escorpião</option>
				<option value="Sagitario">Sagitário</option>
				<option value="Capricornio">Capricórnio</option>
				<option value="Aquario">Aquário</option>
				<option value="Peixes">Peixes</option>	
			</select>
			<input type="submit" value="Enviar" name="enviar">
			<hr>
<?php

	if($_GET != 0 ){
		echo $_GET["Nome"] . "<br>";
		echo $_GET["Idade"] . "<br>";
		echo $_GET["Signo"] . "<br>";
			switch($_GET["Signo"]){

				case "Touro" :
					echo "O Signo de Touro é o signo do pessoal que gosta de beber e ouvir 'boate azul' ";
						break;

				case "Aries" :
					echo "Tomem muito cuidado, pois é o signo das patadas.";
						break;

				case "Escorpiao" :
					echo "É o signo mais legal que existe. Supergente boa, Simpático e Carismático";
						break;
			}
	} else{

		echo "Por gentileza digitar os valores dos campos!";
	}

?>