<?php
    // Necesito saber si me enviado nombre o no
    // Si me has enviado nombre, tendré que guardarlo
    if (isset($_POST['nombre']) && $_POST['nombre'] != ""){
        $fd = fopen("php012_Fichero.txt", "a");
        $nombre = trim($_POST['nombre']);
        fwrite ($fd, $nombre.PHP_EOL);
        fclose($fd);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres</title>
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
            // Presentar los nombres en la web
            $fd=fopen("php012_Fichero.txt", "r");
            while ( !feof($fd) ){
                $nombre = fgets($fd);
                if ($nombre != ""){
                    echo $nombre."<br>";
                }                
            }
            fclose($fd);
        ?>
    </div>
    <hr>
    <div class="formulario">
        <form action="" method="POST">
            <label for="nombre">Nombre 
                <input type="text" name="nombre" id="nombre">
            </label>
            <br>
            <button onclick="fValidar()">Añadir</button>
            <br>
            <p id="parrafo_error">&nbsp;<p>
        </form>
    </div>
</body>
</html>