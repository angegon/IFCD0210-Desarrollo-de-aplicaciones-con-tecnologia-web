<?php
require_once "configuracion.php";

class Conexion{
    public static function Conectar(){
        $conexion = mysqli_connect(SERVIDOR, USUARIOBBDD, PASSWORDBBDD, BBDD);
        mysqli_set_charset($conexion, "UTF8");
        return $conexion;
    }
}
?>