<?php
  spl_autoload_register(function($nameClass){
      var_dump($nameClass);
      echo "<br>";

      $diretorio = "Class";
      $arquivo = $diretorio . DIRECTORY_SEPARATOR . $nameClass . ".php";

      if(file_exists($arquivo)){
        require_once($arquivo);
      }
  });
?>
