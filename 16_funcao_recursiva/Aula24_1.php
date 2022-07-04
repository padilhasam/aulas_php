<?php

  //TABUADA UTILIZANDO FUNÇÃO RECURSIVA

  //Função tabuada recebe 2 parâmetros. Um recebe o número da tabuada e o outro recebe o multiplicador.
  function tabuada($numeroDaTabuada, $numero = 1){
      
    if ($numero <= 10){
          echo $numeroDaTabuada . " x " . $numero . " = " . $numeroDaTabuada * $numero; // 6 X 1 = 6
          echo "<br/>";
  	       $numero++; // Incrementa +1 ao multiplicador enquanto este for menor ou = 10;
  	       tabuada($numeroDaTabuada, $numero); //Executa a função novamente, tendo alterado apenas o multiplicador, que recebeu +1 na linha 11.
      }
  }
    echo tabuada(6); //Imprime a tabuada do 6.
?>
