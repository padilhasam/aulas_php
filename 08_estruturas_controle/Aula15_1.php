
<!-- CRIANDO FORMULÁRIO HTML -->

	<form> <!--Como não foi informado um Método ao formulário, por padrão ele será $_GET-->
		Nome:<input type="text" name="nome">
		Data de Nascimento:<input type="date" name="data_nascimento">
			<input type="submit" value="Enviar">	
	</form>

<?php

	/* INÍCIO DO PHP */

	if(isset($_GET)){
		foreach($_GET as $key => $value){
			echo "Nome do Campo: ". $key. "<br>"; //$key = nome e $key = data_nascimento
			echo "Valor do Campo: ". $value . "<br>"; // $value = nome digitado e $value = Data de Nascimento digitada.
			echo "<hr>"; // Implementar uma linha		
		}
	}
		//*****OBSERVAÇÕES******
		
		/* 

			1) O código só será executado se existir ("isset") valor em $_GET, ou seja, se for digitado algum valor nos campos do formulário;
			2) As chaves ($key) serão os nomes dos campos do formulário, que neste caso são "nome e data_nascimento", de acordo com a parâmetro "name" da tag <input>;
			3) Os valores ($value) serão os valores digitados nos formulários; 
			4) A tag <hr> implementa uma linha.

				*** No caso acima, o FOREACH (para cada) exibirá na tela "Nome do campo e valor do campo" para cada caixa de formulário preenchida. ***
					
					*** RESULTADO:
						
						Nome do Campo: nome; (conforme parâmetro name da PRIMEIRA "tag <input>" );
						Valor do Campo: Jeferson; (Valor digitado na caixa);
						_______________________________________________________________________________

						Nome do Campo: data_nascimento; (conforme parâmetro name da SEGUNDA "tag <input>" );
						Valor do Campo: 1986-10-24; (Valor digitado na caixa - Padrão Americano);
						_______________________________________________________________________________


		*/

?>