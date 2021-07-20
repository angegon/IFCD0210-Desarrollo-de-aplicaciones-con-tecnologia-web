<?php

    require_once("Controlador/Tareas_CTRLR.php");
    // Si recibes una petición de cualquier tipo, analiza y actua
    //$sql = "SELECT * FROM tareas ORDER BY tar_fecha DESC";
    //var_dump(Tareas_CTRLR::Recupera_todos($sql));

    if (isset($_REQUEST['peticion'])){
        switch($_REQUEST['peticion']){
            case "recupera_todos":
                $sql = "SELECT * FROM tareas ORDER BY tar_fecha DESC";
                $lista = Tareas_CTRLR::Recupera_todos($sql);
                echo json_encode($lista);
                break;
            case "a":
                $id = Tareas_CTRLR::Inserciones($_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['fecha'], $_REQUEST['estado']);
                echo $n;
                break;
            default:
                echo "Opción no valida.";
                break;
        }
    }
?>