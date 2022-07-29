<?php
    //Função para somar N valores
    function somar(int...$valores){
        return array_sum($valores);
    }
    echo somar(10,20,35);
?>