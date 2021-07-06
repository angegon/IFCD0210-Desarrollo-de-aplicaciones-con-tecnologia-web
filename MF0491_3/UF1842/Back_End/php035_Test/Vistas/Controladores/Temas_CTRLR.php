<?php

    require_once("Conexion.php");
    require_once("Modelos/Temas_MDL.php");

    class Temas_CTRLR{
        private static function Recupera_Todos(){

            $lista = array();

            $sql = "SELECT * FROM temas ORDER BY tem_tema";
            
            //$CONEXION = new Conexion();
            //$cnx = $CONEXION->Conectar();
            // Para ejecutar método estatico, se usan los dos puntos, sin instanciar el objeto
            // con Clase::metodo
            $cnx = Conexion::Conectar();

            $rs = mysqli_query($cnx, $sql);
            while (($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                //while(($registro = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $lista[]= new Temas_MDL($registro['tem_id'], $registro['tem_tema']);
            }

            mysqli_close($cnx);
            return $lista;
        }

        public static function Insertar($objeto_tema){
            // Inserción recibiendo un Objeto
            $tema = $objeto_tema->getTem_tema();

            $sql = "INSERT INTO temas Values (null, '$tema')";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Modificar($objeto_tema){

            $id = $objeto_tema->getTem_id();
            $tema = $objeto_tema->getTem_tema();

            $sql = "UPDATE temas SET tem_tema = '$tema' WHERE tem_id = '$id'";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Eliminar($id){
            $sql = "DELETE FROM temas WHERE tem_id = '$id'";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Pintar_UL(){
            $datos = Temas_CTRLR::Recupera_Todos(); // no hace falta this

            $html = "<ul>";
            for ($i = 0; $i < count($datos); $i++){
                $id = $datos[$i]->getTem_Id();
                $tema = $datos[$i]->getTem_Tema();
                $html .= "<li>" . $tema . "</li>";
            }
            $html .= "</ul>";

            return $html;
        }
    }
?>