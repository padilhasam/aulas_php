<?php
    // 1) HIERARQUIA RECURSIVA

    $hierarquia = array(
        array(
            "Função" => "CEO",
            "Subordinado" => array(
                array(
                    "Função" => "Diretor Tecnologia",
                    "Subordinado" => array(
                        array(
                            "Função" => "Analista de Sistemas",
                            "Subordinado" => array(
                                array(
                                   "Função" => "Técnico de TI"
                                )
                            )
                        ),
                        array(
                            "Função" => "Analista de Suporte",
                            "Subordinado" => array(
                                array(
                                    "Função" => "Suporte Técnico N2"
                                )
                            )
                        )
                    )
                ),
                array(
                    "Função" => "Diretor Financeiro",
                    "Subordinado" => array(
                        array(
                            "Função" => "Analista Financeiro",
                            "Subordinado" => array(
                                array(
                                    "Função" => "Assitente de Contas a Pagar"
                                )
                            )
                        )
                    )
                )
            )
        )
    );
    function estrutura($cargos){
        $html = "<ul>";
        foreach($cargos as $cargo){
            $html .= "<li>";
            $html .= $cargo["Função"];
            if(isset($cargo["Subordinado"]) && count($cargo["Subordinado"]) > 0){
                $html .= estrutura($cargo["Subordinado"]);
            }
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }
    echo estrutura($hierarquia) . "<br>";
    
    // 2) TABUADA RECURSIVA

    function tabuada($numeroTabuada, $numero = 1){
        if($numero <= 10){
            echo $numeroTabuada . " X " . $numero . " = " . $numeroTabuada * $numero . "<br>";
            $numero++;
            tabuada($numeroTabuada, $numero);
        }
    }
    tabuada(3);
    echo "<br>";

    // 3) TABUADA SEM RECURSIVIDADE
    function tabuadaNova($numTab){
        for($num = 1; $num <= 10; $num++){
            echo $numTab . " X " . $num . " = " . $numTab * $num . "<br>";
        }
    }
    tabuadaNova(5);
    echo "<br>";

    // 4) FUNÇÃO ANÔNIMA

    function teste($callback){
        $callback();
    }
    teste(function(){
        echo "Olá Novo Mundo!! <br>";
    });

    // 5) NOVA FUNÇÃO ANÔNIMA

    $fn = function($msg){
        var_dump($msg);
    };
    $fn("Mensagem de Teste!");

?>