<?php

    // Variables de sesión
    //      Puedo utilizarlas cuando ejecute session_start()
    //      Sus valores están activos mientras esté en el navegador
    //      Los valores se almacenan en la supervariable $_SESSION[]
    session_start();
    $_SESSION['nombre']="Pepe";
    $_SESSION['apellidos']="Perez";
    $_SESSION['edad']=44;

    // COOKIES
    // Son ficheros de texto (maximo 4k) alojados en el ordenador del cliente.
    // Por ley, si las utilizo, debo avisar al usuario.
    // La supervariable que guarda las cookies es $_COOKIE[]

    // Crear cookie
    $tiempo = time() + 24*60*60;
    setcookie("cookie_php", "Generada desde uno.php", $tiempo);

    
    header("Location:dos.php");
    
