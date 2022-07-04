<?php
	
		//include -> Tenta executar o arquivo mesmo que ele não exista ou esteja com erros, além de possuir mais recursos.
		//require -> O arquivo deve existir e estar funcionando obrigatoriamente para que ele seja executado.
		//include_once e require_once -> Incluirá o arquivo apenas uma vez e caso já exista ignorará o restante.
		
		require_once "Aula11.php"; // Obriga que o arquivo exista e funcione corretamente.

			//Primeira Forma
			echo somar(10,20); //Exibe o resultado da expressão contida na função somar() do arquivo Aula11.php, passando parâmetros para $a e $b, sendo 20 para $a e 30 para $b; Resultado = 50;

				echo "<br>";
				
			//Segunda Forma	
			$resultado = somar(20,30); //A variável RESULTADO recebe a função somar, que por sua vez está somando $a = 20 + $b = 30, retornando o resultado de 50. 
				echo $resultado;		
	
?>