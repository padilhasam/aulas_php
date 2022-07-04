<?php
  $conn = new PDO("mysql:dbname=dphp7;host=localhost","root","samuel06");
  $conn->beginTransaction(); // Inicia a Transação
  $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = /*:ID*/ ? ");
  $id = 4;
  //$stmt->bindparam(":ID", $id");
  $stmt->execute(array($id));
  //$conn->rollback(); // Cancela a Transação
  $conn->commit(); // Confirma a Transação.
 //Interessante utilizar com o Try Catch.
?>
