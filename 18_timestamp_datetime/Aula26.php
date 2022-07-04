<?php
  date_default_timezone_set('America/Sao_Paulo'); //Atualiza o fuso horário do servidor local.

  //FUNÇÃO DATE, TIME E UNIX TIMESTAMP;

  echo "Ano:" . date("Y") . "<br>";
  echo "Data 1: " . date("d/m/y") . "<br>";
  echo "Data 2: " . date("d/m Y H:i:s") . "<br>";
  echo date("h:i:s") . "<br>";

  /* OBS: A função date não é sensível ao SETLOCALE(); */

 echo time() . "<br>"; // -> Retorna o TIMESTAMP.
 echo date("d/m/Y H:i:s", 1638142024) . "<br>"; // Irá fixar na data e hora do timestamp;

 // CONVERTER UMA STRING DATA EM TIMESTAMP

 echo strtotime("2001-09-11") . "<br>"; // modelo de data americana
 $nascimento = strtotime("1986-10-24");
 echo date("l d/m/Y", $nascimento) . "<br>";
 // a função STRTOTIME aceita expressões.

 //OUTROS EXEMPLOS DE USO DO STRTOTIME

 echo strtotime("now") . "<br>";
 echo strtotime("yesterday") . "<br>";
 echo strtotime("+1 day") . "<br>";
 echo strtotime("+1 week") . "<br>";
 echo strtotime("+3 hours") . "<br>";

?>
