<?php
    

    $id = 0;
    $marca = "";
    $modelo = "";
    $color = "";
    $cilindrada = "";
    $matricula = "";
    $fcompra = "";
    $icompra = "";
    $fventa = "";
    $iventa = "";
    $observaciones = "";

    if (isset($_POST['operacion'])){
        // Preparar el formulario para esa operacion
        if ($_POST['operacion'] != 'a'){
            // Recuperar los datos del id recibido
            $datos = Automoviles_CTRLR::Recupera_Por_Id( $_POST['id']);
            if ($datos == null) {
                $mensaje_error = "El id " . $_POST['id'] . " ya no existe";
            } else {
                    $id =  $datos->getAuto_id();
                    $marca = $datos->getAuto_marca();
                    $modelo = $datos->getAuto_modelo();
                    $color = $datos->getAuto_color();
                    $cilindrada = $datos->getAuto_cilindrada();
                    $matricula = $datos->getAuto_matricula();
                    $fcompra = $datos->getAuto_fecha_compra();
                    $icompra = $datos->getAuto_importe_compra();
                    $fventa = $datos->getAuto_fecha_venta();
                    $iventa = $datos->getAuto_importe_venta();
                    $observaciones = $datos->getAuto_observaciones();
            }
        }
    }
?>
<div class="modal_formulario">
    <form action="" method="POST" id="frm_auto">
    <input type="hidden" name="operacion_BBDD" id="operacion_BBDD" value="<?= $_POST['operacion'] ?>">
    <input type="hidden" name="auto_id" id="auto_id" value="<?= $id ?>">
        <h2>Automóviles</h2>
        <table>
            <tr>
                <td>Marca</td>
                <td>
                    <input type="text" name="marca" id="marca" value="<?= $marca ?>" required>
                </td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td>
                    <input type="text" name="modelo" id="modelo" value="<?= $modelo ?>" required>
                </td>
            </tr>
            <tr>
                <td>Color</td>
                <td>
                    <input type="text" name="color" id="color" value="<?= $color ?>" required>
                </td>
            </tr>
            <tr>
                <td>Cilindrada</td>
                <td>
                    <input type="text" name="cilindrada" id="cilindrada" value="<?= $cilindrada ?>" required>
                </td>
            </tr>
            <tr>
                <td>Matrícula</td>
                <td>
                    <input type="text" name="matricula" id="matricula" value="<?= $matricula ?>">
                </td>
            </tr>
            <tr>
                <td>Fecha Compra</td>
                <td>
                    <input type="date" name="fcompra" id="fcompra" value="<?= $fcompra ?>" required>
                </td>
            </tr>
            <tr>
                <td>Importe Compra</td>
                <td>
                    <input type="number" name="icompra" id="icompra" value="<?= $icompra ?>" required>
                </td>
            </tr>
            <tr>
                <td>Fecha Venta</td>
                <td>
                    <input type="date" name="fventa" id="fventa" value="<?= $fventa ?>">
                </td>
            </tr>
            <tr>
                <td>Importe Venta</td>
                <td>
                    <input type="number" name="iventa" id="iventa" value="<?= $iventa ?>">
                </td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td>
                    <textarea name="observaciones" id="observaciones"><?= $observaciones ?></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="button" value="Cancelar" onclick='fCancelar()'>
                    <?php
                    if (isset($_POST['operacion']) && $_POST['operacion'] == 'm') {
                        echo "<input type='submit' value='Modificar'>";
                    }
                    if (isset($_POST['operacion']) && $_POST['operacion'] == 'e') {
                        echo "<input type='submit' value='Eliminar'>";
                    }
                    if (isset($_POST['operacion']) && $_POST['operacion'] == 'a') {
                        echo "<input type='submit' value='Añadir'>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td id="td_error" colspan="2">
                    <?= $mensaje_error ?>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="modal_fondo"></div>