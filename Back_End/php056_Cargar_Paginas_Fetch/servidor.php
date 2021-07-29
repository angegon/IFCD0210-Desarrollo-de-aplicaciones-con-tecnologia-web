<?php

    if(isset($_GET['peticion'])){
        switch($_GET['peticion']){
            case "cargar_pagina":
                //$respuesta = readfile( $_GET['pagina'] );
                $path = "";
                $extension = ".html";
                if ( $_GET['pagina'] == "fichero"){
                    $path = "ficheros/";
                    $extension = ".txt";
                } else if ( $_GET['pagina'] == "excel"){
                    $path = "ficheros/";
                    $extension = ".csv"; 
                }
                $respuesta = file_get_contents( $path . $_GET['pagina'] . $extension); 
                echo $respuesta;
                break;
            default:
                echo "Opcion no valida";
        }
    }

?>