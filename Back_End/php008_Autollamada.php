<?php
/*
    include
    include_once
    require
    require_once
*/
    //require ("xxx.php");
    require_once ("php08_Funciones_Externas.php");
    // Datos del programa    
    $agenda = array( 
        array("Pepe","Informático", "86856", array("futbol", "cerveza", "padel")),
        array("Jorge","Filófo", "34456", array("tele", "cerveza", "tenis")),
        array("Álvaro","Exmilitar", "568", array("sofá", "coches") ),
        array("Javier","Diseñador", "567567", array()),
        array("José Luís","Financiero", "45764575", array("números", "balonmano","programación"))
    );  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <style>
        .container{
            width: 90%;
            margin: 0 auto;
            display: grid;
        }
        header{
            background-color: black;
            color:white;            
        }
        nav{
            background-color: blue;
            color:white;
        }
        nav>ul{
            list-style: none;            
        }
        nav li{
            background-color: purple;
            color:yellow;
            width: 100px;
            margin: 20px;
            padding: 10px;
            text-align: center;
            display: inline-block;
            cursor: pointer;
        }
        nav li:hover{
            background-color:yellow;
            color:purple; 
            box-shadow: 1px 1px black;
        }
        nav li a, nav li a:active, nav li a:link{
            color:yellow;
            text-decoration: none;
        }
        nav li a:hover{
            background-color:yellow;
            color:purple; 
            box-shadow: 1px 1px black;
        }
        section{
            background-color: green;
            color:yellow;
        }
        footer{
            background-color: black;
            color:white; 
        }
    </style>
    <script>
    </script>
</head>
<body>
    <div class="container">
        <header>LISTADO</header>
        <nav>
            <?php
                fVisualizarMenu();
            ?>
        </nav>
        <section>
            <?php
                if ( isset( $_GET["nombre"] ) ){
                    $nombre_pedido = $_GET["nombre"];
                    fImprimirDetalle_Tabla_Sencilla();
                }
                
            ?>
        </section>
        <section>
            <?php
                
                fImprimirDetalle_Tabla_Todos();            
                
            ?>
        </section>
        <footer>&copy;JRT</footer>
    </div>
</body>
</html>
