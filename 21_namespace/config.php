<?php
  //namespace
  spl_autoload_register(function($nameClass){

    var_dump($nameClass);

    echo "<br>";

    $dirClass = "Class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
      if(file_exists($filename)){
        require_once($filename); //Traz o arquivo contendo a Classe (cadastro.php)
      }
  });
?>
