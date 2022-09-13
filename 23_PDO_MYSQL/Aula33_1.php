<?php
    //Inserindo dados no banco MYSQL com PDO

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "samuel06");
    $stmt = $conn -> prepare('INSERT INTO tb_usuarios(deslogin, dessenha)VALUES("samucapadilha", "23%&@10")');
    $stmt -> execute();
?>