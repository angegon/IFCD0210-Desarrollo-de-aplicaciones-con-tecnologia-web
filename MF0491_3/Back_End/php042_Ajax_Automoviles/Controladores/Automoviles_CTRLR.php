<?php
    require_once "Conexion.php";
    require_once "../Modelos/Automoviles_MDL.php";

    class Automoviles_CTRLR{
        private static function Recupera_Todos(){
            $lista = array();
            $sql = "SELECT * FROM automoviles ORDER BY auto_marca, auto_modelo";
            $cnx = Conexion::Conectar();
            $rs = mysqli_query( $cnx, $sql);
            while ( ($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $lista[] = new Automoviles_MDL(
                    $reg['auto_id'], 
                    $reg['auto_marca'],
                    $reg['auto_modelo'], 
                    $reg['auto_color'], 
                    $reg['auto_cilindrada'],
                    $reg['auto_matricula'], 
                    $reg['auto_fecha_compra'],
                    $reg['auto_importe_compra'], 
                    $reg['auto_fecha_venta'], 
                    $reg['auto_importe_venta'], 
                    $reg['auto_observaciones']
                );
            }
            mysqli_close($cnx);
            return $lista;
        }
        public static function Recupera_Por_Id( $id ){
            $objeto = null;
            $sql = "SELECT * FROM automoviles WHERE auto_id = $id";
            $cnx = Conexion::Conectar();
            $rs = mysqli_query( $cnx, $sql);
            while ( ($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
                $objeto = new Automoviles_MDL(
                    $reg['auto_id'], 
                    $reg['auto_marca'],
                    $reg['auto_modelo'], 
                    $reg['auto_color'], 
                    $reg['auto_cilindrada'],
                    $reg['auto_matricula'], 
                    $reg['auto_fecha_compra'],
                    $reg['auto_importe_compra'], 
                    $reg['auto_fecha_venta'], 
                    $reg['auto_importe_venta'], 
                    $reg['auto_observaciones']
                );
            }
            mysqli_close($cnx);
            return $objeto;
        }
        public static function Insertar( $modelo ){
            // sql
            $id = $modelo->getAuto_id();
            $mar = $modelo->getAuto_marca();
            $mod = $modelo->getAuto_modelo();
            $col = $modelo->getAuto_color();
            $cil = $modelo->getAuto_cilindrada();
            $mat = $modelo->getAuto_matricula();
            $fcom = $modelo->getAuto_fecha_compra();
            $icom = $modelo->getAuto_importe_compra();
            $fven = $modelo->getAuto_fecha_venta();
            $iven = $modelo->getAuto_importe_venta();
            $obs = $modelo->getAuto_observaciones();
            $sql = "INSERT INTO automoviles VALUES (
                        null, '$mar', '$mod', '$col', '$cil', '$mat', '$fcom', $icom, '$fven', '$iven', '$obs'
                    )";
            //echo $sql."<br>";
            // conectar
            $cnx = Conexion::Conectar();
            // ejecutar el sql
            mysqli_query( $cnx, $sql);
            // saber cuantos he insertado
            //$afectados = mysqli_affected_rows($cnx);
            
            // mysqli_insert_id($cnx) es una función de BBDD que me devuelve el último id insertado
            $id = mysqli_insert_id($cnx);

            // cerrar
            mysqli_close($cnx);
            // contestar cuantos he insertado
            return $id;
        }
        public static function Modificar( $modelo ){
            $id = $modelo->getAuto_id();
            $mar = $modelo->getAuto_marca();
            $mod = $modelo->getAuto_modelo();
            $col = $modelo->getAuto_color();
            $cil = $modelo->getAuto_cilindrada();
            $mat = $modelo->getAuto_matricula();
            $fcom = $modelo->getAuto_fecha_compra();
            $icom = $modelo->getAuto_importe_compra();
            $fven = $modelo->getAuto_fecha_venta();
            $iven = $modelo->getAuto_importe_venta();
            $obs = $modelo->getAuto_observaciones();
            $sql = "UPDATE automoviles SET
                        auto_marca = '$mar',
                        auto_modelo = '$mod',
                        auto_color = '$col',
                        auto_cilindrada = '$cil',
                        auto_matricula = '$mat',
                        auto_fecha_compra = '$fcom',
                        auto_importe_compra = '$icom',
                        auto_fecha_venta = '$fven',
                        auto_importe_venta = '$iven',
                        auto_observaciones = '$obs'
                    WHERE auto_id = '$id'";
            //echo $sql."<br>";
            $cnx = Conexion::Conectar();
            mysqli_query( $cnx, $sql);
            $afectados = mysqli_affected_rows($cnx);
            // cerrar
            mysqli_close($cnx);
            return $afectados;
        }
        public static function Eliminar( $id ){
            $sql = "DELETE FROM automoviles WHERE auto_id = '$id'";
            //echo $sql."<br>";           
            $cnx = Conexion::Conectar();
            mysqli_query( $cnx, $sql);
            $afectados = mysqli_affected_rows($cnx);
            mysqli_close($cnx);
            return $afectados;
        }
        public static function Pintar_Tabla(){
            // ¿Qué necesito?
            // Unos datos a pintar y un string que componga la tabla
            
            $html = "<table class='table' border=1>";
               
            $html .= "<tr>";
            //$html .= "      <th>ID</th>";
            $html .= "      <th>Marca</th>";
            $html .= "      <th>Modelo</th>";
            $html .= "      <th>Color</th>";
            $html .= "      <th>Cilindrada</th>";
            $html .= "      <th>Matrícula</th>";
            $html .= "      <th>F.Compra</th>";
            $html .= "      <th>I.Compra</th>";
            $html .= "      <th>F.Venta</th>";
            $html .= "      <th>I.Venta</th>";
            //$html .= "      <th>Observaciones</th>";
            $html .= "      <th>Acciones</th>";
            $html .= "</tr>";
            // $datos es un array de n registros.
            // Cada registro es un modelo de automóvil
            $datos = Automoviles_CTRLR::Recupera_Todos();
            //`auto_id`, `auto_marca`, `auto_modelo`, `auto_color`, `auto_cilindrada`, `auto_matricula`, 
            //`auto_fecha_compra`, `auto_importe_compra`, `auto_fecha_venta`, `auto_importe_venta`, `auto_observaciones`
            /*
            for ($i=0; $i<count($datos); $i++){
                $html .= "<tr>";
                //$html .= "      <td class='centro'>" . $datos[$i]->getAuto_id() . "</td>";
                $html .= "      <td class='izquierda'>" . $datos[$i]->getAuto_marca() . "</td>";
                $html .= "      <td class='izquierda'>" . $datos[$i]->getAuto_modelo() . "</td>";
                $html .= "      <td class='izquierda'>" . $datos[$i]->getAuto_color() . "</td>";
                $html .= "      <td class='derecha'>" . $datos[$i]->getAuto_cilindrada() . "</td>";
                $html .= "      <td class='centro'>" . $datos[$i]->getAuto_matricula() . "</td>";
                $html .= "      <td class='centro'>" . $datos[$i]->getAuto_fecha_compra() . "</td>";
                $html .= "      <td class='derecha'>" . $datos[$i]->getAuto_importe_compra() . "</td>";
                $html .= "      <td class='centro'>" . $datos[$i]->getAuto_fecha_venta() . "</td>";
                $html .= "      <td class='derecha'>" . $datos[$i]->getAuto_importe_venta() . "</td>";
                //$html .= "      <td class='izquierda'>" . $datos[$i]->getAuto_observaciones() . "</td>";
                $html .= "      <td class='separado'>
                                    <input type='button' value='Eliminar'>
                                    <input type='button' value='Modificar'>
                                </td>";
                $html .= "</tr>";
            }
            */
            
            foreach ($datos as $obj){
                $html .= "<tr>";
                $id = $obj->getAuto_id();
                $icompra = intval($obj->getAuto_importe_compra());
                $texto_icompra=number_format($icompra, 0, ",", ".");
                $iventa = intval($obj->getAuto_importe_venta());
                $texto_iventa=number_format($iventa, 0, ",", ".");
                //$html .= "      <td class='centro'>" . $datos[$i]->getAuto_id() . "</td>";
                $html .= "      <td class='izquierda'>" . $obj->getAuto_marca() . "</td>";
                $html .= "      <td class='izquierda'>" . $obj->getAuto_modelo() . "</td>";
                $html .= "      <td class='izquierda'>" . $obj->getAuto_color() . "</td>";
                $html .= "      <td class='derecha'>" . $obj->getAuto_cilindrada() . "</td>";
                $html .= "      <td class='centro'>" . $obj->getAuto_matricula() . "</td>";
                $html .= "      <td class='centro'>" . $obj->getAuto_fecha_compra() . "</td>";
                $html .= "      <td class='derecha'>" . $texto_icompra . "</td>";
                $html .= "      <td class='centro'>" . $obj->getAuto_fecha_venta() . "</td>";
                $html .= "      <td class='derecha'>" . $texto_iventa . "</td>";
                //$html .= "      <td class='izquierda'>" . $obj->getAuto_observaciones() . "</td>";
                $html .= "      <td class='separado'>
                                    <input type='button' value='Eliminar' onclick='fProcesar(\"e\",$id)'>
                                    <input type='button' value='Modificar' onclick='fProcesar(\"m\",$id)'>
                                </td>";
                $html .= "</tr>";
            }
            
            $nvehiculos = count($datos);
            $html .= "<caption>
                            Relación de $nvehiculos vehículos
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type='button' value='Añadir' onclick='fProcesar(\"a\",0)'>
                      </caption>";
            $html .= "</table>";
            return $html;
        }
    }