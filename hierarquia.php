<?php
    //AULA24 - FUNÇÕES RECURSIVAS
  $hierarquia = array(
    array(
      "Função" => "CEO",
      "Subordinado" => array(
        array(
          "Função" => "Gerente Administrativo",
          "Subordinado" => array(
            array(
              "Função" => "Assistente Administrativo"
            ),
            array(
              "Função" => "Auxiliar Administrativo"
            )
          )
        )
      )
    ),
    array(
      "Função" => "CTO",
      "Subordinado" => array(
          array(
            "Função" => "Gerente de TI",
            "Subordinado" => array(
              array(
                "Função" => "Analista de Suporte"
              ),
              array(
                "Função" => "Programador Fullstack"
              )
            )
          )
      )
    )
  );
  function estrutura($cargos){
    $html = "<ul>";
    foreach ($cargos as $cargo){
      $html .= "<li>";
      $html .= $cargo['Função'];
      if(isset($cargo['Subordinado']) && count($cargo['Subordinado']) > 0){
        $html .= estrutura($cargo['Subordinado']);
      }
      $html .= "</li>";
    }
    $html .= "</ul>";
    return $html;
  }
  echo estrutura($hierarquia) . "<br>";

  echo "<hr>";

  array_push($hierarquia,array(
    "Função" => "Presidente CCE",
    "Subordinado" => array(
        array(
          "Função" => "Gerente de CCE",
          "Subordinado" => array(
            array(
              "Função" => "Oreia Seca de CCE"
            ),
            array(
              "Função" => "Oreia Seca do Oreia Seca"
            )
          )
        )
    )
  )
);
  echo estrutura($hierarquia);
?>
