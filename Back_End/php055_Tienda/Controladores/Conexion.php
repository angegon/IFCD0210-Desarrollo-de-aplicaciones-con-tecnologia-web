<?php
    require_once("Configuracion.php");
    class Conexion{
        public static function Conectar(){
            $conexion = mysqli_connect(ServidorBBDD, UsuarioBBDD, PasswordBBDD, BBDD);
            mysqli_set_charset($conexion, "UTF8");
            return $conexion;
        }
    }
?>