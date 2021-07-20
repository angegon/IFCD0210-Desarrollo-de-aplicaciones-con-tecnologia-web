<?php

// valores por defecto en el formulario
    $id=0;
    $nombre = "";
    $dni="";
// Si existe operacion, relleno los datos
    if ($_POST['operacion'] != 'a'){
        // Buscar los datos por id
        $comprador = Compradores_CTRLR::Recupera_Por_Id( $_POST['id']);
        if ($comprador == null){
            $mensaje_error = "El id " . $_POST['id'] . " ya no existe";
        } else{
            $id = $comprador->getComp_id();
            $nombre = $comprador->getComp_nombre();
            $dni = $comprador->getComp_dni();
        }
    }
?>

<div>
    <form action="" method="POST">
        <input type="hidden" name="operacion_BBDD" id="operacion_BBDD" value="<?=$_POST['operacion']?>">
        <input type="hidden" name="comp_id" id="comp_id" value="<?=$id?>">
        <table>
            <caption>CRUD Compradores</caption>
            <tr>
                <td>Nombre</td>
                <td>
                    <input type="text" name="nombre" id="nombre" required value="<?=$nombre?>">
                </td>
            </tr>
                <td>DNI</td>
                <td>
                    <input type="text" name="dni" id="dni" required value="<?=$dni?>">
                </td>
            </tr>
            <tr>
                <td class="botonera">
                    <input type="button" value="Cancelar">
                    <?php
                        if ($_POST['operacion']=='a'){
                            echo "<input type='submit' value='Añadir'>";
                        }
                        if ($_POST['operacion']=='m'){
                            echo "<input type='submit' value='Modificar'>";
                        }
                        if ($_POST['operacion']=='e'){
                            echo "<input type='submit' value='Eliminar'>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td id="td_error" colspan="2">
                    <?=$mensaje_error?>
                </td>
            </tr>
        </table>
    </form>
</div>

