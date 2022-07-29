<?php
  date_default_timezone_set('America/Sao_Paulo'); //Atualiza o fuso horário do servidor local.

  //FUNÇÃO DATE, TIME E UNIX TIMESTAMP;
  //===========================================================================================================================

  //DATE -> Exibe a data e hora conforme parâmetros adicionados a ele. OBS: A função date não é sensível ao SETLOCALE();

  echo "Ano:" . date("Y") . "<br>"; //Exibe o Ano com 4 dígitos (yyyy);
  echo "Data 1: " . date("d/m/y") . "<br>"; //Exibe a data no padrão dd/mm/yy
  echo "Data 2: " . date("d/m Y H:i:s") . "<br>"; //Exibe data e hora no padrão dd/mm/yyyy hh:mm:ss (24hs)
  echo "Hora: " . date("h:i:s") . "<br>"; //Exibe Hora no padrão hh:mm:ss (12hs) 

  //TIME -> Retorna o TIMESTAMP

  echo "TimeStamp de Agora -> " . time() . "<br>"; // -> Retorna o TIMESTAMP do dia do meu aniversário.
  echo date("d/m/Y H:i:s", 1638142024) . "<br>"; // Irá fixar na data e hora do timestamp;

 // CONVERTER UMA STRING DATA EM TIMESTAMP

 echo  "TimeStamp Aniversário -> " . strtotime("1986-10-24") . "<br>"; // Data no modelo de data americano

 $nascimento = strtotime("1986-10-24");
 echo "Dia da semana + Data Nascimento ->" . date("l d/m/Y", $nascimento) . "<br>"; //Parâmetro L exibe o dia da semana.
 echo date("l") . "<br>";

  //DIA DA SEMANA EM PORTUGUES
 
  setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
  echo "Dia da semana em Poruguês -> " . ucwords(strftime("%A")) . "<br>"; // Traz o dia da semana e o mês em portugês.

 //A função STRTOTIME aceita expressões. VEJA OUTROS EXEMPLOS DE USO DO STRTOTIME

 echo strtotime("now") . "<br>";
 echo strtotime("yesterday") . "<br>";
 echo strtotime("+1 day") . "<br>";
 echo strtotime("+1 week") . "<br>";
 echo strtotime("+3 hours") . "<br>";

?>
