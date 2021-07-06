<?php

    require_once("Conexion.php");
    require_once("Modelos/Preguntas_MDL.php");

    class Preguntas_CTRLR{
        public static function Recupera_Todos($id_tema){
            $lista = array();

            $sql = "SELECT * FROM preguntas WHERE preg_tem_tema_id = $id_tema";
            $cnx = Conexion::Conectar();

            $resul_set = mysqli_query($cnx, $sql);

            while (($registro = mysqli_fetch_array($resul_set, MYSQLI_ASSOC)) != null){
                $pregunta = new Preguntas_MDL($registro['preg_id'], $registro['preg_pregunta'], $registro['preg_respuesta_1'], $registro['preg_respuesta_2'], $registro['preg_respuesta_3'], $registro['preg_respuesta_4'], $registro['preg_tem_tema_id'], $registro['preg_respuesta_buena']);

                $lista[] = $pregunta;
            }

            mysqli_close($cnx);
            return $lista;
        }

        public static function Insertar($objeto_Pregunta){
            // Inserción recibiendo un Objeto 
            $pregunta = $objeto_Pregunta->getPreg_pregunta(); 
            $respuesta_1 = $objeto_Pregunta->getPreg_respuesta_1();
            $respuesta_2 = $objeto_Pregunta->getPreg_respuesta_2();
            $respuesta_3 = $objeto_Pregunta->getPreg_respuesta_3();
            $respuesta_4 = $objeto_Pregunta->getPreg_respuesta_4();
            $tem_tema_id = $objeto_Pregunta->getPreg_tem_tema_id();
            $respuesta_buena = $objeto_Pregunta->getPreg_respuesta_buena(); 

            $sql = "INSERT INTO preguntas Values (null, '$pregunta', '$respuesta_1', '$respuesta_2', '$respuesta_3', '$respuesta_4', $tem_tema_id, $respuesta_buena)";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }

        public static function Modificar($objeto_Pregunta){
            // Modificación recibiendo un Objeto 
            $pregunta_id = $objeto_Pregunta->getPreg_id(); 
            $pregunta = $objeto_Pregunta->getPreg_pregunta(); 
            $respuesta_1 = $objeto_Pregunta->getPreg_respuesta_1();
            $respuesta_2 = $objeto_Pregunta->getPreg_respuesta_2();
            $respuesta_3 = $objeto_Pregunta->getPreg_respuesta_3();
            $respuesta_4 = $objeto_Pregunta->getPreg_respuesta_4();
            $tem_tema_id = $objeto_Pregunta->getPreg_tem_tema_id();
            $respuesta_buena = $objeto_Pregunta->getPreg_respuesta_buena();

            $sql = "UPDATE preguntas SET 
                    preg_pregunta = '$pregunta',
                    preg_respuesta_1 = '$respuesta_1',
                    preg_respuesta_2 = '$respuesta_2',
                    preg_respuesta_3 = '$respuesta_3',
                    preg_respuesta_4 = '$respuesta_4',
                    preg_tem_tema_id = '$tem_tema_id',
                    preg_respuesta_buena = '$respuesta_buena'
             WHERE preg_id = '$pregunta_id'";
            
            $cnx = Conexion::Conectar();
            mysqli_query($cnx, $sql);
            $registros_insertados = mysqli_affected_rows($cnx);

            mysqli_close($cnx);
            return $registros_insertados;

        }        
    }
?>