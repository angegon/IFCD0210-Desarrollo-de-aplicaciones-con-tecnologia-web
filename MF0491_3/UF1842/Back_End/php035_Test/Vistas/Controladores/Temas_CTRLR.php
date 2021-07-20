<?php

use Temas_CTRLR as GlobalTemas_CTRLR;

require_once "Conexion.php";
require_once "Modelos/Temas_MDL.php";

//$CONEXION = new Conexion();
//$cnx = $CONEXION->Conectar();
// Para ejecutar método estatico, se usan los dos puntos, sin instanciar el objeto
// con Clase::metodo
class Temas_CTRLR{
    private static function Recupera_Todos(){
        $lista = array();
        $sql = "SELECT * FROM temas ORDER BY tem_tema";
        $cnx = Conexion::Conectar();
        $rs = mysqli_query( $cnx, $sql);
        while ( ($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC))!= null){
            /* Con clase estándar
            $objeto_tema = new stdClass;
            $objeto_tema->id = $registro['tem_id'];
            $objeto_tema->tema = $registro['tem_tema'];
            */
            $objeto_tema = new Temas_MDL($registro['tem_id'], $registro['tem_tema']);
            $lista[] = $objeto_tema;
        }
        mysqli_close($cnx);
        return $lista;
    }

    public static function Insertar( $objeto_tema ){
        $tema = $objeto_tema->getTem_tema(); 
        $sql ="INSERT INTO temas VALUES ( null, '$tema' )";
        $cnx = Conexion::Conectar();
        mysqli_query ($cnx, $sql);
        $registros_insertados = mysqli_affected_rows( $cnx );
        mysqli_close($cnx);
        return $registros_insertados;
    }
    public static function Modificar( $objeto_tema ){
        $id = $objeto_tema->getTem_id();
        $tema = $objeto_tema->getTem_tema(); 
        $sql ="UPDATE temas SET tem_tema = '$tema' WHERE tem_id= '$id'";
        echo $sql."<br>";
        $cnx = Conexion::Conectar();
        mysqli_query ($cnx, $sql);
        $registros_insertados = mysqli_affected_rows( $cnx );
        mysqli_close($cnx);
        return $registros_insertados;
    }
    public static function Eliminar( $id ){
        $sql ="DELETE FROM temas WHERE tem_id= '$id'";
        echo $sql."<br>";
        $cnx = Conexion::Conectar();
        mysqli_query ($cnx, $sql);
        $registros_insertados = mysqli_affected_rows( $cnx );
        mysqli_close($cnx);
        return $registros_insertados;
    }

    public static function Pintar_UL(){
        $datos = Temas_CTRLR::Recupera_Todos();
        $html = "<ul>";
        for ($i=0; $i<count($datos); $i++){
            $objeto = $datos[$i];
            $id = $objeto->getTem_id();
            $tema = $objeto->getTem_tema();
            $html .= "<li onclick='fCargar_Pregunta(\"$id\")'>$tema</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}