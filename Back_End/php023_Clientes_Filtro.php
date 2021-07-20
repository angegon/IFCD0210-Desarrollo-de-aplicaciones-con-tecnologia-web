<?php
/*
    **************************************************************************************
    * Hacer una web que filtre por cli_empresa, cli_poblacion, cli_codigo, cli_direccion *
    * Ordenado por poblacion, empresa
    **************************************************************************************
*/
    $html = "Este programa filtra por cli_empresa, cli_poblacion, cli_codigo, cli_direccion";
    if ( isset($_POST['filtro']) ){
        $filtro = $_POST['filtro'];
        // Preparar sql
        $sql = "SELECT *
                FROM clientes
                WHERE cli_empresa LIKE '%$filtro%' OR
                      cli_poblacion LIKE '%$filtro%' OR
                      cli_codigo LIKE '%$filtro%' OR
                      cli_direccion LIKE '%$filtro%'
                ORDER BY cli_poblacion, cli_empresa";
        //echo $sql."<br>";
        // Conectar
        $cnx = mysqli_connect( "localhost", "root", "", "bd_pedidos");
        // Poner la transmisión en modo UTF8
        mysqli_set_charset( $cnx, "UTF8");
        // Ejecutar el SQL
        $rs = mysqli_query ($cnx, $sql);
        // Recorrer el Result Set generando la salida
        $html = "<table border=1>";
        while ( ( $registro = mysqli_fetch_array($rs,MYSQLI_NUM) ) != null){
            $html .= "<tr>";
            for ($i=0; $i<count($registro); $i++){
                $html .= "          <td>" . $registro[$i] . "</td>";
            }            
            $html .= "</tr>";
        }
        // Cerrar la conexión
        mysqli_close($cnx);
        $html .= "</table>";
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de clientes</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="filtro">Filtro
                <input type="text" name="filtro" id="filtro">
            </label>
            <button>Filtrar</button>
        </form>
        <div class="respuesta">
            <?= $html ?>
        </div>
    </div>
</body>

</html>