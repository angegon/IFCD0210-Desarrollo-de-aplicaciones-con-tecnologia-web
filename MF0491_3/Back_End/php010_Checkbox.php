<?php
    if (isset($_GET['intereses'])){
        $interes = $_GET['intereses'];
        //print_r($interes);
        echo "Intereses: <br>";
        for ($i=0; $i<count($interes); $i++){
            echo $interes[$i]."<br>";
        }
    }
?>

<form action="">
    Intereses<br>
    Salud<input type="checkbox" name="intereses[]" value="   cañón  "><br>
    Dinero<input type="checkbox" name="intereses[]"  value="dinero"><br>    
    Amor<input type="checkbox" name="intereses[]"  value="amor"><br>
    <input type="submit" value="Enviar">
</form>