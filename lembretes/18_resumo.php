<fieldset>
    <form method="get" action="#">
        Nome:<input type="text" name="Nome" placeholder="Digite o seu nome...">
        Data de Nascimento:<input type="date" name="Data de Nascimento">
        <input type="submit" value="Enviar">
    </form>
</fieldset>

<?php
    //RESUMO

    echo "<br>";

    //Formulário

    if(isset($_GET)){
        foreach($_GET as $key => $value){
            echo "Nome do campo: " . $key . "<br>";
            echo "Valor do Campo: " . $value . "<br>";
            echo "<hr>";
        }
    }

    echo "<br>";

    //Select

    echo "<select>";
        for($data = date("Y"); $data >= date("Y")-100; $data--){
            echo '<option name="$data">' . $data . "</option>"; 
        }
    echo "</select>";

    echo "<br><br>";

    //Constantes

    define("SERVIDOR", "127.0.0.1");

    echo "Servidor -> " . SERVIDOR . "<br><br>";

    //Array Constante

    define("SERVIDOR", ["127.0.0.1", "root", "123456", "bdteste"], true);
    print_r(servidor);

    echo "<br><br>";

    //Somar N valores
    
    function somar(int...$valores){
        print_r(array_sum($valores));
    }
    somar(10,20,30);

    echo "<br><br>";

    //Recursividade

    function tabuada($numeroTabuada, $numero = 1){
        if($numero <= 10){
            echo $numeroTabuada . " X " . $numero . " = " . $numeroTabuada * $numero . "<br>";
            $numero++;
            tabuada($numeroTabuada, $numero);
        }
    }
    tabuada(5);

    echo "<br><br>";

    //Função Anônima

    function teste($callback){
        $callback();
    }
    teste(function(){
        echo "Bom Dia";
    });
    
    echo "<br><br>";

    $fn = function($msg){
        echo $msg;    
    };
    $fn("Boa Tarde!!");

    echo "<br><br>";

    //Função data() e Time()

    setlocale(LC_ALL,"pt_BR", "pt_BR.utf-8", "portuguese");
    
    echo "Timestamp atual -> " . time() . "<br>";
    echo "TimeStamp Nascimento Samuca -> " . strtotime("2016-01-06") . "<br>";
    echo "Dia da semana Nascimento Samuca -> " . date("l d/m/y", 1452034800) . "<br><br>";

    //JSON

    $pessoa = array();
    array_push($pessoa, array(
        "Nome" => "Jeferson",
        "Idade" => 35,
        "Signo" => "Escorpião",
        "Time" => "Santos"
        //PERGUNTAR COMO INSERIR UMA $KEY E UM $VALUE DENTRO DE UM ARRAY SEM PRECISAR ADICIONAR OUTRO ARRAY.
    ));  
    print_r($pessoa);
    echo "<br>";
    echo json_encode($pessoa) . "<br>";

    $json = '[{"Nome":"Jeferson","Idade":35,"Signo":"Escorpi\u00e3o","Time":"Santos"}]';
    print_r(json_decode($json, true));
    echo "<br><br>";

    //Passagem de valor por referência

    //$carros = array();
    
    $carros = array(
        "Marca" => "FIAT",
        "Modelo" => "147",
        "Cor" => "Branco",
        "Ano" => 1975
    );
    /*
       array_push($carros, array(
            "Marca" => "FIAT",
            "Modelo" => "147",
            "Cor" => "Branco",
            "Ano" => 1975
       )); 
    */
    foreach($carros as $key => &$value){
        if(gettype($value) === 'integer'){
            $value += 15;
        }
    }     
    print_r($carros);
    echo "<br><br>";

    //Função que recebe vários argumentos

    function argum(){
        $argumentos = func_get_args();  
        return $argumentos;
    }
    print_r(argum("Jeferson ", "Samuel ", "Aline ", "Gabriel ", "Mãe ", "Pai"));
    //Obs.: Não é necessário incluir variável dentro de argum();
    //Obs.: Por estamos passando vários argumentos, a função func_get_args cria um array e coloca todos os argumentos dentro. Potanto, usamos print_r para exibir


?>