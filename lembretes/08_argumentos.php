<?php
    //Função que recebe muitos argumentos.

    function argumentos(){
        $argumentos = func_get_args();
        return $argumentos;
    }

  var_dump(argumentos("Jeferson", 35, "Escorpião", "Samuel"));

?>