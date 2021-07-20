<?php

    require_once("Contacto.php");
    require_once("Deportes.php");

    $lista = array();
    
    $contacto1 = new Contacto(1, "Pepe", "Perez", "pepe@gmail.com", "91645464", "65681356", 3000);
    $lista[] = $contacto1;

    $contacto2 = new Contacto(1, "Juan", "Sánchez", "juan@gmail.com", "916446546", "687855", 4000);
    $lista[] = $contacto2;
    
    $deporte = new Deportes(1, "Futbol", "Se juega con el pie");
    $deporte->setPracticantes(100);


    for ($i = 0; $i < count($lista); $i++){
        $objeto = $lista[$i];
        echo $objeto->getNombre() . " - " .
            $objeto->getApellidos() .  " - " .
            $objeto->getSueldo_Formateado() . "<br>";
    }


?>