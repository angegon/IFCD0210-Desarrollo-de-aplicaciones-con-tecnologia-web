<?php
    $datos_programa = array();
    // Cargar array desde fichero
        // Abrir el fichero
        $fd = fopen("php017_Gastos.txt", "r");        
            // Cargar el array linea a linea
        while (!feof($fd)){
            $registro = fgets($fd);
            if ($registro != ""){
                //echo "Registro: " . $registro . "<br>";
                $linea_con_datos_separados = explode("#", $registro);
                //print_r($linea_con_datos_separados);
                //echo "<br>";
                //echo "<hr>";
                $datos_programa[] = $linea_con_datos_separados;
            }

        }
        // Cerrar
        fclose($fd);
        echo "<hr>";
        

    // Imprimir el array
        $html = "<table>";
        for ($i=0; $i<count($datos_programa); $i++){
            $fila = $datos_programa[$i];
            //print_r($fila);
            //echo "<br>";
            if ($i == 0){
                $html .= "<tr>";
                $html .= "      <th>" . $fila[0] . "</th>";
                $html .= "      <th>" . $fila[1] . "</th>";
                $html .= "      <th>" . $fila[2] . "</th>";
                $html .= "</tr>";
            } else{
                $html .= "<tr class='datos'>";
                $html .= "      <td>" . $fila[0] . "</td>";
                $html .= "      <td>" . $fila[1] . "</td>";
                $html .= "      <td>" . $fila[2] . "</td>";
                $html .= "</tr>";
            }
        }
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