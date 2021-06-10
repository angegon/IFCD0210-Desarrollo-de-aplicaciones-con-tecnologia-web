<?php
// Una empresa decide donar el 10% de cada donación.
// Calcular la donación total

    echo "<hr><h1>REQUEST</h1><br>";
    print_r($_REQUEST);
    echo "<hr><h1>POST</h1><br>";
    print_r($_POST);
    echo "<hr><h1>GET</h1><br>";
    print_r($_GET);

    echo "<hr>";
    $donacion = $_REQUEST["donacion"];
    $donacion_empresa = $donacion * 0.10;
    echo "Tu aportas <span style='color:blue;font-size:20px;'>$donacion</span> euros<br>";
    echo "La empresa aportará <span style='color:blue;font-size:20px;'>$donacion_empresa</span> euros<br>";
    $total = $donacion + $donacion_empresa;
    echo "Total de aportación es de <span style='color:green;font-size:25px;'>$total</span> euros<br>";
    $secreto = $_REQUEST['secreto'];
    echo "El campo secreto vale $secreto<br>";
?>