<?php
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];

    echo "Nombre: " . $nombre . "<br>";

    echo "Nombre: $nombre <br>";
    
    echo 'Nombre: $nombre<br>';

    echo "Apellidos: $apellidos<br>";

    echo "Nacionalidad: {$_REQUEST['nacionalidad']}<br>";
    echo "Sexo: " . $_REQUEST['sexo'] . "<br>";


?>