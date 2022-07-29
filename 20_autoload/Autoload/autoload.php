<?php

    function __autoload($nomeClasse){
        require_once("$nomeClasse.php");
    }

    $carro = new DelRey();
    $carro -> trocaMarcha(5);

?>