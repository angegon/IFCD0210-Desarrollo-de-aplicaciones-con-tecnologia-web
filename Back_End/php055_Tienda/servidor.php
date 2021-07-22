<?php
    require_once("Controladores/BBDD_CTRLR.php");

    if(isset($_REQUEST['peticion'])){
        switch($_REQUEST['peticion']){
            case "recupera_todos_usuarios":
                $sql = "SELECT * FROM usuarios ORDER BY usu_nombre";
                $lista = BBDD_CTRLR::Recupera_datos($sql);
                echo json_encode($lista);
                break;
            case "recupera_todos_productos":
                $sql = "SELECT * FROM productos ORDER BY prod_nombre";
                $lista = BBDD_CTRLR::Recupera_datos($sql);
                echo json_encode($lista);
                break;
            case "recupera_todos_clientes":
                $sql = "SELECT * FROM clientes ORDER BY cli_empresa";
                $lista = BBDD_CTRLR::Recupera_datos($sql);
                echo json_encode($lista);
                break;
            case "recupera_todos_clientes_filtro":
                $filtro_codigo = $_GET['filtro_codigo'];
                $filtro_empresa = $_GET['filtro_empresa'];
                $filtro_orden = "cli_" . $_GET['filtro_orden'];

                $sql = "SELECT * FROM clientes WHERE cli_codigo LIKE '$filtro_codigo%' AND cli_empresa LIKE '$filtro_empresa%' ORDER BY $filtro_orden ASC";

                $lista = BBDD_CTRLR::Recupera_datos($sql);
                echo json_encode($lista);
                break;                                   
            default:
                echo "Opción no permitida.";
        }
    }
?>