<?php
    //print_r($_GET);
    //echo "<br>";
    // Esto es un bloque php
    // Todas las variables PHP comienzan por $
    // Dentro irán las instrucciones PHP
    // Una instrucción para generar código HTML es echo
    echo "HOLA. Soy el <b>receptor</b><br/>";
    // Si el envío ha sido en modo GET, el programa lo guarda como $_GET["name"]
    // Si el envío ha sido en modo POST, el programa lo guarda como $_POST["name"]
    // Además, siempre genera $_REQUEST["name"]
    echo "He recibido como nombre en GET ";
    echo $_GET["nombre"];
    echo "He recibido como apellidos en GET ";
    echo $_GET["apellidos"];
    echo "<br>Y además lo tengo en REQUEST como ";
    echo $_REQUEST["nombre"];
    echo "<br>Y además lo tengo en REQUEST como ";
    echo $_REQUEST["apellidos"];
    echo "<br>Intereses:<br> ";
    // Un array asociativo identifica a los elementos por nombre, NO por posicion
    echo $_GET["front"];
    echo "<br>";
    echo $_GET["back"];
    echo "<br>";
    echo $_GET["sistemas"];
    echo "<br>";
    echo "Nacionalidad: ";
    echo $_GET['nacionalidad'];
    echo "<br>Sexo<br>";
    echo $_GET['sexo'];
    echo "<br>Observaciones<br>";
    echo $_GET['observaciones'];
?>
<h1>Hola</h1>