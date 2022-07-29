<?php
    //Atualizando fuso horário do servidor

    date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");


    echo "Exibe a data de Hoje -> ". date("d/m/Y H:i:s") . "<br>";
    echo "Exibe o dia da semana atual -> " . ucwords(strftime("%A")) . "<br>" ; //Diferente da função date(), o strftime é sensível ao SETLOCALE, portanto é traduzido para PT-BR
    echo "Exibe o timestamp da data e hora atuais -> " . time() . "<br>";
    echo "Exibe o timestamp do meu aniversário ->" . strtotime("1986-10-24") . "<br>";
    echo "Exibe a data e o dia da semana do meu aniversário -> " . date("l d/m/Y", 530506800);


?>