<?php
    include ("Controladores/Contactos_CTRLR.php");
    
    echo Formato_UL("p") . "<br>";
    echo Select("p") . "<br>";
    $datos_leidos = Recupera_Por_Id("4");
    if ($datos_leidos  != null){
        echo "ID: " . $datos_leidos[0] . 
            " Nombre:  " .  $datos_leidos[1] . 
            " Teléfono: " .  $datos_leidos[2] . "<br>"; 
    }
    echo "<hr>";
    echo Insertar("Angel", "987481");
    echo "<hr>";
    echo "Se ha modificado: " . Modificar(15, "Agapito", "135468");
    echo "<hr>";
    echo "Se ha Borrado: " . Borrar(1);
    echo "<hr>";
    echo "Inserción: " . Insertar_Modificar_Borrar("i", null, "lola", "345546");
    echo "<hr>";
    echo "Modificación: " . Insertar_Modificar_Borrar("m", 2, "lola", "345546");
    echo "<hr>";
    echo "Borrado: " . Insertar_Modificar_Borrar("b", 18, null, null);    
    echo "<hr>";
    echo "Inserción: " . Insertar_Modificar_Borrar_Array("i", [null, "jota", "987345546"]);    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            echo Formato_Tabla("p");
        ?>
    </div>
</body>
</html>