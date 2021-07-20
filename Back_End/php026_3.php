<?php
    session_start(); 
    $usuario = $_SESSION['usuario_logueado'];
    print_r($usuario);
    echo "<br>hola " . $usuario[1];
    if($usuario[3]){
        echo "<br> Eres Administrador.";
    } else {
        echo "<br> Eres un usuario normal.";
    }
    echo "<br><a href='php026_Login.php'> Volver a la página de Login</a>";
?>