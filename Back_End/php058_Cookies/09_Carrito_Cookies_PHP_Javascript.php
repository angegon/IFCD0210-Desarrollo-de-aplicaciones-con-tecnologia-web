<?php
    if ( !isset ($_POST['producto']) ){
        // Si no existe el producto, vete al formulario
        header("Location:09_Carrito_Cookies_PHP_javascript.html");
    } else {
        $lista = array();
        // Lectura de cookie
        if (isset($_COOKIE['carrito'])){
            $lista = json_decode($_COOKIE["carrito"]);
        } 
        $valor_a_grabar = [
            "producto" => $_POST['producto'],
            "cantidad" => $_POST['cantidad'],
            "precio" => $_POST['precio']
        ];

        $lista[] = $valor_a_grabar;

        /* 
        echo "La cookie tiene";
        var_dump($lista);
        echo "<br>"; 
        */

        // Las cookies en php es el tiempo en segundos
        setcookie("carrito", json_encode($lista), time() + 3 * 24 * 60 * 60);
        header("Location:09_Carrito_Cookies_PHP_javascript.html");
    }
?>