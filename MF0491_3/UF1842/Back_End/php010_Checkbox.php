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

<?php
    echo "&lt;&lt;a la izquierda &gt&gt"; // Muestra <
   // echo "<< a la izquierda"; //Muestra << a la izquierda

    $name = "Álvaro";
    echo strlen($name); // Muestra 7 caracteres
    $minusculas = mb_strtolower($name);
    echo $minusculas ; // Muestra Álvaro

    $name = "Alvaro";
    echo strlen($name); // Muestra 6 caracteres
?>