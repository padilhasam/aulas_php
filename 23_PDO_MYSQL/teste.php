<?php
    //CREATE com classe mysqli na conexão - Ex 01
    /*
        $conn = new mysqli("localhost", "root", "", "dbphp7");
            if($conn -> connect_error){
                echo "ERRO: " .$conn -> connect_error;
            }
        $stmt = $conn -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES(?, ?)");
        $stmt -> bind_param("ss", $login, $senha);
        $login = "Spawn2022";
        $senha = "Al_Simons";
        $stmt -> execute();
    */
    
    //CREATE com classe mysqli na conexão - Ex 02
    /*
        $conn = new mysqli("localhost", "root", "", "dbphp7");
                if($conn -> connect_error){
                    echo "ERRO: " . $conn -> connect_error;
                }
        $conn -> query('INSERT INTO tb_usuarios(deslogin, dessenha)VALUES("Programador", "javascript10")');
    */

    //READ com classe mysqli na conexão - Ex 01
    /*            
        $conn = new mysqli("localhost", "root", "", "dbphp7");
                if($conn -> connect_error){
                    echo "ERRO: " . $conn -> connect_error;
                }
        $resultado = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");
        while($row = $resultado -> fetch_array(MYSQLI_ASSOC)){
            echo json_encode($row);
        }
    */

    //CREATE com PDO na conexão - Ex 01
    /*
    
        $conn =  new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "samuel06");
        $stmt  = $conn -> prepare('INSERT INTO tb_usuarios(deslogin,dessenha)VALUES("Deadpool1986", "samucameuamor")');
        $stmt -> execute();
    
    */

    //CREATE com PDO na conexão - Ex 02
        $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "samuel06");
        $conn -> query('INSERT INTO tb_usuarios(deslogin,dessenha)VALUES("Deadpool1986", "samucameuamor")');

    //READ com PDO na conexão - Ex 01
    /*
        $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root", "");
        $stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
        $stmt -> execute();
        $results = $stmt -> fetchAll();
        foreach($results as $result){
            foreach($result as $key => $value){
                echo "Coluna: " . $key . "<br>";
                echo "Valor: " . $value . "<br>";
            }
            echo "=====================================<br>";
        }
    */

    //READ com PDO na conexão - Ex 02
    /*
        $conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root", "");
        $stmt = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");
        $results = $stmt -> fetchAll();
        foreach($results as $result){
            foreach($result as $key => $value){
                echo "Coluna: " . $key . "<br>";
                echo "Valor: " . $value . "<br>";
            }
            echo "=====================================<br>";
        }
    */
    ?>