<?php
    //Função Anônima
    function teste($callback){
        $callback();
    }
    teste(function(){
        echo "Olá Mundo!!";        
    }); //Função Anônima que serve de atributo para a função teste;
    
    echo "<hr>";

    //Função Anônima - Exemplo 02;

    $fn = function($a){
        echo $a;
    };//Não esquecer do ponto e vírgula para o fechamento, visto que a função esta dentro de uma variável.
    $fn("Bom Dia!!");

?>