<?php
    //CLASSE DATETIME();

    $data = new DateTime();
    echo $data -> format("d/m/Y H:i:s") . "<br>"; //Acessa o método formato da DATA;

    $intervalo = new DateInterval("P15D");
    $data -> add($intervalo);

    echo $data -> format("d/m/Y H:i:s") . "<br>";

?>