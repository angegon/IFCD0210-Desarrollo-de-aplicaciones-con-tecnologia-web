<?php
    require_once ("php024_Funciones.php");

    $secciones = "";
    $productos = "";

    // Menú
    $sql = "SELECT DISTINCT prod_seccion FROM productos ORDER BY prod_seccion";
    $secciones = Volcar_En_Modo_UL($sql);
    /*
    $datos = Ejecutar_Consulta($sql);
    //print_r($datos);
    $secciones = "<ul>";
    for ($i=0; $i<count($datos); $i++){
        $seccion = strtoupper( $datos[$i][0] );
        $secciones .= "<li>" .
                            "<a href='php024_BBDD_Menu.php?seccion=$seccion'>". $seccion . "</a>" .
                      "</li>";
    }
    $secciones .= "</ul>";
    */
    if ( isset( $_GET['seccion'] )){
        $seccion_solicitada = $_GET['seccion'];
        $sql = "SELECT * FROM productos WHERE prod_seccion='$seccion_solicitada'"; 
        $titulo = "<tr>
                        <th>Código</th>
                        <th>Sección</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Importado</th>
                        <th>País de Origen</th>
                        <th>Foto</th>
                    </tr>";     
        $productos = Volcar_En_Modo_Table($sql, $titulo);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Productos</title>
    <style>
    .container{

    }
    .header{
        background: blue;
        color: white;
    }
    .nav{
        background: lightgreen;
        color: white;
        float: left;
        width: 30%;
    }
    .nav ul{
        list-style: none;
        width: 100%;
        text-align: center;
    }
    .nav li{
        width: 150px;
        padding: 10px;
    }
    .nav li:hover{
        background: yellow;
        color: green;
    }
    .nav a, .nav a:visited{
        background: green;
        color: yellow;
        text-decoration: none;
        width: 100%;
        border-radius: 10px;
        margin: 10px auto;
        cursor:pointer;
        padding: 10px;
    }
    .section{
        background: lightblue;
        color: black;
        float: left;
        width: 70%;
    }
    .footer{
        clear: both;
        background: blue;
        color: white;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            Selección de productos por sección
        </div>
        <div class="nav">
            <?= $secciones ?>
        </div>
        <div class="section">
            <?= $productos ?>
        </div>
        <div class="footer">
            &copy;JRT
        </div>
        <div class="pruebas">
            <?php
                $sql = "SELECT DISTINCT prod_pais_origen FROM productos ORDER BY prod_pais_origen";
                echo Volcar_En_Modo_UL($sql);
                echo "<hr>";
                $sql = "SELECT DISTINCT cli_poblacion FROM clientes ORDER BY cli_poblacion";
                echo Volcar_En_Modo_UL($sql);
                echo "<hr>";
                $sql = "SELECT DISTINCT cli_poblacion FROM clientes ORDER BY cli_poblacion";
                echo Volcar_En_Modo_Radio( $sql, "Poblaciones de los clientes" );
                echo "<hr>";
                $sql = "SELECT DISTINCT prod_seccion FROM productos ORDER BY prod_seccion";
                echo Volcar_En_Modo_Radio( $sql, "Secciones" );
                echo "<hr>";
                $sql = "SELECT DISTINCT prod_seccion FROM productos ORDER BY prod_seccion";
                echo Volcar_En_Modo_Select( $sql );
                echo "<hr>";
                $carta = Carta_Personalizada( "Don Pepito", "1.000.000", "25/06/2021", "Madrid", "c/ Alcalá,1");
                echo $carta;
            ?>
        </div>
    </div>    
</body>
</html>