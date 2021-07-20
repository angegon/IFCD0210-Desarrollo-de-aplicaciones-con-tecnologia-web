<?php

    require_once "Configuracion.php";
    class Conexion{
        // Si ponemos delante la palabra static el objeto se crea desde la clase
        public static function Conectar(){
            $conexion = mysqli_connect(SERVIDOR, USUARIOBBDD, PASSWORDBBDD, BBDD);
            return $conexion;
        }
    } 
?>