<?php
    require_once "php040_Herencia_Persona.php";
    require_once "php040_Herencia_Ciudadano.php";
    require_once "php040_Herencia_Propietario.php";

    $lista = array();

    $prop = new Propietario("El de Zara","no se",  "346346", array("Chalet","yate","Rolls Royce") );
    $lista[] = $prop;
    $prop = new Propietario("Veni","Vidi", "64757", array("cochecito","moto"));
    $lista[] = $prop;

    $obj = new Persona("Pepe", "Pérez");
    $lista[] = $obj;
    $obj = new Persona("Juan", "Valdés");
    $lista[] = $obj;
    $obj = new Persona("Ana", "Igartiburu");
    $lista[] = $obj;

    $ciudadano = new Ciudadano("Kane","Solomon", "59590");
    $lista[] = $ciudadano;
    $ciudadano = new Ciudadano("Ciudadano","Kane", "45456234");
    $lista[] = $ciudadano;


    foreach ( $lista as $elem ){
        echo $elem . "<br>";
    }