<?php
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "samuel06");
  $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = :ID");
    $id = 6;
  $stmt->bindparam(":ID", $id);
  $stmt->execute();
  echo "Valor Deletado!";
?>
