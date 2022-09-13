<?php
    //Conexão com banco de dados MySQL utilizando Orientação a Objetos
    $conn = new mysqli("localhost", "root", "samuel06", "dbphp7");
        if($conn -> connect_error){
            echo "Erro: " . $conn -> connect_error;
        }
    $statement = $conn -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (? , ?)");
    $statement -> bind_param("ss", $login, $senha);
    $login = "Miranha";
    $senha = "peterparker2005";
    $statement -> execute();
    
?>