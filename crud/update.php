<?php
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "samuel06");
  $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuarios = :ID");
    $login = "Gabriel";
    $senha = "fominha";
    $id = 12;
  $stmt->bindparam(":LOGIN", $login);
  $stmt->bindparam(":PASSWORD", $senha);
  $stmt->bindparam(":ID", $id);
  $stmt->execute();
  echo "Valor Alterado!!";
?>
