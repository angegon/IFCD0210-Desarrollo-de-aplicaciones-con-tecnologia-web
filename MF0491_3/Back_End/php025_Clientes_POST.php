<?php
    require_once ("php024_Funciones.php");
    $clientes = "";
    if ( isset ($_POST['poblacion'])){
        $poblacion = $_POST['poblacion'];
        $sql = "SELECT * FROM CLIENTES WHERE cli_poblacion = '$poblacion'";
        $titulo = "<tr>";
        $titulo .= "    <th>Código</th>";
        $titulo .= "    <th>Empresa</th>";
        $titulo .= "    <th>Dirección</th>";
        $titulo .= "    <th>Población</th>";
        $titulo .= "    <th>Teléfono</th>";
        $titulo .= "    <th>Responsable</th>";
        $titulo .= "    <th>Historial</th>";
        $titulo .= "</tr>";
        $clientes = Volcar_En_Modo_Table( $sql, $titulo);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <script>
        function fEnviar( poblacion_solicitada ){
            document.getElementById("poblacion").value = poblacion_solicitada;
            document.getElementById("frm").submit();
        }
    </script>
</head>
<body>
    <?php
        echo Ejecutar_Consulta_Asociativa();
    ?>
    <form id="frm" action="" method="POST">
        <input type="hidden" name="poblacion" id="poblacion">
    </form>
    <div class="container">
        <nav class="nav">
            <?php
                $sql = "SELECT DISTINCT cli_poblacion FROM clientes ORDER BY cli_poblacion";
                $texto_devuelto = Volcar_En_Modo_UL( $sql );
                echo $texto_devuelto;
            ?>  
        </nav>
        <section class="section">
            <?= $clientes ?>
        </section>
    </div>
</body>
</html>