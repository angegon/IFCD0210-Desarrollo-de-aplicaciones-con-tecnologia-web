<?php
    // Generar 500 preguntas para el tema 10

    $cnx=mysqli_connect("localhost", "root", "", "bd_test");
    for ($i=0; $i<500; $i++){        
        $n=$i+1;
        $buena = rand(1,4);
        $sql= "INSERT INTO preguntas VALUES (
            null, 'Pregunta $n', 'Respuesta 1', 'Respuesta 2', 'Respuesta 3', 'Respuesta 4', 
            '10', '$buena')";
        mysqli_query($cnx, $sql);
    }
    mysqli_close($cnx);

?>