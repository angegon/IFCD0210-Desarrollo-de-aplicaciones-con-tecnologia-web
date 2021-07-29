<?php
session_start();
    echo $_SESSION['nombre'] . "<br>";
    echo $_SESSION['apellidos'] . "<br>";
    echo $_SESSION['edad'] . "<br>";

    $_SESSION['creado en 2'] = "probando";
    //header("Location:tres.php");

    echo $_COOKIE['cookie_php']."<br>";
    
    $fecha = time() - PHP_INT_MAX;

    if (isset($_COOKIE["cookie.php"])){
        setcookie("cookie_php",1,$fecha);
    }
    if (isset($_COOKIE["producto"])){
        setcookie("producto",1,$fecha);
    }