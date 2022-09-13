<?php
    //Criando uma consulta no banco MYSQL

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "samuel06");
    $stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt -> execute();
    $results = $stmt -> fetchAll();
    foreach($results as $result){
        foreach($result as $key => $values){
            echo "Campo: " . $key . "<br>";
            echo "Valor: " . $values . "<br>";
        }
        echo "=======================================<br>";
    }
?>