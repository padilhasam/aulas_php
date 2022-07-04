<?php

  // Criando a conexão com o banco;
   $conn = new mysqli("localhost", "root", "samuel06", "dbphp7"); //Instancia a um objeto criando uma conexão;

   //Verifica se retorna algum erro
     if ($conn -> connect_error){
       echo "Error: " . $conn -> connect_error;
     }else{
       echo "Conexão realizada com sucesso!";
     }

     //Prepara o insert dentro do banco
     $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)");
     $stmt -> bind_param("ss", $login, $senha);
     // 1) Substitui as interrogações contidas no VALUES;
     // 2) Primeiro iremos inserir o tipo e depois o valor. Neste caso ss para string e string, e o valor são as variáveis $login e $senha.
     // 3) $stmt = statement;

     //Passa os parâmetros que serão usados pela função bind_param();
     $login = "user";
     $senha = "samuel";

     //Executa a ordem 66 (brincadeira rsrs na verdade ele executa o prepare).
     $stmt -> execute()
?>
