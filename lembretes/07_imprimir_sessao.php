<?php
   
   require_once("05_sessao.php");
    
    echo "ID de Sessão => " . session_id() . "<br>";
    echo "Nome => " . $_SESSION["nome"] . "<br>";
    echo "Idade => " . $_SESSION["idade"] . "<br>";
    echo "Signo => " . $_SESSION["signo"] . "<br>";
    
?>