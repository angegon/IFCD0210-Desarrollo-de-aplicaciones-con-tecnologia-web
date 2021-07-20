<?php
    require_once "Modelos/Temas_MDL.php";
    require_once "Modelos/Preguntas_MDL.php";
    require_once "Controladores/Temas_CTRLR.php";
    require_once "Controladores/Preguntas_CTRLR.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test por temas</title>
    <link rel="stylesheet" href="../Estilos/css.css">
    <script>
        function fCargar_Pregunta( id ){
            document.getElementById("operacion").value = 'cp';
            document.getElementById("id").value = id;
            document.getElementById("frm_operacion").submit();
        }
        function fComprobar(){
            
            if (
                 (document.getElementById("rd1").checked == true && document.getElementById("correcta").value == 1) ||
                 (document.getElementById("rd2").checked == true && document.getElementById("correcta").value == 2) ||
                 (document.getElementById("rd3").checked == true && document.getElementById("correcta").value == 3) ||
                 (document.getElementById("rd4").checked == true && document.getElementById("correcta").value == 4) 
                ){
                    document.getElementById("mensaje").innerHTML = "Enhorabuena. Es correcto";
                 } else{
                    document.getElementById("mensaje").innerHTML = "No es correcto";
                 }
        }
    </script>
</head>
<body>
    <form id="frm_operacion" action="" method="POST">
        <input type="hidden" name="operacion" id="operacion">
        <input type="hidden" name="id" id="id">
    </form>
    <div class="container">
        <header>Preguntas tipo</header>
        <nav>
            <?php   
                echo Temas_CTRLR::Pintar_UL();
            ?>
        </nav>
        <section>
            <?php
                if ( isset($_POST['operacion']) ){
                    echo Preguntas_CTRLR::Seleccionar_Pregunta( $_POST['id'] );
                }
                
            ?>
        </section>
        <footer>&copy;JRT-2021</footer>
    </div>
</body>
</html>