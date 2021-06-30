<?php
/**
 * Contiene todas las funciones necesarias para manipular las BBDD
 */
    require_once ("Configuracion.php");
    function Conectar(){
        $conexion = mysqli_connect(SERVIDOR ,USUARIOBBDD , PASSWORDBBDD, BBDD);
        return $conexion;
    }

    function Recupera_Todos($filtro) {
        // Preparar SQL
        $sql = "SELECT * FROM contactos WHERE con_nombre LIKE '%$filtro%' ORDER BY con_nombre";
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

    function Recupera_Por_Id($id){
        // Preparar SQL
        $sql = "SELECT * FROM contactos WHERE con_id LIKE '%$id%' ORDER BY con_nombre";
        $datos_a_devolver = null;
        // conectar
        $cnx = Conectar();
        // Ejecutar
        $rs = mysqli_query($cnx, $sql);
        // Recorrer el resulset sino hay , devuelve NULL
        $datos_a_devolver = mysqli_fetch_row($rs);
        // Cerrar
        mysqli_close($cnx);
        // Retornar
        return $datos_a_devolver;
    }

    function Insertar($nombre, $telefono){
        // Sql
        $sql = "INSERT INTO contactos(con_id, con_nombre, con_telefono) VALUES (null,'$nombre','$telefono')";
        // Conectar
        $cnx = Conectar();
        // Ejecutar
        $registros_procesados = mysqli_query($cnx, $sql);
        // Averiguar # elementos procesados
        if ($registros_procesados) {
            $mensaje_error = "<br> Se ha guardado el contacto correctamente." . 
            mysqli_affected_rows($cnx) . " registros procesados."; // devuelve un 1 si ha ido bien
        } else {
            $mensaje_error .= "<br> No se ha podido guardar el contacto.";
        }
        // Cerrar
        mysqli_close($cnx);
        // Retornar # elementos procesados
        return $mensaje_error;
    }

    function Insertar_Modificar_Borrar($operacion, $id, $nombre, $telefono){
        if ($operacion == "i"){
            $sql = "INSERT INTO contactos(con_id, con_nombre, con_telefono) VALUES (null,'$nombre','$telefono')";
        } elseif ($operacion == "m") {
            $sql = "UPDATE contactos SET con_nombre = '$nombre', con_telefono = '$telefono'
            WHERE con_id = '$id' ";
        } else {
            $sql = "DELETE FROM contactos WHERE con_id = '$id' ";
        }
        $cnx = Conectar();
        mysqli_set_charset($cnx, "UTF8"); // Para evitar problemas acentos 
        // Ejecutar el sql para obtener el rs
        //$rs = mysqli_query($conexion, $sql);
        mysqli_query($cnx, $sql);
        $peticiones_procesadas = mysqli_affected_rows($cnx);
        // Desconectar
        mysqli_close($cnx);
        // Devolver el número de registros procesados
        return($peticiones_procesadas);
    }

    function Insertar_Modificar_Borrar_Array($operacion, $datos){
        $id = $datos[0];
        $nombre = $datos[1];
        $telefono = $datos[2];
        if ($operacion == "i"){
            $sql = "INSERT INTO contactos(con_id, con_nombre, con_telefono) VALUES (null,'$nombre','$telefono')";
        } elseif ($operacion == "m") {
            $sql = "UPDATE contactos SET con_nombre = '$nombre', con_telefono = '$telefono'
            WHERE con_id = '$id' ";
        } else {
            $sql = "DELETE FROM contactos WHERE con_id = '$id' ";
        }
        $cnx = Conectar();
        mysqli_set_charset($cnx, "UTF8"); // Para evitar problemas acentos 
        // Ejecutar el sql para obtener el rs
        //$rs = mysqli_query($conexion, $sql);
        mysqli_query($cnx, $sql);
        $peticiones_procesadas = mysqli_affected_rows($cnx);
        // Desconectar
        mysqli_close($cnx);
        // Devolver el número de registros procesados
        return($peticiones_procesadas);
    }

    function Modificar($id, $nombre, $telefono){
        // SQL
        $sql = "UPDATE contactos SET con_nombre = '$nombre', con_telefono = '$telefono'
            WHERE con_id = '$id' ";
        // Conectar
        $cnx = Conectar();
        mysqli_set_charset($cnx, "UTF8"); // Para evitar problemas acentos 
        // Ejecutar el sql para obtener el rs
        //$rs = mysqli_query($conexion, $sql);
        mysqli_query($cnx, $sql);
        $peticiones_procesadas = mysqli_affected_rows($cnx);
        // Desconectar
        mysqli_close($cnx);
        // Devolver el número de registros procesados
        return($peticiones_procesadas);
    }

    function Borrar($id){
        // SQL
        $sql = "DELETE FROM contactos WHERE con_id = '$id' ";
        // Conectar
        $cnx = Conectar();
        mysqli_set_charset($cnx, "UTF8"); // Para evitar problemas acentos 
        // Ejecutar el sql para obtener el rs
        //$rs = mysqli_query($conexion, $sql);
        mysqli_query($cnx, $sql);
        $peticiones_procesadas = mysqli_affected_rows($cnx);
        // Desconectar
        mysqli_close($cnx);
        // Devolver el número de registros procesados
        return($peticiones_procesadas);
    }

    function Formato_Tabla($filtro){
        $datos_a_manejar = Recupera_Todos($filtro);
        // Ahora $datos_a_manejar es un array asociativo con los datos solicitados
        $html = "<table>";
        $html .= "<caption> Seleccionados " . count($datos_a_manejar) . " contactos de la BBDD</caption>";
        $html .= "<tr><th>ID</th><th>NOMBRE</th><th>TELEFONO</th></tr>";
        for ($i = 0; $i < count($datos_a_manejar); $i++ ) {
            $html .= "<tr>";
            $html .= "  <td>" . $datos_a_manejar[$i]['con_id'] . "</td>";
            $html .= "  <td>" . $datos_a_manejar[$i]['con_nombre'] . "</td>";
            $html .= "  <td>" . $datos_a_manejar[$i]['con_telefono'] . "</td>";
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }

    function Formato_UL($filtro){
        $datos_a_manejar = Recupera_Todos($filtro);
        // Ahora $datos_a_manejar es un array asociativo con los datos solicitados
        $html = "<ul>";
        $html .= "<caption> Seleccionados " . count($datos_a_manejar) . " contactos de la BBDD</caption>";

        for ($i = 0; $i < count($datos_a_manejar); $i++ ) {
            $html .= "<li>";
            $html .= $datos_a_manejar[$i]['con_nombre'];
            $html .= "</li>";
        }
        $html .= "</ul>";
        return $html;
    }
    
    function Select($filtro){
        $datos_a_manejar = Recupera_Todos($filtro);
        // Ahora $datos_a_manejar es un array asociativo con los datos solicitados
        $html = "<caption> Seleccionados " . count($datos_a_manejar) . " contactos de la BBDD</caption><br>";
        $html .= "<select>";
        for ($i = 0; $i < count($datos_a_manejar); $i++ ) {
            $id = $datos_a_manejar[$i]['con_id'];
            $html .= "<option value='$id'>";
            $html .= $datos_a_manejar[$i]['con_nombre'];
            $html .= "</option>";
        }
        $html .= "</select>";
        return $html;
    }        
?>