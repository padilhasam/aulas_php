<?php
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "samuel06");
  $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
    $login = "Panda";
    $senha = "faminto";
  $stmt->bindparam(":LOGIN", $login);
  $stmt->bindparam(":PASSWORD", $senha);
  $stmt->execute();
  echo "Valor Inserido!!";
?>
