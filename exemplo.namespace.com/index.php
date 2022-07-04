<?php

  require_once("classes\produtos.php");
  require_once("models\produtos.php");

  use \classes\Produto; // chamando a namespace
  // use \models\Produto as ProductModel ;

  //$produto = new ProductModel();
  //$produto = new \classes\Produto(); //Podemos utilizar o namespace aqui ou através do USE.
  $produto = new Produto();
  $produto -> mostrarDetalhe();
?>
