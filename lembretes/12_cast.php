<?php

    //Cast Exemplo 01
    $nome = $_GET["nome"];
    $idade = (int)$_GET["idade"]; //Cast do valor para Inteiro.

        var_dump($nome);
        echo "<br>";
        var_dump($idade);
        echo "<br>";

    //Cast Exemplo 02
        function pessoa($ano):int{
             $idade = ("2022" - $ano);
             return $idade;          
        }
        var_dump(pessoa("1986"));

?>