<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provincias</title>
</head>
<body>
    <div class="container">
        <?php
            $contador = 0;  
            $html = "<table border=1>";
            $fd = fopen("php015_Fichero.txt", "r");
            while (!feof($fd)){
                $registro = fgets($fd);
                $datos_separados = explode("#", $registro);
                //echo gettype($registro). "<br>";
                if ( $contador == 0 ){
                    $html .= "<tr>";
                    $html .= "      <th>" . $datos_separados[0] . "</th>";
                    $html .= "      <th>" . $datos_separados[1] . "</th>";
                    $html .= "      <th>" . $datos_separados[2] . "</th>";
                    $html .= "</tr>";
                } else{
                    $hab= $datos_separados[2];
                    $html .= "<tr>";
                    $html .= "      <td>" . $datos_separados[0] . "</td>";
                    $html .= "      <td>" . $datos_separados[1] . "</td>";
                    $html .= "      <td>" . number_format ($hab,0, ",",".") . "</td>";
                    $html .= "</tr>";
                }
                $contador++;
            }
            fclose($fd);
            $html .= "</table>";
            echo $html;
        ?>
    </div>
</body>
</html>