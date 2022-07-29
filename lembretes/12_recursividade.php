<?php
    //Recursividade - Exemplo 01 

    $hierarquia = array(
        //Início CEO
        array(
            "Função" => "CEO",
            "Subordinado" => array(
                //Início Diretor Comercial
                array(
                    "Função" => "Diretor Comercial",
                    "Subordinado" => array(
                        //Início Supervisor de Vendas
                        array(
                            "Função" => "Supervisor de Vendas",
                            "Subordinado" => array(
                                //Início Analista Comercial
                                array(
                                    "Função" => "Analista Comercial"
                                ),
                                //Fim Analista Comercial
                                //Início Vendedor
                                array(
                                    "Função" => "Vendedor"
                                )
                                //Fim Vendedor
                            )
                        )
                        //Fim Supervisor de vendas
                    )
                )
                //Fim Diretor
            )
        )
        //Fim CEO
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


    //Recursividade - Exemplo 02

    function tabuada($numeroTabuada, $numero = 1){
        if($numero <= 10){
            echo $numeroTabuada . " X " . $numero . " = " . $numeroTabuada * $numero . "<br>";
            $numero++;
            tabuada($numeroTabuada, $numero);
        }
    }
    tabuada(6);
?>