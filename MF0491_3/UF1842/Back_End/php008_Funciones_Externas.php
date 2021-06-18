<?php
    // Visualizar Menú
        function fVisualizarMenu(){
            echo "<ul>";
            $agenda="pepe";
            $datos = $GLOBALS['agenda'];
            for ($i=0; $i<count( $datos ); $i++){
                $nombre = $datos[$i][0];
                echo "<li><a href='php008_Autollamada.php?nombre=$nombre'>" . $nombre . "</a></li>";
            }
            echo "</ul>";
        }
    // Visualizar el seleccionado
        function fImprimirDetalle(){            
            $datos = $GLOBALS['agenda'];
            // Para cada registro
            for ($i=0; $i<count($datos); $i++){
                $registro = $datos[$i];
                $nombre_solicitado = $GLOBALS['nombre_pedido'];
                //      imprime nombre, profesion, teléfono y guarda aficion
                if(strcasecmp( $nombre_solicitado, $registro[0]) == 0){
                    echo "Nombre: " . $registro[0] . "<br>";
                    echo "Profesión: " . $registro[1] . "<br>";
                    echo "Teléfono: " . $registro[2] . "<br>";
                    $aficiones = $registro[3];
                    //      Para cada aficion, imprimela
                    echo "Aficiones: ";
                    for ($j=0; $j<count($aficiones); $j++){
                        echo $aficiones[$j] . " ";
                    }
                    echo "<hr>";
                    return;                        
                }
            }
        }
    //Visualizar el mismo contenido en formato tabla sencilla
        function fImprimirDetalle_Tabla_sencilla(){
            $datos = $GLOBALS['agenda'];
            // Para cada registro
            for ($i=0; $i<count($datos); $i++){
                $registro = $datos[$i];
                $nombre_solicitado = $GLOBALS['nombre_pedido'];
                //      imprime nombre, profesion, teléfono y guarda aficion

                if(strcasecmp( $nombre_solicitado, $registro[0]) == 0){
                    $nombre =  $registro[0];
                    $profesion =  $registro[1];
                    $telefono =  $registro[2];
                    $aficiones =  $registro[3];
                    echo "<table border='1'>";
                    echo "<tr><th>Nombre</th><th>Profesión</th><th>Telefóno</th><th>Aficiones</th><tr>";
                    echo "<tr>";
                    echo "  <td>$nombre </td>";
                    echo "  <td>$profesion </td>";
                    echo "  <td>$telefono </td>";
                    //      Para cada aficion, imprimela
                    echo "<td> ";
                    for ($j=0; $j<count($aficiones); $j++){
                        echo $aficiones[$j] . " ";
                    }
                    echo "</td></tr></table> ";
                    echo "<hr>";
                    return;                        
                }
            }            
        }
    //Visualizar el mismo contenido en formato tabla algo menos sencilla
        function fImprimirDetalle_Tabla_Todos(){
            $datos = $GLOBALS['agenda'];
            // Para cada registro
            echo "<table border='1'>";
            echo "<tr><th>Nombre</th><th>Profesión</th><th>Telefóno</th><th>Aficiones</th><tr>";
            for ($i=0; $i<count($datos); $i++){
                $registro = $datos[$i];
                $nombre_solicitado = $GLOBALS['nombre_pedido'];
                //      imprime nombre, profesion, teléfono y guarda aficion
                $nombre =  $registro[0];
                $profesion =  $registro[1];
                $telefono =  $registro[2];
                $aficiones =  $registro[3];
                $n_aficiones = count($aficiones);

                if (count($n_aficiones) == 0){
                    $n_aficiones = 1;
                }

                echo "<tr>";
                echo "  <td rowspan='$n_aficiones'>$nombre </td>";
                echo "  <td rowspan='$n_aficiones'>$profesion </td>";
                echo "  <td rowspan='$n_aficiones'>$telefono </td>";
                    //      Para cada aficion, imprimela
                if (count($aficiones == 0)){
                    echo "  <td>Aburrido </td>";
                }
                else{
                    echo "<td> ";
                    for ($j=0; $j<count($aficiones); $j++){
                        echo $aficiones[$j] . " ";
                    }
                    echo "</td></tr></table> ";
                    echo "<hr>";
                }

                    return;                        
                }
            }            
        }        
?>