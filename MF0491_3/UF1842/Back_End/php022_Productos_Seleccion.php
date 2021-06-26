<?php
    // Si el programa recibe filtro, buscar e imprimir los productos filtrados
    $html="Filtre la búsqueda";
    if ( isset($_POST['filtro']) ){
        $filtro = $_POST['filtro'];
        $sql = "SELECT *
                FROM productos
                WHERE prod_nombre LIKE '%$filtro%' OR 
                      prod_seccion LIKE '%$filtro%' OR
                      prod_codigo LIKE '%$filtro%' OR
                      prod_pais_origen LIKE '%$filtro%'";
        echo $sql . "<br>";
        $cnx = mysqli_connect("localhost", "root", "", "bd_pedidos");
        mysqli_set_charset( $cnx, "UTF8");
        $rs = mysqli_query( $cnx, $sql );
        $html = "<table border=1>";
        
        while ( ($registro = mysqli_fetch_row($rs)) != null){
            $html .= "<tr>";
            for ($i=0; $i<count($registro); $i++){
                $html .= "<td>" . $registro[$i] . "</td>";
            }
            $html .= "</tr>";
        }
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
    <title>Selección de productos</title>
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
            <?=$html?>
        </div>
    </div>
</body>
</html>