<?php
    require_once "Controladores/Automoviles_CTRLR.php";
    $mensaje_error = "";
    //var_dump($_POST);
    // Si tengo operacion_bbdd pendiente, procesarla
    if (isset($_POST['operacion_BBDD'])){
        if ($_POST['operacion_BBDD'] == 'e'){
            $num_registros = Automoviles_CTRLR::Eliminar( $_POST['auto_id']);
        } else{
            $automovil_mdl = new Automoviles_MDL(
                $_POST['auto_id'], 
                $_POST['marca'], 
                $_POST['modelo'], 
                $_POST['color'], 
                $_POST['cilindrada'], 
                $_POST['matricula'], 
                $_POST['fcompra'],
                $_POST['icompra'], 
                $_POST['fventa'], 
                $_POST['iventa'], 
                $_POST['observaciones']
            );
            if ($_POST['operacion_BBDD'] == 'a'){
                $num_registros = Automoviles_CTRLR::Insertar($automovil_mdl);
            } else{
                $num_registros = Automoviles_CTRLR::Modificar($automovil_mdl);
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
    <title>Automoviles</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .table{
            width: 100%;
        }
        .derecha{
            text-align: right;
        }
        .izquierda{
            text-align: left;
        }
        .centro{
            text-align: center;
        }
        .separado{
            display: flex;
            justify-content: space-evenly;
        }
        td{
            padding: 5px;
        }
        .modal_formulario{
            position: absolute;
            top: 40px;
            width:300px;
            margin: 0 auto;
            background-color: lightgray;
            z-index: 20;
        }
        .modal_fondo{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            background-color: gray;
            opacity: 0.6;
        }
    </style>
    <script>
        function fProcesar( operacion, id ){
            //console.log( operacion + " - " + id );
            document.getElementById('operacion').value = operacion;
            document.getElementById('id').value = id;
            document.getElementById("frm_operacion").submit();
        }
        function fCancelar(){
            document.getElementById("frm_auto").style.display="none";
        }
    </script>
</head>
<body>
    <header></header>
    <section>
        <?php
            echo Automoviles_CTRLR::Pintar_Tabla();
        ?>
    </section>
    <div id="div_form">

    </div>
    <footer></footer>
    <br><br>
    <?php
        /*if (isset($_POST['operacion']) || isset($_POST['operacion_BBDD']) ){
            if (isset($_POST['operacion_BBDD'])){
                $_POST['operacion'] = $_POST['operacion_BBDD'];
            }*/
        if (isset($_POST['operacion']) || $mensaje_error != "" ){
            //pintar formulario
            require_once "Formularios/formulario.php";
        }
    ?>


    <!-- Este formulario es para enviar la operacion y el id -->
    <form id="frm_operacion" action="" method="POST">
        <input type="hidden" name="operacion" id="operacion">
        <input type="hidden" name="id" id="id">
    </form>



</body>
</html>