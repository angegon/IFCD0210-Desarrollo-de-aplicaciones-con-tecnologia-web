<?php
    //var_dump($_GET); // Vuelca todo el contenido del GET

    echo "hola ";

    if (isset($_GET['nombre'])){
        echo $_GET['nombre'] . " " . $_GET['apellidos'];
    } else {
        echo " a todos";
    }
?>