<?php
    require_once("Modelos/Temas_MDL.php");
    require_once("Modelos/Preguntas_MDL.php");
    require_once("Controladores/Temas_CTRLR.php");
    require_once("Controladores/Preguntas_CTRLR.php");

    // Insertar un tema
    $tema = new Temas_MDL(0, "Prueba de Insert");
    $nregistros_insertados = Temas_CTRLR::Insertar($tema);

    if ($nregistros_insertados == 0){
        echo "No he podido grabar <br>";
    } else {
        echo "Registro grabado <br>";
    }

    // Modificar un tema
    $tema = new Temas_MDL(9, ".net");
    $nregistros_insertados = Temas_CTRLR::Modificar($tema);

    if ($nregistros_insertados == 0){
        echo "No he podido Modificar <br>";
    } else {
        echo "Registro Modificado <br>";
    }

    // Eliminar un tema
    $nregistros_insertados = Temas_CTRLR::Eliminar(8);

    if ($nregistros_insertados == 0){
        echo "No he podido Borrar <br>";
    } else {
        echo "Registro Borrado <br>";
    }

    // Insertar una pregunta
    $pregunta = new Preguntas_MDL(null, "un objeto es.....", "La instanciación de una clase.", "La reserva de memoria de las propiedades", "ambas respuestas anteriores", "ninguna de las anteriores", 1, 3);
    $nregistros_insertados = Preguntas_CTRLR::Insertar($pregunta);

    if ($nregistros_insertados == 0){
        echo "No he podido grabar la pregunta <br>";
    } else {
        echo "Pregunta grabada <br>";
    }

    // Modificar una pregunta
    $pregunta = new Preguntas_MDL(9, "Como me llamo?...", "Angel.", "Juan", "Pepe", "ninguna de las anteriores", 1, 1);
    $nregistros_insertados = Preguntas_CTRLR::Modificar($pregunta);

    if ($nregistros_insertados == 0){
        echo "No he podido Modificar la pregunta <br>";
    } else {
        echo "Pregunta Modificada <br>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test por temas</title>
</head>
<body>
    <div class="container">
        <header></header>
        <nav>
            <?php
                //$Ctrlr = new Temas_CTRLR();
                //echo $Ctrlr->Pintar_UL();

                //si es statica
                echo Temas_CTRLR::Pintar_UL();
            ?>
        </nav>
        <section>
        <?php
                //$Ctrlr = new Temas_CTRLR();
                //echo $Ctrlr->Pintar_UL();

                //si es statica
                Preguntas_CTRLR::Recupera_Todos(1);
            ?>
        </section>
        <footer></footer>
    </div>
</body>
</html>