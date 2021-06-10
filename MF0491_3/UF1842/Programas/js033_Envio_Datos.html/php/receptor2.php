<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
    <style>
        span {
            color: blue;
            font-weight: bold;
        }
    </style>
    <script>
        //alert("hola");
    </script>
</head>
<body>
    <p>
        Nombre: <span>
        <?php 
            echo $_POST['nombre'];
        ?>
        </span>
    </p>
    <p>
        Apellidos: <span>
        <?php 
            echo $_POST['apellidos'];
        ?>
        </span>
    </p>
    <p>
        Sexo: <span>
        <?php 
            echo $_POST['sexo'];
        ?>
        </span>
    </p>
</body>
</html>