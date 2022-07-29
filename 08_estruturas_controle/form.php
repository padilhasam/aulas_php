<fieldset>
    <form action="#" methot="get">
        Nome:<input type="text" name="Nome">
        Data de Nascimento:<input type="date" name="Data de Nascimento">
        <input type="submit" value="Enter">
    </form>
</fieldset>
<?php
    if(isset($_GET)){
        foreach($_GET as $key => $value){
            echo "Nome do Campo: " . $key . "<br>";
            echo "Valor do Campo: " . $value . "<br>";
            echo "<br>";
        }
    }

?>