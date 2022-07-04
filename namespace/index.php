<?php
  require_once("config.php");

  use Cliente\Cadastro; //Acessa o namespace, como um require.

  $cad = new Cadastro();
  $cad -> setNome("Jeferson Moisés Padilha");
  $cad -> setEmail("jeferson.padilha86@hotmail.com");
  $cad -> setSenha("123456");

  //echo $cad; //Retorna um Array serializado contendo nome, email e senha.

  $cad -> registrarVenda();

?>
