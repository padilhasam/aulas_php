<?php

  function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
  }
  $carro = new DelRey();
  $carro -> acelerar(200);

  /* 
  
    ***************** OBSERVAÇÕES ***************** 
    1) Cada CLASSE deve ficar em um arquivo separado, e cada arquivo deve ser nomeado com o mesmo nome da CLASSE.
    Ex.: classe -> DelRey() ; nome do arquivo -> DelRey.php
    
    2) Se esta classe for uma herança (extends) de uma outra classe, a classe pai também deverá ficar em um arquivo separado com o seu nome.

    3) Em um arquivo separado das classes criamos uma função __autoload(). Esta função necessita de um parâmetro, o qual receberá o nome da classe que deverá carregar.
    
    4) Ao instanciarmos a classe desejada, a função __autoload se inicia e o seu parâmetro receberá como valor o nome da classe instanciada.
    
    Ex: 
    $carro = new DelRey() -> Instanciei a classe DelRey
    
    function __autoload($nomeClasse){
      require("$nomeClasse.php");
    }
    
    Inicia-se o autoload e o parâmetro $nomeClasse receberá como valor "DelRey", ficando assim:

     function __autoload(DelRey){
      require("DelRey.php");
    }

    5)Após carregar a classe DelRey, o __autoload verifica que ela é uma herança da classe Automovel, carregando ela também, sem a necessidade
    de um novo require;

    6) Este método só funciona quando as classes estiverem na mesma pasta (diretório) que o arquivo da função __autoload.

    7) para carregar classes que estejam em outras pastas, utilizamos a função spl_autoload_register(). -> VERIFICAR "AULA32_1.PHP"

  */

?>
