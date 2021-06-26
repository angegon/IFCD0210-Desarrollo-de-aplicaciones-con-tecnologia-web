<?php
// array para guardar datos de la edad solicitada
$datos_edad = array();
// No me has pedido edad
$edad_solicitada = -999;
if (isset($_POST['edad'])) {
    // guardo la edad solicitada
    $edad_solicitada = $_POST['edad'];
}
$contador = 0;
$html = "<table class='table'>";
$fd = fopen("php016_Seguros.csv", "r");
while (!feof($fd)) {
    $registro = fgets($fd);
    if ($registro != "") {
        $datos_separados = explode(";", $registro);
        // Controlar la edad solicitada
        if ($edad_solicitada == $datos_separados[0]) {
            $datos_edad = $datos_separados;
        }
        //echo gettype($registro). "<br>";
        if ($contador == 0) {
            $html .= "<caption>" . $registro . "</caption>";
        }
        if ($contador == 1) {
            $html .= "<tr>";
            for ($i = 0; $i < count($datos_separados); $i++) {
                $html .= "<th>" . $datos_separados[$i] . "</th>";
            }
            $html .= "</tr>";
        }
        if ($contador > 1) {
            $html .= "<tr class='linea'>";
            for ($i = 0; $i < count($datos_separados); $i++) {
                $html .= "<td>" . $datos_separados[$i] . "</td>";
            }
            $html .= "</tr>";
        }
        $contador++;
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
    <title>Seguros</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        td {
            text-align: right;
        }

        .linea:nth-child(even) {
            background-color: lightblue;
        }

        .linea:nth-child(odd) {
            background-color: lightgray;
        }

        .linea:hover {
            background-color: blue;
            color: white;
        }
    </style>
    <script>
        function fValidar() {
            document.getElementById("parrafo_error").innerHTML = "";
            if (document.getElementById("edad").value < 18 ||
                document.getElementById("edad").value > 75) {
                document.getElementById("parrafo_error").innerHTML = "El seguro no le cubre. Edad entre 18 y 75";
                document.getElementById("edad").focus();
                //event.preventDefault();
                return;
            }
            document.getElementById("frm").submit();
        }
    </script>
</head>

<body>
    <div class="container">
        <form action="" method="POST" id="frm">
            <label for="edad">Edad (de 18 a 75)
                <input type="number" name="edad" id="edad" min="18" max="75">
            </label><br>
            <!--
                <button onclick="fValidar()">Enviar</button>
            -->
            <input type="button" value="Enviar" onclick="fValidar()">
            <br>
            <p id="parrafo_error">&nbsp;</p>
        </form>
        <div>
            Datos para la edad solicitada<br>
            <?php
            for ($i = 0; $i < count($datos_edad); $i++) {
                echo $datos_edad[$i] . " ";
            }
            ?>
        </div>
        <?php
        echo $html;
        ?>
    </div>
</body>

</html>