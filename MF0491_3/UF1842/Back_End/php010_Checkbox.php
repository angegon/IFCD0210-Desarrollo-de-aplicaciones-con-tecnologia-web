<?php
    if (isset($_GET['intereses'])){
        $interes = $_GET['intereses'];
        print_r($interes); //Imprime el array entero, si lo queremos uno a uno utilizar un for
    }
?>
<form action="">
    Intereses <br>
    Salud <input type="checkbox" name="intereses[]" value="salud"><br>
    Dinero <input type="checkbox" name="intereses[]" value="dinero"><br>
    Amor <input type="checkbox" name="intereses[]" value="amor"><br>
    <input type="submit" value="Enviar">
</form>