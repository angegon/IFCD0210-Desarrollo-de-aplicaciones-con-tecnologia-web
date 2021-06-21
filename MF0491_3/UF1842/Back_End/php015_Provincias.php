<?php
    // Leer el fichero
    $fd = fopen("php015_Provincias.txt", "r");

    $html = "<table border='1'>";
    $contador_registros = 0;
    $cabecera_de_menu = "";
    while(!feof($fd)){
        $registro = fgets($fd);
        if($registro != ""){
            // explode, devuelve un array con los campo separados
            // str_split devuelvve tantos grupos de n letras como se solicite
            $array_columnas = explode("#", $registro);
            //echo "Antes de separar " . $registro . "<br>";
            //echo "Despues de separar " . print_r($array_columnas);
            //echo "<hr>";
            if ($contador_registros > 0 ){
                $html .= "<tr><td>". $array_columnas[0] . "</td><td> " . $array_columnas[1] . "</td><td> " . $array_columnas[2] . "</td></tr>";
            } else {
                //$cabecera_de_menu = "<table border='1'><tr><th>". $array_columnas[0] . "</th><th> " . $array_columnas[1] . "</th><th> " . $array_columnas[2] . "</th></tr></table>";
                $html .= "<tr><th> Nombre Comunidad </th><th> Nombre Provincia </th><th> nº de habitantes</th></tr>";                
            }
            $contador_registros++;
        }
    }
    fclose($fd);
    $html .= "</table>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>
    <header>
        HABITANTES
    </header>
    <nav>
        <p><?=$cabecera_de_menu?></p>
        <?=$html?>
    </nav>
    <section>

    </section>
    <footer>
        &copy; AGM
    </footer>
</body>
</html>