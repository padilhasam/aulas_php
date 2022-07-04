<?php
  //Código que não funciona corretamente
    $media_atual = 50.0;
    function recuperacao($prova, $trabalho){
      $nota_recup = ($prova + $trabalho)/2;
      return $nota_recup;
    }
    function atualiza_nota(&$nota_antiga, $nota_nova){
      $nota_antiga = ($nota_antiga + $nota_nova)/2;
      return $nota_antiga;
    }
    echo "Média atual: $media_atual <br>";
    echo "Nota da Recuperação: " . recuperacao(78.3, 82.8) . "<br>";
    echo "Media após recuperação: " . atualiza_nota($media_atual, recuperacao()) . "<br>";
    echo "Media do Semestre: $media_atual <br>";
?>
