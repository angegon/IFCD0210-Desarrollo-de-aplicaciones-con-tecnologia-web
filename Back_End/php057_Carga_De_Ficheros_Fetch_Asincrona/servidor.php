<?php
    if (isset($_POST['peticion'])){
        switch ($_POST['peticion']){
            case "recoge_fichero":
                $mensaje = "";
                //echo $_POST['nombre'] . "<br>";
                // Los archivos que recibo los guarda automáticamente en $_FILES
                //var_dump($_FILES)
                $fichero = $_FILES['fichero'];
                $nuevo_fichero = "ficheros/" . $fichero['name'];
                // ruta de donde cojo el archivo, ruta donde lo dejo
                if (file_exists($nuevo_fichero)){
                    $mensaje = " El fichero ya existe.";
                } else {
                    $resultado_mover = move_uploaded_file($fichero['tmp_name'], $nuevo_fichero);
                    if ($resultado_mover == true) {
                        $mensaje = 'subida ok';
                    } else {
                        $mensaje = 'subida ko';
                    }
                }
                echo $mensaje;
                break;
        }
    }
?>