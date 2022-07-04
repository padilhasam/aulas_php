<?php

  //FUNÇÕES ANÔNIMAS

  //PRIMEIRO EXEMPLO
  function teste($callback){
    $callback(); //Processo Lento;
  }
  teste(function(){
    //a função $callback recebe outra função como parâmetro, e está função está executando um "echo";
    echo "Terminou!! <br>";
  });

  //SEGUNDO EXEMPLO
  $fn = function($a){
    var_dump($a);
  };
  $fn("Olá Mundo!!"); // Como a função não tem nome, e está dentro da variável FN, passamos o parâmetro através da variável.

  /*
    1) É um função que não possui um nome;
    2) Também não possui um RETURN;
    3) Colocar uma função dentro de uma variável

  */
?>
