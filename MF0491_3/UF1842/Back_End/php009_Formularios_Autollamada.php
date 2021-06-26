<?php
    $nombre ="";
    $password="";
    $color_pelo="";
    $pais="VE";
    if ( isset ( $_POST['nombre']) && 
         isset($_POST['password']) &&
         isset($_POST['color_pelo']) &&
         isset($_POST['nacionalidad'])  ){
                    $nombre = $_POST['nombre'];
                    $password= $_POST['password'];
                    $color_pelo = $_POST['color_pelo'];
                    $pais=$_POST['nacionalidad'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="nombre">Nombre
                <input type="text" name="nombre" id="nombre" value="<?=$nombre?>">
            </label><br>
            <label for="password">Contraseña
                <input type="password" name="password" id="password" value="<?=$password?>">
            </label><br>
            <fieldset>
                <legend>Color de Pelo</legend> 
                <?php
                    $moreno_checked ="";
                    $rubio_checked ="";
                    $pelirrojo_checked ="";
                    if ( !isset( $_POST['color_pelo']) || $_POST['color_pelo']=="Rubio"){
                        $rubio_checked = " checked ";
                    }
                    if ( isset( $_POST['color_pelo']) && $_POST['color_pelo']=="Moreno"){
                        $moreno_checked = " checked ";
                    }
                    if ( isset( $_POST['color_pelo']) && $_POST['color_pelo']=="Pelirrojo"){
                        $pelirrojo_checked = " checked ";
                    }
                ?>
                <input type="radio" name="color_pelo" id="moreno" value="Moreno" 
                        <?=$moreno_checked?>>Moreno
                <input type="radio" name="color_pelo" id="rubio" value="Rubio" 
                        <?=$rubio_checked?>>Rubio
                <input type="radio" name="color_pelo" id="pelirrojo" value="Pelirrojo" 
                        <?=$pelirrojo_checked?>>Pelirrojo
                </fieldset><br>
                <fieldset>
                    <?php
                        $chk_alpinismo="";
                        $chk_rafting="";
                        $chk_saltobase="";
                        $chk_buceo="";
                        $chk_motociclismo="";

                        $alpinismo="";
                        $rafting="";
                        $saltobase="";
                        $buceo="";
                        $motociclismo="";
                        
                        if ( isset ($_POST['alpinismo'])){
                            $chk_alpinismo = " checked ";
                            $alpinismo="Alpinismo";
                        }
                        if ( isset ($_POST['rafting'])){
                            $chk_rafting = " checked ";
                            $rafting = "Rafting";
                        }
                        if ( isset ($_POST['saltobase'])){
                            $chk_saltobase = " checked ";
                            $saltobase = "Salto base";
                        }
                        if ( isset ($_POST['buceo'])){
                            $chk_buceo = " checked ";
                            $buceo = "Buceo";
                        }
                        if ( isset ($_POST['motociclismo'])){
                            $chk_motociclismo = " checked ";
                            $motociclismo = "Motociclismo";
                        }
                    ?>
                    <legend>Deportes que practica</legend>
                    <input type="checkbox" name="alpinismo" id="alpinismo" 
                        <?=$chk_alpinismo?> value="alpinismo">Alpinismo
                    <input type="checkbox" name="rafting" id="rafting"
                        <?=$chk_rafting?> value="rafting">Rafting
                    <input type="checkbox" name="saltobase" id="saltobase"
                        <?=$chk_saltobase?> value="saltobase">Salto base
                    <input type="checkbox" name="buceo" id="buceo"
                        <?=$chk_buceo?> value="buceo">Buceo
                    <input type="checkbox" name="motociclismo" id="motociclismo"
                        <?=$chk_motociclismo?> value="motociclismo">Motociclismo
                </fieldset>
                <?php
                    $es_selected="";
                    $fr_selected="";
                    $ve_selected="";
                    $it_selected="";
                    if ($pais == "ES"){
                        $es_selected =" SELECTED ";
                    }
                    if ($pais == "FR"){
                        $fr_selected =" SELECTED ";
                    }
                    if ($pais == "VE"){
                        $ve_selected =" SELECTED ";
                    }
                    if ($pais == "IT"){
                        $it_selected =" SELECTED ";
                    }
                ?>
                <label for="nacionalidad">Nacionalidad
                    <select name="nacionalidad" id="nacionalidad">
                        <option value="ES" <?=$es_selected?>>España</option>
                        <option value="FR" <?=$fr_selected?>>Francia</option>
                        <option value="VE" <?=$ve_selected?>>Venezuela</option>
                        <option value="IT" <?=$it_selected?>>Italia</option>
                    </select>
                </label>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
        <?php
            if ( isset ( $_POST['nombre'] ) ){
                echo "El nombre que me has tecleado es $nombre<br>";
                echo "El password que me has tecleado es $password<br>";
                echo "El color_pelo que me has tecleado es $color_pelo<br>";
                echo "Deportes: $alpinismo $rafting $saltobase $buceo $motociclismo<br>";
                echo "Nacionalidad: $pais<br>";
            }
        ?>
    </div>
</body>
</html>