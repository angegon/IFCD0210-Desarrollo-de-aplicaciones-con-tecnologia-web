<?php
    define ("SERVIDOR", "localhost");
    define ("USUARIO", "root");
    define ("BASE_DATOS", "bd_agenda");

    echo $_POST['operacion'] . " - " . $_POST['id'];
    $datos_del_id = Recupera_Por_ID($_POST['id']);
    $mensaje = "&nbsp;";
    if ($datos_del_id == null){
        $mensaje = "Ese registro ya no está en la BBDD";
    } else {
        $nombre = $datos_del_id['con_nombre'];
        $telefono = $datos_del_id['con_telefono'];
    }
    if (isset($_POST['proceso'])){
        if ( $_POST['proceso'] == "b") {
            $nregs = Borrar($_POST['id_a_procesar']);
        } else {
            $nregs = Modificar($_POST['id_a_procesar'], $_POST['nombre'], $_POST['telefono']);
        }
        header("Location: php028_Update_Delete.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="proceso" id="proceso" value="<?= $_POST['operacion'] ?>">
        <input type="text" name="id_a_procesar" id="id_a_procesar"  value="<?= $_POST['id'] ?>">
        <br>
        <label for="nombre"> Nombre :
            <input type="text" name="nombre" id="nombre" value="<?=$nombre?>">
        </label>
        <br>
        <label for="nombre"> Teléfono :
            <input type="text" name="telefono" id="telefono"  value="<?=$telefono?>">
        </label>
        <br>
        <?php 
            if ($_POST['operacion'] == 'b') {
                echo "<button> Borrar </button>";
            } else {
                echo "<button> Modificar </button>";
            }
        ?>
        <button>Cancelar</button>
        <p><?=$mensaje?></p>
    </form>
</body>
</html>

<?php
    function Recupera_Por_ID ($id) {
        $datos_a_devolver = null;
        $sql = "select * from contactos where con_id = '$id'";
        //echo $sql . "<br>";
        // Conectar 
        $conexion = mysqli_connect(SERVIDOR, USUARIO, "", BASE_DATOS );   
        mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos 
    
        // Los select devuelven un resulset
        // Los Insert, Update, Delete devuelven el número de registros procesados
        $rs = mysqli_query($conexion, $sql);
        // Recorrer el resulset
        while (($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null ) {
            //print_r ( $registro );
            $datos_a_devolver = $registro;
        }
        // Desconexión
        mysqli_close($conexion); 
        // Retorno
        return $datos_a_devolver;
    }

    function Modificar($id, $nom, $tel){
        // SQL
        $sql = "UPDATE contactos SET con_nombre = '$nom', con_telefono = '$tel'
            WHERE con_id = '$id' ";
        // Conectar
        $conexion = mysqli_connect(SERVIDOR, USUARIO , "" , BASE_DATOS);
        mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos 
        // Ejecutar el sql para obtener el rs
        //$rs = mysqli_query($conexion, $sql);
        mysqli_query($conexion, $sql);
        $peticiones_procesadas = mysqli_affected_rows($conexion);
        // Desconectar
        mysqli_close($conexion);
        // Devolver el número de registros procesados
        return($peticiones_procesadas);
    }

    function Borrar($id){
        // SQL
        $sql = "delete from contactos where con_id='$id'";
        // Conectar
        $conexion = mysqli_connect(SERVIDOR, USUARIO , "" , BASE_DATOS);
        mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos 
        // Ejecutar el sql para obtener el rs
        //$rs = mysqli_query($conexion, $sql);
        mysqli_query($conexion, $sql);
        $peticiones_procesadas = mysqli_affected_rows($conexion);
        // Desconectar
        mysqli_close($conexion);
        // Devolver el número de registros procesados
        return($peticiones_procesadas);
    }
?>