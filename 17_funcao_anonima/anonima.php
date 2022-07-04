<?php

  //TESTE DE FUNÇÃO ANÔNIMAS

  function teste($callback){
    $callback();
  };
  teste(function(){
    echo "MENSAGEM DO ALÉM!!";
  });

  echo "<hr>";

  $funcao = function($msg){
    echo $msg;
  };
  $funcao("CASO VARGINHA!!");

?>
