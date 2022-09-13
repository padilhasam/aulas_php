<?php
    //Criando uma consulta no banco de dados.

    //Conexão
    $conn = new mysqli("localhost", "root", "samuel06", "dbphp7");
        if($conn -> connect_error){
            echo "ERRO: " . $conn -> connect_error;
        }
    $resultado = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");
    while($row = $resultado -> fetch_assoc()){
        echo json_encode($row);
    }
?>