<?php
    require_once "Conexion.php";
    require_once "Modelos/Compradores_MDL.php";

    class Compradores_CTRLR{
        private static function Recupera_Todos(){
            $lista = array();
            $sql = "SELECT * FROM compradores ORDER BY comp_nombre";
            $cnx = Conexion::Conectar();
            $rs = mysqli_query( $cnx, $sql);
            while ( ($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $lista[] = new Compradores_MDL(
                    $reg['comp_id'], 
                    $reg['comp_nombre'],
                    $reg['comp_dni']
                );
            }
            mysqli_close($cnx);
            return $lista;
        }
        public static function Recupera_Por_Id( $id ){
            $objeto = null;
            $sql = "SELECT * FROM compradores WHERE comp_id = '$id'";
            //echo $sql."<br>";
            $cnx = Conexion::Conectar();
            $rs = mysqli_query( $cnx, $sql);
            while ( ($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $objeto = new Compradores_MDL(
                    $reg['comp_id'], 
                    $reg['comp_nombre'],
                    $reg['comp_dni']
                );
            }
            mysqli_close($cnx);
            return $objeto;
        }
        public static function Insertar( $modelo ){
            // sql
            $id = $modelo->getComp_id();
            $nombre = $modelo->getComp_nombre();
            $dni = $modelo->getComp_dni();
            $sql = "INSERT INTO compradores VALUES (
                        null, '$nombre', '$dni'
                    )";
            echo $sql."<br>";
            $cnx = Conexion::Conectar();
            mysqli_query( $cnx, $sql);
            // mysqli_insert_id($cnx) es una función de BBDD que me devuelve el último id insertado
            $id = mysqli_insert_id($cnx);

            mysqli_close($cnx);
            return $id;
        }
        public static function Modificar( $modelo ){
            $id = $modelo->getComp_id();
            $nombre = $modelo->getComp_nombre();
            $dni = $modelo->getComp_dni();
            $sql = "UPDATE compradores SET
                        comp_nombre = '$nombre',
                        comp_dni = '$dni'
                    WHERE comp_id = '$id'";
            echo $sql."<br>";
            $cnx = Conexion::Conectar();
            mysqli_query( $cnx, $sql);
            $afectados = mysqli_affected_rows($cnx);
            mysqli_close($cnx);
            return $afectados;
        }
        public static function Eliminar( $id ){
            $sql = "DELETE FROM compradores WHERE comp_id = '$id'";
            echo $sql."<br>";           
            $cnx = Conexion::Conectar();
            mysqli_query( $cnx, $sql);
            $afectados = mysqli_affected_rows($cnx);
            mysqli_close($cnx);
            return $afectados;
        }
        public static function Pintar_Tabla(){
            $html = "<table class='table' border=1>";               
            $html .= "<tr>";
            //$html .= "      <th>ID</th>";
            $html .= "      <th>Nombre</th>";
            $html .= "      <th>DNI</th>";
            $html .= "      <th>Acciones</th>";
            $html .= "</tr>";
            
            $datos = Compradores_CTRLR::Recupera_Todos();
            
            foreach ($datos as $obj){
                $html .= "<tr>";
                $id = $obj->getComp_id();
                $nombre = $obj->getComp_nombre();
                $dni = $obj->getComp_dni();
                //$html .= "      <td class='centro'>" . $datos[$i]->getAuto_id() . "</td>";
                $html .= "      <td class='izquierda'>" . $nombre . "</td>";
                $html .= "      <td class='izquierda'>" . $dni . "</td>";

                $html .= "      <td class='separado'>
                                    <input type='button' value='Eliminar' onclick='fProcesar(\"e\",$id)'>
                                    <input type='button' value='Modificar' onclick='fProcesar(\"m\",$id)'>
                                </td>";
                $html .= "</tr>";
            }
            
            $nvehiculos = count($datos);
            $html .= "<caption>
                            Relación de $nvehiculos compradores
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='button' value='Añadir' onclick='fProcesar(\"a\",0)'>
                      </caption>";
            $html .= "</table>";
            return $html;
        }
    }