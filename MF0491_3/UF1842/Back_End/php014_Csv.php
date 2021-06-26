<?php
    // Leer el fichero
    $fd = fopen("php014_CSV.txt", "r");
    $html ="<table border=1>";
    $contador_registros = 0;
    $cabecera_de_menu="";
    while ( !feof($fd) ){

        $registro = fgets($fd);
        if ( $registro != ""){
            // explode devuelve un array con los campos separados
            // str_split devuelve tantos grupos de n letras como se solicite 
            /*
            $split = str_split($registro, 3);
            print_r ($split);
            echo "<br>";
            */
            $columnas = explode("#", $registro);
            /*
            echo "Antes de separar " . $registro . "<br>";
            echo "columnas: ";
            print_r($columnas);
            echo "<hr>";
            */
            if ($contador_registros >0){
                $html .= "<tr>";
                $html .= "      <td>" . $columnas[0] . "</td>";
                $html .= "      <td>" . $columnas[1] . "</td>";
                $html .= "      <td>" . $columnas[2] . "</td>";
                $html .= "</tr>";
            } else{
                $html .= "<tr>";
                $html .= "      <th>" . $columnas[0] . "</th>";
                $html .= "      <th>" . $columnas[1] . "</th>";
                $html .= "      <th>" . $columnas[2] . "</th>";
                $html .= "</tr>"; 
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
        FRUTAS
    </header>
    <nav>
        <p><?=$cabecera_de_menu?></p>
        <?=$html?>
    </nav>
    <section>

    </section>
    <footer>
        &copy;JRT
    </footer>
</body>
</html>