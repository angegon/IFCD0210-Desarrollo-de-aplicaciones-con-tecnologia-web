<?php
    define ("SERVIDOR", "localhost");
    define ("USUARIO", "root");
    define ("BASE_DATOS", "bd_agenda");
    $mensaje_error = "&nbsp;";
    $lista_contactos = "&nbsp;";
    if(isset($_POST['nombre'])){
        //Meter en la BBDD
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        if (Comprobar_Nombre($nombre, $telefono) == 0 ){

            $sql = "insert into contactos values (null, '$nombre', '$telefono')";
            //echo $sql;

            $conexion = mysqli_connect(SERVIDOR, USUARIO, "", BASE_DATOS );
            mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos

            $registros_procesados = mysqli_query($conexion, $sql);

            if ($registros_procesados) {
                $mensaje_error .= "<br> Se ha guardado el contacto correctamente.";
            } else {
                $mensaje_error .= "<br> No se ha podido guardar el contacto.";
            }
            mysqli_close($conexion);
        } else {
            $mensaje_error .= "<br> Ya existe el contacto en la BBDD.";
        }
    }

    $sql = "select * from contactos order by con_nombre";
    //echo $sql;

    $conexion = mysqli_connect(SERVIDOR, USUARIO, "", BASE_DATOS );   
    mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos 

    $lista_contactos = "<table border=1>";
    $lista_contactos .="   <tr><th>Contacto</th><th>Telefono</th></tr>";
    $result_set = mysqli_query($conexion, $sql);
    $numero_de_contactos = mysqli_num_rows($result_set); // número de filas
    while ( ($registro = mysqli_fetch_array($result_set, MYSQLI_NUM)) != null) {
        $lista_contactos .= "<tr>";
        $lista_contactos .= "      <td>" . $registro[1] . "</td>";
        $lista_contactos .= "      <td>" . $registro[2] . "</td>";
        $lista_contactos .= "</tr>";
    }
    mysqli_close($conexion); 
    $lista_contactos .="<caption> Lista de $numero_de_contactos contactos </caption>";    
    $lista_contactos .="</table>";    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar BBDD</title>
    <script>
        function fValidar(){
            if (document.getElementById("nombre").value.trim() == "") {
                document.getElementById("error").innerHTML = "Has de rellenar el nombre.";
                document.getElementById("nombre").focus();
                event.preventDefault();
                return;
            }
            if (document.getElementById("telefono").value.trim() == "") {
                document.getElementById("error").innerHTML = "Has de rellenar el telefono.";
                document.getElementById("telefono").focus();
                event.preventDefault();
                return;
            }            
        }
    </script>
    <style>
        .formulario, .datos{
            float:left;
            width: 50%; 
        }
    </style>
</head>
<body>
    <div class="formulario">
        <h1>Insertar contactos: </h1>
        <form action="" method="POST">
            <label for="nombre"> Nombre:
                <input type="text" name="nombre" id="nombre">
            </label>
            <br>
            <label for="telefono"> Telefono: 
                <input type="text" name="telefono" id="telefono">
            </label>
            <br>
            <button onclick="fValidar()">Guardar contacto</button>
            <p id="error">
                <?=$mensaje_error?>
            </p>
        </form>
    </div>
    <div class="datos">
        <?=$lista_contactos?>
    </div>
</body>
</html>
<?php
    function Comprobar_Nombre($name, $telefono){
        $sql = "select * from contactos where con_nombre = '$name' OR con_telefono = '$telefono'";
        //echo $sql;
    
        $conexion = mysqli_connect(SERVIDOR, USUARIO, "", BASE_DATOS );   
        mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos 

        $result_set = mysqli_query($conexion, $sql);
        $numero_de_contactos = mysqli_num_rows($result_set); // número de filas
        mysqli_close($conexion); 
        return $numero_de_contactos;
    }
?>