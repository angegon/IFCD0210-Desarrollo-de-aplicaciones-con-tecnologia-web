<?php
    //si en el formulario se ha enviado algo, lo añado al fichero
    if(isset($_POST['nombre']) && $_POST['nombre'] != ""){
        $filedescriptor = fopen("php012_Fichero.txt", "a");

        fwrite($filedescriptor, PHP_EOL . trim($_POST['nombre']));

        fclose($filedescriptor);        
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
            <p id="error">&nbsp;</p>
        </form>            
    </div>
    
</body>
</html>