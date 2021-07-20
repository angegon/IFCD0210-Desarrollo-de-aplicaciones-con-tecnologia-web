<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provincias</title>
    <style>
        .provincia,
        .comunidad {
            width: 50%;
            margin: 0 auto;
            float: left;
            background-color: lightblue;
        }

        .comunidad {
            width: 50%;
            float: left;
            background: lightcyan;
        }

        .comunidad table,
        .provincia table {
            width: 90%;
            margin: 0 auto;
        }
        .derecha {
            text-align: right;
        }
    </style>
</head>
<!--
    PHP Función number_format 
    Vale para formatear NUMEROS
    Devuelve un string con el número formateado
    $numero_formateado = number_format ( numero, #decimales, ",", "." );
-->

<body>
    <div class="container">
        <?php
        $comunidad_anterior = "";
        $comunidad_acumulado = 0;
        $comunidad_provincias = 0;
        $comunidad_texto = "<table border=1>";
        $comunidad_texto .= "<tr><th>Comunidad</th><th>Habitantes</th><th>#Provincias</th><th>Media</th></tr>";
        $contador = 0;
        $html = "<table border=1>";
        $html .= "<tr>";
        $html .= "      <th>Comunidad</th>";
        $html .= "      <th>Provincia</th>";
        $html .= "      <th>Habitantes</th>";
        $html .= "</tr>";
        $fd = fopen("php015_Fichero.txt", "r");
        while (!feof($fd)) {
            $registro = fgets($fd);
            $datos_separados = explode("#", $registro);
            if ($contador != 0) {
                $comunidad = $datos_separados[0];
                $provincia = $datos_separados[1];
                $habitantes = intval($datos_separados[2]);
                $html .= "<tr>";
                $html .= "      <td>" . $datos_separados[0] . "</td>";
                $html .= "      <td>" . $datos_separados[1] . "</td>";
                $html .= "      <td class='derecha'>" . number_format($habitantes, 0, ",", ".") . "</td>";
                $html .= "</tr>";

                if ($comunidad != $comunidad_anterior) {
                    if ($comunidad_anterior != "") {
                        $comunidad_texto .= "<tr>";
                        $comunidad_texto .= "   <td>" . $comunidad_anterior . "</td>";
                        $comunidad_texto .= "   <td class='derecha'>" .
                            number_format($comunidad_acumulado, 0, ",", ".") .
                            "</td>";
                        $comunidad_texto .= "   <td class='derecha'>" .
                            number_format($comunidad_provincias, 0, ",", ".") .
                            "</td>";
                        $media = $comunidad_acumulado / $comunidad_provincias;
                        $comunidad_texto .= "   <td class='derecha'>" . number_format($media, 2, ",", ".") . "</td>";
                        $comunidad_texto .= "</tr>";
                        $comunidad_acumulado = 0;
                        $comunidad_provincias = 0;
                    }
                    $comunidad_anterior = $comunidad;
                }
                $comunidad_acumulado += $habitantes;
                $comunidad_provincias++;
            }
            $contador++;
        }
        $comunidad_texto .= "<tr>";
        $comunidad_texto .= "   <td>" . $comunidad_anterior . "</td>";
        $comunidad_texto .= "   <td class='derecha'>" .
            number_format($comunidad_acumulado, 0, ",", ".") .
            "</td>";
        $comunidad_texto .= "   <td class='derecha'>" .
            number_format($comunidad_provincias, 0, ",", ".") .
            "</td>";
        $media = $comunidad_acumulado / $comunidad_provincias;
        $comunidad_texto .= "   <td class='derecha'>" . number_format($media, 2, ",", ".") . "</td>";
        $comunidad_texto .= "</tr>";
        fclose($fd);
        $html .= "</table>";
        ?>
        <div class="provincia"><?= $html ?></div>
        <div class="comunidad"><?= $comunidad_texto ?></div>
    </div>
</body>

</html>