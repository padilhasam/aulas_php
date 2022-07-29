<?php

    //Método 2
    
    //Carrega as Classes Normais
    spl_autoload_register(function($nomeClasse){
        if(file_exists("$nomeClasse.php") === true){
            require_once("$nomeClasse.php");
        }
    });

    //Carrega as Classes Abstratas
    spl_autoload_register(function($nomeClasse){
        if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php") === true){
            require_once("Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
        }
    });

    $carro = new DelRey();
    $carro -> frenar(50);


?>