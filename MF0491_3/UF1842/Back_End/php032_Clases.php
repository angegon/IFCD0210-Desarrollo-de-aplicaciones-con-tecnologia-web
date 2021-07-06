<?php

    require_once "php032_Vehiculo.php";

    // $lista va a ser una lista de vehículos
    $lista = array();
    //Instanciamos un objeto Vehiculo de la clase
    $vehiculo1 = new Vehiculo("Citroen", "Saxo", "Gris", "1500CC");
    $vehiculo1->setMatricula("111kf");

    $lista[] = $vehiculo1;

    $vehiculo2 = new Vehiculo("Ford", "Focus", "Blanco", "200CC");
    $vehiculo2->setMatricula("8776ghhg");

    $lista[] = $vehiculo2;

    $vehiculo3 = new Vehiculo("Opel", "Astra", "Rojo", "2500CC");
    $vehiculo3->setMatricula("45654fggf");

    $lista[] = $vehiculo3;

    for ($i = 0; $i < count($lista); $i++) {
        echo $lista[$i]->getMatricula() . " - " . 
            $lista[$i]->getMarca() . " - " .
            $lista[$i]->getModelo() . " - " .
            $lista[$i]->getColor() . " - " .
            $lista[$i]->getCilindrada() . "<br>" ;
    }
?>