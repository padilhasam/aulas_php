<?php
    $pessoa = array(
        "Nome" => "Jeferson",
        "idade" => 35,
        "Signo" => "Escorpião",
        "Filho" => "Samuel",
        "Idade" => 6
    );
    foreach($pessoa as $key => &$value){
        if(gettype($value) === "integer"){
            $value += 12;
        }
        echo $key . " = " . $value . "<br>";
    }
    echo "<br>";
    print_r($pessoa);

    //Obs.: Não funcionou quando utilizado um array de array;
    
    
?>