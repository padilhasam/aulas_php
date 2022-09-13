<?php
    //INSERINDO DADOS NO BANCO MYSQL 

    $conn  = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "samuel06");
    $stmt = $conn -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES(:LOGIN, :PASSWORD)");
    $stmt -> bindparam(":LOGIN", $login);
    $stmt -> bindparam(":PASSWORD", $senha);
    $login = "teste@2022";
    $senha = "versaonova";
    $stmt -> execute();
    echo "Valor inserido com sucesso!!"
    
?>