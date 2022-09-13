<?php
    //Criando uma conexão com o banco SQL

    /*
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;connectionPooling=0","sa","samuel06");
    $stmt = $conn -> prepare('SELECT * FROM tb_usuarios ORDER BY deslogin');
    $stmt -> execute();
        $results = $stmt -> fetchAll();
        foreach($results as $result){
            foreach($result as $key => $value){
                echo "Campo: " . $key . "<br>";
                echo "Valor: " . $value . "<br>";
            }
            echo "======================================<br>";
        }
    */

    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;connectionPooling=0","sa","samuel06");
    $stmt = $conn -> query('SELECT * FROM tb_usuarios ORDER BY deslogin');
    $results = $stmt -> fetchAll();
        foreach($results as $row){
            foreach($row as $key => $value){
                echo "Campo: " . $key . "<br>";
                echo "Valor: " . $value . "<br>";
            }
            echo "========================================<br>";
        }
?>