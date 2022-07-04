<?php
  $conn = new mysqli("localhost", "root", "samuel06", "dbphp7");
    if($conn->connect_error){
      echo "Error: " . $conn->connect_error;
    }else{
      echo "Conectado!";
    }
  $stmt = $conn->prepare('INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)');
  $stmt->bind_param("ss", $login, $senha);
    $login = "darth_vader";
    $senha = "skywalker";
  $stmt->execute();

?>
