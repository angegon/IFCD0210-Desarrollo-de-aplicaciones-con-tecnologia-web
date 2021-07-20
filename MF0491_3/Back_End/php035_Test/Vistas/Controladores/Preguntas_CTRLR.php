<?php
require_once ("Conexion.php");
require_once ("Modelos/Preguntas_MDL.php");

class Preguntas_CTRLR{
    public static function Recupera_Todos( $id_tema, $usados ){
        $lista = array();
        // Seleccionar las preguntas NO utilizadas para ese tema
        $sql="SELECT * FROM preguntas WHERE preg_tem_tema_id = $id_tema";
        if ($usados == false){
            $sql .= " AND preg_utilizada=0";
        }
        
        $cnx = Conexion::Conectar();
        $rs = mysqli_query( $cnx, $sql );
        while ( ($registro = mysqli_fetch_array( $rs, MYSQLI_ASSOC)) != null){
            // Crear pregunta y guardar en la lista
            //`preg_id`, `preg_pregunta`, `preg_respuesta_1`, `preg_respuesta_2`, 
            //`preg_respuesta_3`, `preg_respuesta_4`, `preg_tem_tema_id`, `preg_respuesta_buena`
            $pregunta = new Preguntas_MDL( 
                                $registro['preg_id'],
                                $registro['preg_pregunta'],
                                $registro['preg_respuesta_1'],
                                $registro['preg_respuesta_2'],
                                $registro['preg_respuesta_3'],
                                $registro['preg_respuesta_4'],
                                $registro['preg_tem_tema_id'],
                                $registro['preg_respuesta_buena'],
                                $registro['preg_utilizada']
            );
            $lista[] = $pregunta;
        }
        mysqli_close($cnx);
        //print_r($lista);
        return $lista;
    }
    public static function Insertar( $objeto_pregunta ){
        // Sacar del objeto las propiedades que necesite
        $preg = $objeto_pregunta->getPreg_pregunta();
        $r1= $objeto_pregunta->getPreg_respuesta_1();
        $r2= $objeto_pregunta->getPreg_respuesta_2();
        $r3= $objeto_pregunta->getPreg_respuesta_3();
        $r4= $objeto_pregunta->getPreg_respuesta_4();
        $tema = $objeto_pregunta->getPreg_tem_tema_id();
        $correcta = $objeto_pregunta->getPreg_respuesta_buena();

        $sql = "INSERT INTO preguntas VALUES 
                    (null, '$preg','$r1', '$r2','$r3','$r4', '$tema', '$correcta')";
        echo $sql."<br>";
        //conectar
        $cnx = Conexion::Conectar();
        //ejecutar sql
        mysqli_query( $cnx, $sql );
        //saber registros afectados
        $reg = mysqli_affected_rows($cnx);        
        //cerrar
        mysqli_close($cnx);
        //devolver registros creados
        return $reg;
    }
    public static function Modificar ( $objeto_pregunta ){
        // Sacar datos que necesito del modelo
        $id = $objeto_pregunta->getPreg_id();
        $preg = $objeto_pregunta->getPreg_pregunta();
        $r1= $objeto_pregunta->getPreg_respuesta_1();
        $r2= $objeto_pregunta->getPreg_respuesta_2();
        $r3= $objeto_pregunta->getPreg_respuesta_3();
        $r4= $objeto_pregunta->getPreg_respuesta_4();
        $tema = $objeto_pregunta->getPreg_tem_tema_id();
        $correcta = $objeto_pregunta->getPreg_respuesta_buena();
        // Preparar sql en base a esos datos
        $sql = "UPDATE preguntas SET
                            preg_pregunta='$preg',
                            preg_respuesta_1='$r1',
                            preg_respuesta_2='$r2',
                            preg_respuesta_3='$r3',
                            preg_respuesta_4='$r4',
                            preg_tem_tema_id='$tema',
                            preg_respuesta_buena='$correcta'
                WHERE preg_id='$id'";
         echo $sql."<br>";
         //conectar
         $cnx = Conexion::Conectar();
         //ejecutar sql
         mysqli_query( $cnx, $sql );
         //saber registros afectados
         $reg = mysqli_affected_rows($cnx);        
         //cerrar
         mysqli_close($cnx);
         //devolver registros creados
         return $reg;
    }

    private static function Actualizar_a_Valores_0( $id ){
        $sql = "UPDATE preguntas SET preg_utilizada=0 WHERE preg_tem_tema_id = $id";
        $cnx = Conexion::Conectar();
        mysqli_query( $cnx, $sql );      
        mysqli_close($cnx);
    }
    private static function Marcar_Como_Utilizada( $id ){
        $sql = "UPDATE preguntas SET preg_utilizada=1 WHERE preg_id = $id";
        $cnx = Conexion::Conectar();
        mysqli_query( $cnx, $sql );      
        mysqli_close($cnx);
    }

    public static function Seleccionar_Pregunta ( $id_tema ){
        $lista_preguntas = Preguntas_CTRLR::Recupera_Todos( $id_tema, false );
        if (count($lista_preguntas)==0)  {
            return "No hay preguntas de ese tema";
        }
        // Aleatoriza una de las n preguntas
        $pregunta_seleccionada = rand(0, count($lista_preguntas) - 1);
        
        if (count($lista_preguntas)==1)  {
            // Modificar la tabla para dejar utilizables todas
            Preguntas_CTRLR::Actualizar_a_Valores_0( $id_tema );
        }
        // Selecionar pregunta
        $preg_sel = $lista_preguntas[$pregunta_seleccionada];
        // Vuelco a variables los datos de la pregunta seleccionada
        $id = $preg_sel->getPreg_id();
        Preguntas_CTRLR::Marcar_Como_Utilizada( $id );
        $pregunta = $preg_sel->getPreg_pregunta();
        $resp1 = $preg_sel->getPreg_respuesta_1();
        $resp2 = $preg_sel->getPreg_respuesta_2();
        $resp3 = $preg_sel->getPreg_respuesta_3();
        $resp4 = $preg_sel->getPreg_respuesta_4();
        $correcta = $preg_sel->getPreg_respuesta_buena();

        $html = "  <div class='fpreguntas'>";
        $html .= "      <p class='fp_pregunta'>$pregunta</p>";
        $html .= "      <p class='fp_resp1'>
                            <input type='radio' name='rd_respuesta' id='rd1'>
                            $resp1
                        </p>";
        $html .= "      <p class='fp_resp2'>
                            <input type='radio' name='rd_respuesta' id='rd2'>
                            $resp2
                        </p>";
        $html .= "      <p class='fp_resp3'>
                            <input type='radio' name='rd_respuesta' id='rd3'>
                            $resp3
                        </p>";
        $html .= "      <p class='fp_resp4'>
                            <input type='radio' name='rd_respuesta' id='rd4'>
                            $resp4
                        </p>";        
        $html .= "      <input type='text' value='$correcta' id='correcta'>";
        $html .= "      <input type='button' value='Comprobar' onclick='fComprobar()'><br>";
        $html .= "      <p id='mensaje'>&nbsp;</p>";
        $html .= "  </div>";
        return $html;
    }
}