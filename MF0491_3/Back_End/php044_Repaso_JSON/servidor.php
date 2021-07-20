<?php
/*
    var_dump($_GET);
    echo "<hr>";
    var_dump($_POST);
    echo "<hr>";
    var_dump($_REQUEST);
    echo "<hr>";
*/
    if (isset($_REQUEST['peticion'])){
        // Me has pedido algo, voy a ver qué
        switch($_REQUEST['peticion']){
            case 'saludo_general':
                echo 'Hola a todos';
                break;
            case 'saludo_personalizado':
                echo 'Hola, ' . $_GET['nombre'];
                break;
            case 'saludo':
                echo "Hola desde POST, " . $_POST['nombre'];
                break;
            case 'dame_lista':
                $lista = array();
                $lista[]['nombre']="Pepe";
                $lista[]['nombre']="Juan";
                $lista[]['nombre']="Ana";
                $lista[]['nombre']="Eva";
                $json = json_encode($lista);
                echo $json;
                break;
            default:
                echo "no sé qué me pides";
        }
    } 