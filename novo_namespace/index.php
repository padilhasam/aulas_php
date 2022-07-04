<?php
  require_once("config.php");

  use Cliente\Cadastro; // Dentro da pasta cliente ele irá procurar o arquivo que tenha a classe CADASTRO;

  $cad = new Cadastro();
  $cad -> setNome("Jeferson");
  $cad -> setEmail("jeferson_death@yahoo.com.br");
  $cad -> setSenha("123456");

  //var_dump ($cad);

  $cad -> registrarVenda();

?>
