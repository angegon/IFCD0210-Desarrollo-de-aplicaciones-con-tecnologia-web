<?php
    //Preparar la tabla a imprimir
    $html = "<table>";
    $html .= "   <tr>";
    $html .= "       <th>Comunidad</th>";
    $html .= "       <th>#Habitantes</th>"; 
    $html .= "       <th>#Provincias</th>";    
    $html .= "   <tr>";

    // Inicializar las variables
    $comunidad_anterior="";
    $comunidad_acumulador=0;
    $comunidad_provincias=0;
    // Abrir fichero
    $fd = fopen("php018_Comunidades.txt", "r");

    // Procesar
    while (!feof($fd)){
        $linea = fgets($fd);
        if ($linea != "") {
            $registro = explode("#", $linea);
            $comunidad_leida = $registro[0];
            $habitantes_leidos = intval($registro[2]);

            // Rutina de acumulación
            if ( $comunidad_leida != $comunidad_anterior){
                if ($comunidad_anterior != ""){
                    $html .= "<tr>";
                    $html .= "      <td>" . $comunidad_anterior . "</td>";
                    $html .= "      <td class='d'>" . number_format($comunidad_acumulador,0,",",".") . "</td>";
                    $html .= "      <td class='d'>" . $comunidad_provincias . "</td>";
                    $html .= "</tr>";
                }
                $comunidad_acumulador = 0;
                $comunidad_provincias = 0;
                $comunidad_anterior = $comunidad_leida;
            }
            $comunidad_acumulador += $habitantes_leidos;
            $comunidad_provincias++;
        }
    }
    // Cerrar fichero
    fclose($fd);
    if ($comunidad_anterior != ""){
        $html .= "<tr>";
        $html .= "      <td>" . $comunidad_anterior . "</td>";
        $html .= "      <td class='d'>" . number_format($comunidad_acumulador,0,",",".") . "</td>";
        $html .= "      <td class='d'>" . $comunidad_provincias . "</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen por comunidades</title>
    <style>
        .d{
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="resumen">
            <?=$html?>
        </div>
    </div>
</body>
</html>