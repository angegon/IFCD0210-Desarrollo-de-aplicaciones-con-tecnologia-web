<?php
    $mensaje_error="&nbsp;";
    // Almacenar los datos en un array PHP
    // Crear el array vacío
    $datos = array();
    // Rellenarlo con los datos del fichero
    $fd=fopen("php013_Fichero.txt", "r");
    while ( !feof($fd) ){
        $nombre = fgets($fd);
        if ($nombre != ""){
            $datos[] = trim($nombre);
        }                
    }
    fclose($fd);

    // Si existe nombre,
    //  Comprobar si ya está en la lista
    //  si no está, añadirlo
    //  si está, dar un mensaje al usuario
    $recibido = "";
    if ( isset($_POST['nombre'])){
        $recibido = $_POST['nombre'];
        $encontrado = false;
        for ($i=0; $i<count($datos);  $i++){
            if ( strcasecmp( $recibido, $datos[$i]) == 0 ){
                $encontrado = true;
                break;
            }
        }
        if ($encontrado == true){
            // Dar mensaje al usuario
            $mensaje_error = "Ese nombre ya existe";
        } else {
            // Lo puedo añadir
            $fd = fopen("php013_Fichero.txt", "a");
            fwrite( $fd, $recibido.PHP_EOL);
            fclose( $fd );
            // Lo añado también al array de datos
            $datos[] = $recibido;
            $recibido = "";
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
        function fValidar(){
            // Limpiar cualquier posible error anterior
            document.getElementById("parrafo_error").inerHTML = "";
            // Hacer la validación
            if ( document.getElementById("nombre").value.trim() == ""){
                document.getElementById("parrafo_error").innerHTML = "Nombre obligatorio";
                document.getElementById("nombre").focus();
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <!-- Sacar la lista de nombres
         Formulario para añadir nombres
    -->
    <div class="lista">
        <?php
            for ($i=0; $i<count($datos); $i++){
                echo $datos[$i] . "<br>";
            }
        ?>
    </div>
    <hr>
    <div class="formulario">
        <form action="" method="POST">
            <label for="nombre">Nombre 
                <input type="text" name="nombre" id="nombre" value="<?=$recibido?>">
            </label>
            <br>
            <button onclick="fValidar()">Añadir</button>
            <br>
            <p id="parrafo_error">
                <?=$mensaje_error?>    
            <p>
        </form>
    </div>
</body>
</html>