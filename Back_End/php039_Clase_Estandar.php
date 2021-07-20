<?php
    //  Objeto stdClass, es dinámica

    $lista = array();

    $objeto_estandard = new stdClass;
    $objeto_estandard->nombre = "pepe";
    $objeto_estandard->telefono = "89389389";

    // Agregamos a la lista
    $lista[] = $objeto_estandard;

    $objeto_estandard = new stdClass;
    $objeto_estandard->nombre = "Juan";
    $objeto_estandard->telefono = "13346454";

    // Agregamos a la lista
    $lista[] = $objeto_estandard;

    $objeto_estandard = new stdClass;
    $objeto_estandard->nombre = "Ana";
    $objeto_estandard->telefono = "3223568464";

    // Agregamos a la lista
    $lista[] = $objeto_estandard;

    foreach($lista as $objeto){
        echo $objeto->nombre . " - " . $objeto->telefono . "<br>";
    }
?>