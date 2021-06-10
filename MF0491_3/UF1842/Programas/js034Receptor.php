<?php
    //Recogido como $_REQUEST (Siempre)
    print_r($_REQUEST); //Imprime un array
    //Recogido con $_GET o $_POST según el método de envio del formulario
    echo "<hr>"
    print_r($_POST)
    echo "<hr>"
    // La concatenación en php se hace con un .
    echo "Me envias como nombre en el campo nombre: " . $_POST["nombre"] . "<br>";
    echo "Tienes carnet: <br>";
    if (isset($_POST["a1"])){
        echo $_POST["a1"] . <br>;
    }
    else if (isset($_POST["a2"])){
        echo $_POST["a2"] . <br>;
    } else {
        echo $_POST["b"] . <br>;
    }
    echo "Tu pelo es : " . $_POST["pelo"] . "<br>";
    echo "Código de Estudios: " . $_POST["estudios"] . "<br>";
    echo "Observaciones: " . $_POST["obserciojes"] . "<br>";
?>
HOLA