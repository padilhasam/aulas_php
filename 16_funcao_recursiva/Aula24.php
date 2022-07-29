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
    $html = "<ul>"; // Abre a tag da UL (<ul>);

    //Pega a hierarquia e coloca cada cargo dentro da variável $cargo
    foreach ($cargos as $cargo){
      $html .= "<li>"; //Abre a tag LI (<li>);
      $html .= $cargo['Função']; // Coloca o cargo dentro da LI (<ul><li>CEO);

        if(isset($cargo['Subordinado']) && count($cargo['Subordinado']) > 0){
          $html .= estrutura($cargo['Subordinado']);
        }//Verifica SE EXISTE subordinados. Caso exista, repetirá o processo de abertura da UL e LI e adicionará o subordinado dentro.
        //Caso não exista subordinado, mas exista outro cargo, executará a linha 42 e 43, criando uma outra LI e adicionando o cargo dentro.

      $html .= "</li>"; //Fecha a tag LI (</li>);
    }

      $html .= "</ul>"; //Fecha a tag UL (</ul>);

      return $html; //Retorna o resultado final após todo o processo de concatenação;
  }
      echo estrutura($hierarquia);

  ?>
