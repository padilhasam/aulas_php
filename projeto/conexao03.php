<?php
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","samuel06");
  $stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
  $stmt -> execute();
  $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($resultado);
    echo "<br><br>";
  foreach($resultado as $row){
    //print_r($row);
    //echo "<br>";
    foreach($row as $key => $values){
      echo "<strong>" . $key . "</strong>" . $values . "<br>";
    }
      echo "<br>";
  }
?>
