<?php

// 1) Método 1 - Carregou classes da mesma pasta

  function incluirClasses($nomeClasse){
    if(file_exists("$nomeClasse.php") === true){
      require_once("$nomeClasse.php");
    }
  }
  spl_autoload_register("incluirClasses");

// 2) Método 2 - Carregou classes da pasta "ABSTRATAS"
  
  spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstratas". DIRECTORY_SEPARATOR . "$nomeClasse.php") === true){
      require_once("Abstratas". DIRECTORY_SEPARATOR . "$nomeClasse.php");
    }
  });

  $carro = new DelRey();
  $carro -> frenar(50);

?>
