<?php
    require_once ("php024_Funciones.php")
    $clientes = "";
    if (isset($_POST['poblacion'])){
        $poblacion = $_POST['poblacion']
        $sql = "select * from clientes where cli_poblacion = '$poblacion'";
        $titulo = "<tr><th> Código </th> <th> Empresa </th> <th> Dirección </th>
                     <th> Población </th> <th> Telefono </th> <th> Responsable </th>
                     <th> Historial </th></tr>"
        $clientes = Volcar_En_Modo_Table( sql, "<tr></tr>")
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <script>
        function Enviar(poblacion_solicitada){
            document.getElementByID("poblacion").value = poblacion_solicitada;
            document.getElementByID("frm").submit();
        }    
    </script>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="poblacion" id="poblacion">
    </form>
    <div class="container">
        <nav>
            <?php
                $sql ="SELECT DISTINCT cli_poblacion FROM clientes ORDER BY cli_poblacion";
                echo Volcar_En_Modo_UL( $sql );                
            ?>
        </nav>
        <section class="section">

        </section>
    </div>
</body>
</html>