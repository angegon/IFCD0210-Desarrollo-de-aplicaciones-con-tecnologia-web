<?php
$color = "AMAriLLO";

switch (strtolower($color)) {
    case "amarillo":
        echo "canario";
        break;
    case "verde":
        echo "hierba";
        break;
    case "azul":
        echo "cielo";
        break;
    default: 
            echo "Otro";
            break;
    }   
    echo "<br>";

$carnet_si_no = "c";

switch (strtolower($carnet_si_no)) {
    case "a1":
    case "a2":
    case "b":
        echo "tienes carnet";
        break;
    default: 
        echo "No tienes carnet";
}
echo "<br>";