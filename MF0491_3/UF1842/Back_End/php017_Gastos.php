<?php
    $html = "<table>";
    $contador_registros = 0;
    // Abrir fichero
    $fd = fopen("php017_Gastos.txt", "r");
    // Mientras no sea fin
    while (!feof($fd)){
    //      Leer registro
        $registro = fgets($fd);
        if ($registro != ""){
        //      Separar los campos
            $array_datos = explode("#", $registro);
        //      Si es el primero
            if ( $contador_registros == 0){
        //          Sacar cabeceras
                $html .= "<tr>";
                $html .= "      <th>". $array_datos[0] . "</th>";
                $html .= "      <th>". $array_datos[1] . "</th>";
                $html .= "      <th>". $array_datos[2] . "</th>";
                $html .= "</tr>";
            } else {
        //      Si NO es el primero
        //          Sacar datos
                $html .= "<tr class='datos'>";
                for ($j=0; $j<count($array_datos); $j++)
                {
                    if ( !is_numeric( $array_datos[$j] ) ){
                        $html .= "<td>" . $array_datos[$j] ."</td>";
                    } else{
                        $cantidad = intval($array_datos[$j]);
                        $html .= "<td>" . number_format( $cantidad, 0, ",", ".") ."</td>";
                    }
                }
                $html .= "</tr>";
            }
        //      Sumar 1 a contador
            $contador_registros++;
        }
    }
    // Cerrar el fichero
    fclose($fd);
    $html .= "</table>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
    <style>
        td, th{
            padding: 5px;
        }
        td{
            text-align: right;
        }
        .datos:nth-child(even){
            background-color: lemonchiffon;
        }
        .datos:nth-child(odd){
            background-color: lightgrey;
        }
        .datos:hover{
            color: yellow;
            background-color: black;
        }
    </style>
</head>
<body>
    <div id="tabla">
        <?=$html?>
    </div>
</body>
</html>