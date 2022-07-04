<?php
	
	//CRIANDO FUNÇÕES DE USUÁRIO
	
		//SUB-ROTINA (Não retorna valores através do RETURN)
		
			function ola(){
				echo "Olá Mundo Sub-Rotina!! <br>";
			}
				ola() . "<br>"; // Chama a Sub-Rotina que exibirá o texto contido na ECHO.
					$teste = ola(); //Não consegue inserir nada em $teste, pois a "function ola()" não retorna nada.
					echo strlen($teste). "<br>"; // Resultado 0, uma vez que a funtion ola() não retornou valores.
			
		//FUNÇÃO (Retorna valores através do RETURN)
		
			function ola_novo(){
				return "Olá Mundo!!! <br>";			
			}
				echo ola_novo(); // Chama a Função ola_novo();

					echo strlen(ola_novo())." Caracteres <br>"; // Conta a quantidade de caracteres no echo da função ola_novo();

					$frase = ola_novo() . "Cowntry"; // Adiciona na variável $frase o conteúdo da função ola_novo() + a palavra Cowntry.

					echo strlen($frase). " Caracteres <br>"; // Conta a quantidade de caracteres de $frase após adicionar o conteúdo da função ola_novo + a palavra Cowntry.
						
		/* NOTA: com RETURN nós temos mais liberdade para trabalhar, pois note que com ele foi possível lançar o valo dentro de uma variável.*/

?>				
