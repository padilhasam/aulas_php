<?php
    //Botão para selecionar ano
    echo "<select>";
        for($i = date("Y"); $i >= date("Y")-50; $i--){
            echo '<option value"$i">' . $i .'</option>';
        }
    echo "</select>";

?>