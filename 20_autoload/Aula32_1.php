<?php

  // Implementar Classes que estão em várias pastas com AUTOLOAD.

  //EXEMPLO 1 - Não encontrou as classes abstratas
  function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse . ".php") === true){
      require_once($nomeClasse . ".php");
    }
  }
  spl_autoload_register("incluirClasses");

  // EXEMPLO 2 - Indicou o caminho das classes abstratas
  spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
      require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
  });

  $carro = new DelRey();

  $carro -> acelerar(80);

?>
