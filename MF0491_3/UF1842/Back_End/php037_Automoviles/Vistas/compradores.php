<!-- 
    Paso 1.- Rellenar y enviar el formulario de operaciones mediante la función fProcesar
    Paso 2.- Crear el formulario con los valores por defecto en el formulario
             Si la operación no es 'a' -> Buscar datos en la BBDD (id)
    Paso 3.- Gestión de la variable de error
    Paso 4.- Si tengo que mostrar el formulario, lo muestro
-->
<?php
    require_once "Controladores/Compradores_CTRLR.php";
    // control de errores PHP
    $mensaje_error = "";
    if (isset($_POST['operacion_BBDD'])){
        if ($_POST['operacion_BBDD'] == 'e'){
            $num_registros = Compradores_CTRLR::Eliminar( $_POST['comp_id']);
        } else{
            $comprador_mdl = new Compradores_MDL(
                $_POST['comp_id'], 
                $_POST['nombre'], 
                $_POST['dni']
            );
            if ($_POST['operacion_BBDD'] == 'a'){
                $num_registros = Compradores_CTRLR::Insertar($comprador_mdl);
            } else{
                $num_registros = Compradores_CTRLR::Modificar($comprador_mdl);
            }
        }
        if ($num_registros == 0){
            $mensaje_error = "No he podido realizar la operación solicitada";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compradores</title>
    <script>
        function fProcesar(op,id){
            document.getElementById('operacion').value = op;
            document.getElementById('id').value = id;
            document.getElementById('frm_operacion').submit();
        }
    </script>
</head>
<body>
    <section>
        <?php
            echo Compradores_CTRLR::Pintar_Tabla();
        ?>
    </section>
    <article>
        <?php
        if (isset($_POST['operacion'])){
            include_once "Formularios/form_compradores.php";
        }
        ?>
    </article>
    <article>
        <!-- Este formulario es para enviar la operacion y el id -->
        <form id="frm_operacion" action="" method="POST">
            <input type="hidden" name="operacion" id="operacion">
            <input type="hidden" name="id" id="id">
        </form>
    </article>
</body>
</html>