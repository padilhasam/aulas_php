<?php
	//Teste de exemplo de funções
		
		//Criando uma função de receberá um array como parâmetro.
		function um($valores){
				return $valores;	
		}
			$dados = array('nome' => "Jeferson", 'sobrenome' => "Padilha"); //$dados recebe um array com valores.	
				
				$var = um($dados); //Passa os valores da array para dentro da função

				print_r($var); // imprime a variável que recebe a função.

				echo "<br>";
		
		//Criando uma função de receberá um array como parâmetro
		function dois($valores){
			return $valores;		
		}
			
			$dados = array('Nome' => "Gabriel", 'Sobrenome' => "Padilha"); //Cria um array e salva dentro da variável $dados.
				
				$var = (object)dois($dados); //A variável $var recebe a função dois passando para ela a array contida em $dados como parâmetro. Também faz um casting convertendo a array para um objeto.

				//print_r($var); //Imprime toda a array dados na tela

				echo $var -> Nome; //Acessa a Chave Nome contida na função dois que recebeu como parâmetro a array armazenada na variável $dados;
	?>