<?php

  // Incluindo classes com Autoload

  /*
    OBS: A Função __autoload() é executada sempre que um objeto for instanciada, salvando como parâmetro, uma string com o mesmo nome do objeto instanciado.
    Só então, dentro da função autoload, colocamos o require_once, para que ele execute a classe dentro do arquivo PHP.
  */

  function __autoload($nomeClasse){
    require_once($nomeClasse . ".php"); // Quando o Autoload for chamado, ele executará a classe DelRey que está no arquivo DelRey.php
  }
  // O parâmetro $nomeClasse, vai receber como valor, uma string de mesmo nome do objeto instanciado. Neste caso, DelRey.

  //require_once("DelRey.php");

  $carro = new DelRey();
  $carro -> acelerar(120);

  //Utilizar __autoload quando as classes estiverem na mesma pasta.

?>
