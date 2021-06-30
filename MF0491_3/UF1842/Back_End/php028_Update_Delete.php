<?php
    define ("SERVIDOR", "localhost");
    define ("USUARIO", "root");
    define ("BASE_DATOS", "bd_agenda");
    $lista_contactos = "<table>";

    $sql = "select * from contactos order by con_nombre";
    //echo $sql;

    $conexion = mysqli_connect(SERVIDOR, USUARIO, "", BASE_DATOS );   
    mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos 

    $lista_contactos = "<table border=1>";
    $lista_contactos .="   <tr><th>Acción</th><th>Contacto</th><th>Telefono</th></tr>";
    $result_set = mysqli_query($conexion, $sql);
    $numero_de_contactos = mysqli_num_rows($result_set); // número de filas
    while ( ($registro = mysqli_fetch_array($result_set, MYSQLI_ASSOC)) != null) {
        //MYSQLI_NUM      $registro[1]
        //MYSQLI_ASSOC    $registro['con_nombre'] 
        $lista_contactos .= "<tr>";
        $id = $registro['con_id'];
        $lista_contactos .= "<td><input type='button' value='Borrar' onclick='fProcesar(\"$id\", \"b\")'>
                    <input type='button' value='Modificar' onclick='fProcesar(\"$id\", \"m\")'></td>";
        $lista_contactos .= "      <td>" . $registro['con_nombre'] . "</td>";
        $lista_contactos .= "      <td>" . $registro['con_telefono'] . "</td>";
        $lista_contactos .= "</tr>";
    }
    mysqli_close($conexion); 
    $lista_contactos .="<caption> Lista de $numero_de_contactos contactos </caption>";    

    $lista_contactos .= "</table>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update y delete</title>
    <script>
        function fProcesar(id, operacion) {
            //alert("borrar" + id);
            document.getElementById("operacion").value = operacion;
            document.getElementById("id").value = id;
            document.getElementById("frm").submit();
            return;
        }
    </script>
</head>

<body>
    <div class="container">
        <form action="php028_ProcesoDatos.php" method="POST" id="frm">
            <input type="hidden" name="operacion" id="operacion">
            <input type="hidden" name="id" id="id">
        </form>
    </div> 
    <div class="container">
        <?= $lista_contactos ?>
    </div>
</body>
</html>