<?php
    require_once("Conexion.php");
    class BBDD_CTRLR {
        public static function Recupera_Datos($sql){
            $lista = array();
            $cnx = Conexion::Conectar();
            $rs = mysqli_query($cnx, $sql);
            while (($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $lista [] = $registro;
            }
            mysqli_close($cnx);
            return $lista; 
        }

        public static function Opera_datos($sql, $operacion){
            $cnx = Conexion::Conectar();
            $rs = mysqli_query($cnx, $sql);
            if ($operacion == "insertar"){
                // Si es alta contesta con el id que genera
                $num = mysqli_insert_id($cnx);
            } else {
                // Si es un update, devuelve el número de registros afectados
                $num = mysqli_affected_rows($cnx);
            }
            mysql_close($cnx);
            return $num;   
        }
    }
?>