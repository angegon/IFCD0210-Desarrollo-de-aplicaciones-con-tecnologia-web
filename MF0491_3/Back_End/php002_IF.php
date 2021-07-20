<?php
    $edad1 = "100";
    $edad2 = "33";

    if( $edad1 > $edad2){
        echo "El mayor es $edad1 y el menor $edad2<br>";

    } else {
        echo "El mayor es $edad2 y el menor $edad1<br>";

    }
    $nombre1 = "Alvaro";
    $nombre2 = "ANa";
    if( strcasecmp( $nombre1 , $nombre2 ) > 0 ){
        echo "El mayor es $nombre1 y el menor $nombre2<br>";

    } else {
        echo "El mayor es $nombre2 y el menor $nombre1<br>";

    }
?>