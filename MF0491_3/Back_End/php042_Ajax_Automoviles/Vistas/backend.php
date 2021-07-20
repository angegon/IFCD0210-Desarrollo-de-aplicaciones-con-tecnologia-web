<?php
    require_once("../Controladores/Automoviles_CTRLR.php");
    // Si recibo operación, tengo que atenderla
    if (isset($_GET['operacion'])){
        $op = $_GET['operacion'];
        switch ($op){
            case 'lista_automoviles':
                echo "<h1> Lista </h1>";
                echo AutomovilesCTRLR::Pintar_Tabla();
                break;
        };
    }
?>