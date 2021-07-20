<?php

    require_once ("configuracion.php");
    function Conectar(){
        $conexion = mysqli_connect(SERVIDOR ,USUARIOBBDD , PASSWORDBBDD, BBDD);
        mysqli_set_charset($conexion, "UTF8"); // Para evitar problemas acentos    
        return $conexion;
    }

    function Recupera_Todos() {
        // Preparar SQL
        $sql = "SELECT * FROM productos ORDER BY prod_nombre";
        $datos = array ();
        // conectar
        $cnx = Conectar();
        // Ejecutar
        $rs = mysqli_query($cnx, $sql);
        // Recorrer el resulset rellenando el array
        // Fetch array se posiciona en el siguiente registro y devuelve sus datos
        // en el formato ordinal(nº de columna) o asociativo(nombre de columna).
        // Sino hay siguiente, devuelve NULL
        while (($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
            $datos[] = $registro;  // Equivalente a un push
        }
        // Cerrar
        mysqli_close($cnx);
        // Retornar
        return $datos;
    }

    function Dibujar(){
        $datos_a_manejar = Recupera_Todos();
        // Ahora $datos_a_manejar es un array asociativo con los datos solicitados
        $html ="";
        for ($i = 0; $i < count($datos_a_manejar); $i++ ) {
            $html .= "<div class='producto'>";
            $html .= "  <img class='imagen' src='../imagenes/" . $datos_a_manejar[$i]       ['prod_foto'] . "'  alt='". $datos_a_manejar[$i]['prod_nombre']  . "'>";            
            $html .=  "<p class='nombre'>" . $datos_a_manejar[$i]['prod_nombre'] . "</p>";
            $html .=  "<p class='precio'>" . number_format(floatval($datos_a_manejar[$i]['prod_precio']), 2, ",", ".") . "</p>";
            $html .= "</div>";
        }
        return $html;
    }    
?>