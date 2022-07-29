<?php

//Método 1

//Carrega as Classes Normais
function carregar($nomeClasse){
    if(file_exists("$nomeClasse.php") === true){
        require_once("$nomeClasse.php");
    }
} 
spl_autoload_register("carregar");

//Carrega as Classes Abstratas
function carregarAbstratas($nomeClasse){
    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php") === true){
        require_once("Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
    }
}
spl_autoload_register("carregarAbstratas");

$carro = new DelRey();
$carro -> acelerar(80);

?>