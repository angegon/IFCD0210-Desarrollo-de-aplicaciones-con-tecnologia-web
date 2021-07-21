<?php

    require_once("Controlador/Tareas_CTRLR.php");
    // Si recibes una petición de cualquier tipo, analiza y actua
    //$sql = "SELECT * FROM tareas WHERE tar_nombre LIKE '" .  $_GET['texto'] . "%' .OR tar_descripcion LIKE '" .  $_GET['descripcion'] . "%'";
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
                echo $id;
                break;
            case "recupera_id":
                $sql = "SELECT * FROM tareas WHERE tar_id =" .  $_GET['id'];
                $lista = Tareas_CTRLR::Recupera_todos($sql);
                echo json_encode($lista[0]);// el id es único luego solo devuelve un registro
                break;
            case "m":
                $n = Tareas_CTRLR::Modificaciones($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['fecha'], $_REQUEST['estado']);
                echo $n;
                break;
            case "b":
                $n = Tareas_CTRLR::Borrados($_REQUEST['id']);
                echo $n;
                break;
            case "filtro":
                $sql = "SELECT * FROM tareas WHERE tar_nombre LIKE '" .  $_GET['texto'] . "%' OR tar_descripcion LIKE '%" .  $_GET['texto'] . "%'";
                $lista = Tareas_CTRLR::Recupera_todos($sql);
                echo json_encode($lista);
                break;
            default:
                echo "Opción no valida.";
                break;
        }
    }
?>