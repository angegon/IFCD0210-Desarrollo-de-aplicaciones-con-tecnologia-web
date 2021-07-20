<?php
require_once("conexion.php");
class Tareas_CTRLR{
    public static function Recupera_Todos($sql){
        $lista = array();
        $cnx = Conexion::Conectar();
        // A que bbdd le pido la información
        $rs = mysqli_query($cnx, $sql);
        while (($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null ){
            $lista[] = $reg;
        }
        mysqli_close($cnx);
        return $lista;
    }
    public static function Inserciones($nom, $desc, $fec, $est){
        $sql = "INSERT INTO tareas VALUES(null, '$nom', '$desc', '$fec', '$est')";
        // A que bbdd le pido la información
        $cnx = Conexion::Conectar();
        mysqli_query($cnx, $sql);
        $n = mysqli_insert_id($cnx);
        mysqli_close($cnx);
        return $n;
    }
    public static function Modificaciones($id, $nom, $desc, $fec, $est){
        $sql = "UPDATE tareas SET tar_nombre = '$nom', 
                                    tar_descripcion = '$desc', 
                                    tar_fecha = '$fec', 
                                    tar_estado = '$est'
                                    WHERE tar_id = $id";
        // A que bbdd le pido la información
        $cnx = Conexion::Conectar();
        mysqli_query($cnx, $sql);
        $n = mysqli_affected_rows($cnx);
        mysqli_close($cnx);
        return $n;
    }
    public static function Borrados($id){
        $sql = "DELETE FROM tareas WHERE tar_id = '$id'";
        // A que bbdd le pido la información
        $cnx = Conexion::Conectar();
        mysqli_query($cnx, $sql);
        $n = mysqli_affected_rows($cnx);
        mysqli_close($cnx);
        return $n;
    }
}
?>