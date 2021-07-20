<?php
    require_once("Controlador/Tareas_CTRLR.php");
    $sql = "SELECT * FROM tareas ORDER BY tar_fecha DESC";
    $lista = Tareas_CTRLR::Recupera_Todos($sql);

    Pintar_Lista($lista);

    echo "<hr>";
    $sql = "SELECT * FROM tareas where tar_nombre = 'Comer'";
    $lista = Tareas_CTRLR::Recupera_Todos($sql);
    Pintar_Lista($lista);

    echo "<hr>";
    $sql = "SELECT * FROM tareas where tar_id = '2'";
    $lista = Tareas_CTRLR::Recupera_Todos($sql);
    Pintar_Lista($lista);

    function Pintar_Lista($datos){
        foreach($datos as $objeto){
            echo $objeto['tar_id'] . " - " . $objeto['tar_nombre'] . "<br>";
         }
    }
?>