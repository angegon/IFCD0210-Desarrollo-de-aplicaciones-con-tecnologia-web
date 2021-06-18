<?php
    $nombre = "";
    $password ="";
    $color_pelo = "";
    $pais = "VE";
    if(isset($_POST['nombre']) && 
            isset($_POST['password']) &&
            isset($_POST['color_pelo']) &&
            isset($_POST['nacionalidad'])
            ){
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $color_pelo = $_POST['color_pelo'];
                $pais = $_POST['nacionalidad'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios </title>
</head>
<body>
    <div class="container">
        <!-- Sino ponemos action, se autollama a si mismo, tanto con metodo GET por defecto
        como con metodo post -->
        <!-- Los checkbox no marcados no se envian aunque tengan name -->
        <form action="" method="post">
            <label for="nombre"> Nombre
                <input type="text" name="nombre" id="nombre" value="<?=$nombre?>">
            </label><br>

            <label for="password"> Contraseña
                <input type="text" name="password" id="password">
            </label><br>

                <fieldset>
                    <legend> Color de pelo</legend>
                    <?php
                        $moreno_checked = "";
                        $rubio_checked = "";
                        $pelirojo_checked = "";

                        if ( !isset($_POST['color_pelo']) || $_POST['color_pelo'] == "rubio"){
                            $rubio_checked = " checked";
                        }
                        if ( isset($_POST['color_pelo']) && $_POST['color_pelo'] == "moreno"){
                            $moreno_checked = " checked";
                        }
                        if ( isset($_POST['color_pelo']) && $_POST['color_pelo'] == "pelirojo"){
                            $pelirojo_checked = " checked";
                        }                                        
                    ?>

                    <input type="radio" name="color_pelo" id="moreno" value="moreno" <?=$moreno_checked?>> Moreno
                    <input type="radio" name="color_pelo" id="rubio" value="rubio" <?=$rubio_checked?>> Rubio
                    <input type="radio" name="color_pelo" id="pelirrojo" value="pelirojo" <?=$pelirojo_checked?>> Pelirojo                
                </fieldset><br>
                
                <fieldset>
                        <?php
                            $alpinismo_chk = "";
                            $saltobase_chk = "";
                            $rafting_chk = "";
                            $buceo_chk = "";
                            $motociclismo_chk  = "";

                            $alpinismo = "";
                            $saltobase = "";
                            $rafting = "";
                            $buceo = "";
                            $motociclismo = "";

                            if ( isset($_POST['alpinismo'])){
                                $alpinismo_chk = " checked";
                                $alpinismo = "Alpinismo";
                            }
                            if ( isset($_POST['saltobase'])){
                                $saltobase_chk = " checked";
                                $saltobase = "Salto base";
                            }
                            if ( isset($_POST['rafting'])){
                                $rafting_chk = " checked";
                                $rafting = "Rafting";
                            }
                            if ( isset($_POST['buceo'])){
                                $buceo_chk = " checked";
                                $buceo = "Buceo";
                            }
                            if ( isset($_POST['motociclismo'])){
                                $motociclismo_chk = " checked";
                                $motociclismo = "Motociclismo";
                            }                                     
                        ?>                
                        <legend>Deporte que práctica</legend>
                        <input type="checkbox" name="alpinismo" id="alpinismo" value="alpinismo" <?=$alpinismo_chk?>>Alpinismo
                        <input type="checkbox" name="saltobase" id="salto_base" value="salto_base" <?=$saltobase_chk?>>Salto Base
                        <input type="checkbox" name="rafting" id="rafting" value="rafting" <?=$rafting_chk?>> Rafting
                        <input type="checkbox" name="buceo" id="buceo" value="buceo" <?=$buceo_chk?>>Buceo
                        <input type="checkbox" name="motociclismo" id="motociclismo" value="motociclismo" <?=$motociclismo_chk?>>Motociclismo
                </fieldset><br>
                
                <?php
                    $es_selected = "";
                    $fr_selected = "";
                    $ve_selected = "";
                    $it_selected = "";

                    if ($pais == "ES"){
                        $es_selected = " selected";
                    }
                    if ($pais == "FR"){
                        $fr_selected = " selected";
                    }
                    if ($pais == "VE"){
                        $ve_selected = " selected";
                    }
                    if ($pais == "IT"){
                        $it_selected = " selected";
                    }
                                                                        
                ?>
                <label for="nacionalidad">
                            <select name="nacionalidad" id="nacionalidad">
                                <option value="ES" <?=$es_selected?>>España</option>
                                <option value="FR" <?=$fr_selected?>>Francia</option>
                                <option value="VE" <?=$ve_selected?>>Venezuela</option>
                                <option value="IT" <?=$it_selected?>>Italia</option>
                            </select>
                </label><br>

                <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
        <br>
        <?php
            if(isset($_POST['nombre'])){
                echo "El nombre que me has tecleado es $nombre <br>";
                echo "La contraseña que me has tecleado es $password <br>";
                echo "La color del pelo es $color_pelo <br>";
                echo "Los deporte que te gustan son: $alpinismo $saltobase $rafting $buceo $motociclismo <br>";
                echo "La nacionalidad es: $pais";
            }
        ?>
    </div>
</body>
</html>