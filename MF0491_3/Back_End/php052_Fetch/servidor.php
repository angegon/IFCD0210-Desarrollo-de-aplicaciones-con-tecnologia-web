<?php
    require_once("Automoviles_CTRLR.php");

    //var_dump(json_encode(Automoviles_CTRLR::recupera_Todos()));
    //var_dump(json_encode(Automoviles_CTRLR::filtrar_Marca($_GET['marca'])));

    if (isset($_REQUEST['peticion'])) {
        switch($_REQUEST['peticion']){
            case 'rt':
                $datos = Automoviles_CTRLR::recupera_Todos();
                echo json_encode($datos); // Devuelve los datos al index codificados en formato JSON
                break;
            case 'texto':
                echo "<b> Tu nombre es: </b>" . $_GET['nombre']; // No hace encode
                break;
            case 'filtro':
                $lista = Automoviles_CTRLR::filtrar_Marca($_GET['marca']);
                echo json_encode($lista); 
                break;
            case 'filtrar_post':
                $lista = Automoviles_CTRLR::filtrar_Marca($_POST['marca']);
                echo json_encode($lista); 
                break;
        }
    }
?>