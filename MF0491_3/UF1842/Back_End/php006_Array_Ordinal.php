<?php

    $nombres = array("Pepe", "Juan", "Antonio", "Eva", "Ana");

    for ($i=0; $i<count($nombres); $i++){
        echo $nombres[$i] . "<br>";
    }
    echo $nombres[ count($nombres) - 1 ];
    
    $agenda = array( 
        array("Pepe","Informático", "86856", array("futbol", "cerveza", "padel")),
        array("Jorge","Filófo", "34456", array("tele", "cerveza", "tenis")),
        array("Alvaro","Exmilitar", "568", array("sofá", "coches") ),
        array("Javier","Diseñador", "567567", array()),
        array("Jose Luis","Financiero", "45764575", array("números", "balonmano","programación"))
    );

    for ($i=0; $i<count($agenda);$i++){
        $persona = $agenda[$i];
        echo "<hr>";
        echo "Nombre " . $persona[0] ."<br>";
        echo "Profesión " . $persona[1] ."<br>";
        echo "Teléfono " . $persona[2] ."<br>";
        $aficiones = $persona[3];
        echo "Aficiones: ";
        for ($j=0; $j<count($aficiones);$j++){
            echo $aficiones[$j] . " ";
        }
        echo "<br>";
    }
