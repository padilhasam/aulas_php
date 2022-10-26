<?php
    //Coisas importantes de se guardar

    date_default_timezone_set('America/Sao_Paulo');

    //Null Coalesce

    $a = NULL; $b = NULL; $c = 54;

    echo $a ?? $b ?? $c;
    echo "<br>";

    //Operador Ternário

    $idade = 18;

   echo ($idade <= 17)? "Menor Idade" : "Maior idade";
   echo "<br>";

   $hora = time();
   echo $hora . "<br>";
   $dt_nasc = strtotime("1986-10-24");
   echo $dt_nasc . "<br>";
   $hoje = strftime('%D', 530506800);
   echo $hoje . "<br>";
   $data_nascimento = date("d/m/Y", 530506800);
   echo $data_nascimento;
?>