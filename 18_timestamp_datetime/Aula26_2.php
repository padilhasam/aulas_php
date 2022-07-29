<?php
  //CLASE DATETIME() - POO
  /* Esta classe nos permite manipular datas */

  $data = new DateTime(); // Objeto Instanciado
  echo $data -> format("d/m/Y") . "<br>"; // usamos a setinha em ORIENTAÇÂO A OBJETOS quando queremos acessar um método de uma instância.
  //Neste caso  método formatar.

  $periodo = new DateInterval("P15D"); // Objeto Instanciado
  $data -> add($periodo); // Acessando o método adicionar da classe DateTime e inserindo um invervalo de 15.

  echo $data -> format("d/m/Y") . "<br>";
  
?>
