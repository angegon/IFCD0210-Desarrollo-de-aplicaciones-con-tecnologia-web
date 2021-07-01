<?php
        include ("controladores/Frutas_CTRLR.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Frutería</title>
        <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
        <div class="container">
                <?php
                        echo Dibujar();
                ?>
        </div>
</body>
</html>