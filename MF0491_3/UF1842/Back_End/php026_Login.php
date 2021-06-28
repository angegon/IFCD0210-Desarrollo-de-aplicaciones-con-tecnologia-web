<?php
    define ("SERVIDOR", "localhost");
    define ("USUARIO", "root");
    define ("BASE_DATOS", "bd_pedidos");
    $mensaje_error = "&nbsp";
    //UPDATE usuarios SET usu_password = md5(usu_password);

    if(isset($_POST['nombre']) ){
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        // Tengo que buscar si hay algún usuario con ese nombre y password en la bbdd
        //      Si hay, le dejo pasar, sino, lanzo error.
        $sql = "select * from usuarios where usu_nombre='$nombre' and usu_password=md5('$password')";
        $acceso_permitido = false;
        //echo $sql . "<br>"; // Para validar que la sql este bien.

        $conexion = mysqli_connect(SERVIDOR, USUARIO, "", BASE_DATOS);
        mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas de acentos.

        $result_set = mysqli_query($conexion, $sql);
        while ( ($registro = mysqli_fetch_array($result_set, MYSQLI_NUM)) != null) {
            //Para trabajar con variables de sesión, y guardar los datos mientras estemos
            // en el sitio web o navegador.
            session_start();
            $_SESSION['usuario_logueado'] = $registro;// Array asociativo que tiene dentro las variables que yo cree
            $acceso_permitido = true;
        }
        mysqli_close($conexion);

        if($acceso_permitido == true){
            //$mensaje_error = "Usuario registrado.";
            // Para enlazar desde php a otra página
            header("Location:php026_2.php");
        } else {
            $mensaje_error = "Usuario no registrado. Acceso no permitido.";
        }        
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="nombre"> Nombre:
                <input type="text" name="nombre" id="nombre">        
            </label>
            <br>
            <label for="password">Password: 
                <input type="password" name="password" id="password">        
            </label>
            <br>
            <button> Login </button>
            <p class="error">
                <?=$mensaje_error?>
            </p>       
        </form>
    </div>
</body>
</html>