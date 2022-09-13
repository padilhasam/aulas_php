<?php
    
    $conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "samuel06");
    //$conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt -> execute(); //Se utilizar $conn -> query, não tem necessidade de executar.
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll traz todas as linhas do banco sem a necessidade de colocar dentro de um WHILE.
        
        foreach($results as $linha){
            foreach($linha as $key => $value){
                echo "<strong> Coluna </strong>" . $key . "<br>";
                echo "<strong> Valor -> </strong>" . $value . "<br>";
            }
            echo "====================================================<br>";
        }
        // 1º foreach pega todos os resultados e coloca cada um em uma linha.
        // 2 foreach pega cada linha e organiza a chave e o valor de cada linha.

    //echo json_encode($results);

?>