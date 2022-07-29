<fieldset>
    <form method="get" action="#">
        Nome: <input type="text" name="Nome" placeholder="Nome"> 
        Data de Nascimento: <input type="date" name="Data de Nascimento" placeholder="Data de Nascimento">
        <input type="submit" value="Enter">
    </form>
</fieldset>

<?php
    //imprimindo os valores digitados no formulário via $_GET.

    if(isset($_GET)){
        foreach($_GET as $key => $value){
            echo "Nome do Campo: " . $key . "<br>";
            echo "Valor do Campo: " . $value . "<br>";
            echo "<hr>";
        }
    }

?>