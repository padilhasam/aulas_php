<?php
  $conn = new mysqli("localhost", "root", "samuel06", "dbphp7");
    if($conn->connect_error){
      echo "Error: " . $conn->connect_error;
    }else{
      echo "Conectado!";
    }
  $resultado = $conn->query("SELECT * FROM tb_usuarios");
    $data = array();
    while($row = $resultado->fetch_assoc()){ //fecth_assoc() ou fetch_array(MYSQLI_ASSOC);
      array_push($data, $row);
      //var_dump($row);
    }
    echo json_encode($data);
?>
