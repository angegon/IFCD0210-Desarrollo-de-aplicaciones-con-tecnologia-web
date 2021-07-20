<?php

    require_once("Conexion.php");
    require_once("Modelos/Automovil_MDL.php");

    class Automovil_CTRLR{
        private static function Recupera_Todos(){

            $lista = array();

            $sql = "SELECT * FROM automoviles ORDER BY auto_marca";
            
            //$CONEXION = new Conexion();
            //$cnx = $CONEXION->Conectar();
            // Para ejecutar método estatico, se usan los dos puntos, sin instanciar el objeto
            // con Clase::metodo
            $cnx = Conexion::Conectar();

            $rs = mysqli_query($cnx, $sql);
            while (($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                //while(($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $lista[]= new Automovil_MDL($registro['auto_id'], $registro['auto_marca'], $registro['auto_modelo'], $registro['auto_color'], $registro['auto_cilindrada'], $registro['auto_matricula'], $registro['auto_fecha_compra'], $registro['auto_importe_compra'], $registro['auto_fecha_venta'], $registro['auto_importe_venta'], $registro['auto_observaciones']);
            }

            mysqli_close($cnx);
            return $lista;
        }

        public static function Insertar($objeto_automovil){
            // Inserción recibiendo un Objeto
            $auto_marca = $objeto_automovil->getAuto_marca();
            $auto_modelo = $objeto_automovil->getAuto_modelo();
            $auto_color = $objeto_automovil->getAuto_color();
            $auto_cilindrada = $objeto_automovil->getAuto_cilindrada();
            $auto_matricula = $objeto_automovil->getAuto_matricula();
            $auto_fecha_compra = $objeto_automovil->getAuto_fecha_compra();
            $auto_importe_compra = $objeto_automovil->getAuto_importe_compra();
            $auto_fecha_venta = $objeto_automovil->getAuto_fecha_venta();
            $auto_importe_venta = $objeto_automovil->getAuto_importe_venta();
            $auto_observaciones = $objeto_automovil->getAuto_observaciones();


            $sql = "INSERT INTO automoviles Values (null, '$auto_marca', '$auto_modelo', '$auto_color', '$auto_cilindrada', '$auto_matricula', '$auto_fecha_compra', '$auto_importe_compra', null, '$auto_importe_venta', '$auto_observaciones')";

            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);
            // mysqli_insert_id:  función que devuelve el último id(clave primaria) insertado
            //$id = mysqli_insert_id($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Modificar($objeto_automovil){

            $id = $objeto_automovil->getAuto_id();
            $auto_marca = $objeto_automovil->getAuto_marca();
            $auto_modelo = $objeto_automovil->getAuto_modelo();
            $auto_color = $objeto_automovil->getAuto_color();
            $auto_cilindrada = $objeto_automovil->getAuto_cilindrada();
            $auto_matricula = $objeto_automovil->getAuto_matricula();
            $auto_fecha_compra = $objeto_automovil->getAuto_fecha_compra();
            $auto_importe_compra = $objeto_automovil->getAuto_importe_compra();
            $auto_fecha_venta = $objeto_automovil->getAuto_fecha_venta();
            $auto_importe_venta = $objeto_automovil->getAuto_importe_venta();
            $auto_observaciones = $objeto_automovil->getAuto_observaciones();

            $sql = "UPDATE automoviles SET 
                auto_marca = '$auto_marca'
                auto_modelo = '$auto_modelo'
                auto_color = '$auto_color'
                auto_cilindrada = '$auto_cilindrada'
                auto_matricula = '$auto_matricula'
                auto_fecha_compra = '$auto_fecha_compra'
                auto_importe_compra = '$auto_importe_compra'
                auto_fecha_venta = '$auto_fecha_venta'
                auto_importe_venta = '$auto_importe_venta'
                auto_observaciones = '$auto_observaciones'
                 WHERE auto_id = '$id'";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Eliminar($id){
            $sql = "DELETE FROM automoviles WHERE auto_id = '$id'";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Pintar_UL(){
            $datos = Automovil_CTRLR::Recupera_Todos(); // no hace falta this

            $html = "<ul>";
            for ($i = 0; $i < count($datos); $i++){
                $auto_marca = $datos[$i]->getAuto_marca();
                $auto_modelo = $datos[$i]->getAuto_modelo();
                $auto_color = $datos[$i]->getAuto_color();
                $auto_cilindrada = $datos[$i]->getAuto_cilindrada();
                $auto_matricula = $datos[$i]->getAuto_matricula();
                $auto_fecha_compra = $datos[$i]->getAuto_fecha_compra();
                $auto_importe_compra = $datos[$i]->getAuto_importe_compra();
                $auto_fecha_venta = $datos[$i]->getAuto_fecha_venta();
                $auto_importe_venta = $datos[$i]->getAuto_importe_venta();
                $auto_observaciones = $datos[$i]->getAuto_observaciones();              
                $html .= "<li>" . $auto_marca . " - " . $auto_modelo ."</li>";
            }
            $html .= "</ul>";

            return $html;
        }
    }
?>