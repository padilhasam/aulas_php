<?php
    //Teste de valor por referencia

    $valor1 = 50;
    echo $valor1 . "<br>";

    function trocaValor(&$valor2){
        $valor2 += 25;
        return $valor2; 
    }

    trocaValor($valor1) . "<br>";
    echo $valor1;
 
?>