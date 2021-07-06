<?php
    require_once "php034_Productos_MDL.php";

    $lista = array();

    //$objeto = new Clientes_MDL("CT01", "Empresa1", "C/1", "Pobl1", "1111", "Resp1", "");
    // Similar a 

    $lista[] = new Productos_MDL("CT01", "Empresa1", "C/1", "Pobl1", "1111", "Resp1", "", "");
    $lista[] = new Productos_MDL("CT02", "Empresa2", "C/2", "Pobl2", "2222", "Resp2", "", "");
    $lista[] = new Productos_MDL("CT03", "Empresa3", "C/3", "Pobl3", "3333", "Resp3", "", "");
    
    for ($i = 0; $i < count($lista); $i++){
        $objeto_producto = $lista[$i];
        echo $objeto_producto->getProd_codigo() . "<br>";
    }
?>