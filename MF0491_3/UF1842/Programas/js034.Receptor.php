<?php
    // Recogido con $_REQUEST (siempre)
    print_r($_REQUEST);
    echo "<hr>";
    // Recogido con $_GET o $_POST (segun el method del formulario)
    print_r($_POST);
    echo "<hr>";
    // La concatenación en php se hace con un .
    echo "Me envías en el campo nombre: " . $_POST["nombre"] . "<br>";
    echo "Tienes carnet:<br> ";
    if ( isset($_POST["a1"] ) ){
        echo $_POST["a1"] . "<br>";
    }
    if ( isset($_POST["a2"] ) ){
        echo $_POST["a2"] . "<br>";
    }
    if ( isset($_POST["b"] ) ){
        echo $_POST["b"] . "<br>";
    }
    echo "Tu pelo es : " . $_POST['pelo'] . "<br>";
    echo "Código de estudios: " . $_POST["estudios"] . "<br>";
    echo "Observaciones:<br> " . str_replace( "\n", "<br>", $_POST['observaciones'] ). "<br>";
?>
