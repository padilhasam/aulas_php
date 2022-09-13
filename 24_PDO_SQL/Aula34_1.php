<?php
    //fazendo um insert no banco SQL
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;connectionPooling=0","sa","samuel06");
    $stmt = $conn -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES('samucapadilha', '23%&@10')");
    $stmt -> execute();
?>