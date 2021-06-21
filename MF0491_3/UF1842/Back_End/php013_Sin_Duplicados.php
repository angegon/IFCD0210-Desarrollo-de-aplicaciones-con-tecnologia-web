<?php
    $mensaje_error = "&nbsp;";
    // Almacenar los datos en una array php
    $filedescriptor = fopen("php013_Fichero.txt", "r");
    //Crear el array vacio
    $datos = array();

    while(!feof($filedescriptor)){
        $nombre = fgets($filedescriptor);
        if ($nombre != ""){
            $datos[] = trim($nombre)
        }
    }
    fclose($filedescriptor);

    /**
     * Si existe nombre comprobar si ya está en la lista
     * sino está añadirlo
     * si está dar mensaje al usuario
     */
    $recibido = "";
    if (isset($_POST['nombre'])){
        $recibido = $_POST['nombre'];
        $encontrado = false;
        for($i = 0; $i < count($datos); i++){
            if(strcasecompare($recibido , $datos[i]){
                $encontrado = true;
                breack;
            }
        }
        if($encontrado){
            // Notificamos al usuario de que  ya está añadido
            $mensaje_error = "Ese nombre ya existe";
            echo $mensaje_error;
        } else {
            // Lo añado
            $fd = fopen("php013_Fichero.txt", "a");

            fwrite($fd, PHP_EOL, $recibido);

            fclose($fd)
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres no duplicados</title>
    <script>
        function fValidar() {
            // Limpiar cualquier posible error anterior
            document.getElementById("error").innerHTML = "";
            // Hacer la validación
            if (document.getElementById("nombre").value.trim == "") {
                document.getElementById("error").innerHTML = "Has de introducir texto en la caja de texto";
                document.getElementById("nombre").focus();
                event.preventDefault(); // Anula el comportamiento predefinido del objeto generado, en este caso el button le quita el submit
            }
        }
    </script>
</head>
<body>
    <!-- 
        Sacar la lista de nombres
        Formulario para añadir nombres
    -->
    <div class="lista">
        <?php
            $filedescriptor = fopen("php012_Fichero.txt", "r");
            echo "<ul>";
            while(!feof($filedescriptor)){
                $linealeida = fgets($filedescriptor);
                echo "<li>" . $linealeida . "</li><br>";
            }
            echo "</ul>";
            fclose($filedescriptor);
        ?>
    </div>
    <div class="formulario">
        <form action="" method="POST">
            <label for="nombre">
                <input type="text" name="nombre" id="nombre">
            </label>
            <br>
            <button onclick="fValidar()">Añadir</button>
            <br>
            <p id="error">&nbsp;<?=$mensaje_error?></p>
        </form>            
    </div>
    
</body>
</html>