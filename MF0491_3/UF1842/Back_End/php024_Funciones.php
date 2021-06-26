<?php
    function Ejecutar_Consulta_Asociativa(){
        $sql ="SELECT cli_codigo, cli_empresa FROM clientes";
        // Función que genera un array bidemensional con los datos del sql
        $array_datos = array();
        $cnx = mysqli_connect("localhost", "root", "", "bd_pedidos");
        mysqli_set_charset($cnx, "UTF8");
        $rs = mysqli_query( $cnx, $sql);
        while ( ($registro = mysqli_fetch_array ($rs, MYSQLI_ASSOC)) != null){
            $array_datos[] = $registro;
        }
        mysqli_close($cnx);
        for ($i=0; $i<count($array_datos); $i++){
            echo $array_datos[$i]['cli_codigo'] . "-" . $array_datos[$i]['cli_empresa'] . "<br>";
        }
    }
    function Ejecutar_Consulta($sql){
        // Función que genera un array bidemensional con los datos del sql
        $array_datos = array();
        $cnx = mysqli_connect("localhost", "root", "", "bd_pedidos");
        mysqli_set_charset($cnx, "UTF8");
        $rs = mysqli_query( $cnx, $sql);
        while ( ($registro = mysqli_fetch_array ($rs, MYSQLI_NUM)) != null){
            $array_datos[] = $registro;
        }
        mysqli_close($cnx);
        return $array_datos;
    }

    function Volcar_En_Modo_Table( $sql, $titulo ){
        $datos_a_volcar = Ejecutar_Consulta($sql);
        $tabla = "<table border=1>";
        $tabla .= $titulo;
        for ($i=0; $i<count($datos_a_volcar); $i++){
            $tabla .= "<tr>";
            for ($j=0; $j<count($datos_a_volcar[$i]); $j++){
                $tabla .= "<td>" . $datos_a_volcar[$i][$j] . "</td>";
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";
        return $tabla;
    }

    function Volcar_En_Modo_UL( $sql ){
        $datos_a_volcar = Ejecutar_Consulta($sql);
        $texto = "<ul>";
        for ($i=0; $i<count($datos_a_volcar); $i++){
            $elemento = $datos_a_volcar[$i][0];
            $texto .= "     <li onclick='fEnviar(\"$elemento\")'>" . $elemento . "</li>";
        }
        $texto .= "</ul>";
        return $texto;
    }

    // Hacer función Volcar_En_Modo_Radio una consulta de 1 campo
    function Volcar_En_Modo_Radio( $sql, $titulo ){
        $datos_devueltos = Ejecutar_Consulta( $sql );
        // $datos_devueltos es un array con la información solicitada
        //print_r($datos_devueltos);
        $texto = "<fieldset>";
        $texto .= "<legend>$titulo</legend>";
        for ($i=0; $i<count($datos_devueltos); $i++){
            $poblacion = $datos_devueltos[$i][0];
            $texto .= "<input type='radio' name='x' value='$poblacion'>" . $poblacion . "<br>";
        }
        $texto .= "</fieldset>";
        return $texto; 
    }

    // Hacer función Volcar_En_Modo_Select una consulta de 1 campo        
    function Volcar_En_Modo_Select( $sql ){
        $datos_devueltos = Ejecutar_Consulta( $sql );
        $texto = "<SELECT>";
        for ($i=0; $i<count($datos_devueltos); $i++){
            $dato = $datos_devueltos[$i][0];
            $texto .= "<option value ='$dato'>" . $dato . "</option>";
        }
        $texto .= "</SELECT>";
        return $texto;
    }

    // Programación MVC  ( Modelo de datos - Vista - Controlador )
    // Programa CRUD ( Create, Read, Update, Delete )

    function Carta_Personalizada($nombre, $premio, $fecha, $poblacion, $direccion){
        $texto = "<p>Estimado/a <b>$nombre</b>:<p>";
        $texto .= "<p>Le informamos de que le ha correspondido un premio de <b>$premio</b> € ";
        $texto .= "en el sorteo del día <b>$fecha</b>.</p>";
        $texto .= "<p>Puede pasar a recogerlo en nuestras oficinas de <b>$poblacion</b>, <b>$direccion</b> a partir de mañana.</p>";
        return $texto;
    }