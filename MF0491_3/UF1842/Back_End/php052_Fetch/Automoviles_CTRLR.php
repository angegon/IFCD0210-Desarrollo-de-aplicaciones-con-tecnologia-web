<?php
    class Automoviles_CTRLR{
        public static function recupera_Todos($sql){
            $lista = array ();
            $sql = "SELECT * FROM automoviles";
            // A que bbdd le pido la información
            $cnx = mysqli_connect("localhost", "root", "", "bd_automoviles");
            mysqli_set_charset($cnx, "UTF8");
            // que información quiero
            $rs = mysqli_query($cnx, $sql);
            while (($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null ){
                $lista[] = $reg;
            }
            mysqli_close($cnx);
            return $lista;
        }

        public static function filtrar_Marca($marca){
            $lista = array ();
            $sql = "SELECT * FROM automoviles WHERE auto_marca = '$marca'";
            // A que bbdd le pido la información
            $cnx = mysqli_connect("localhost", "root", "", "bd_automoviles");
            mysqli_set_charset($cnx, "UTF8");
            // que información quiero
            $rs = mysqli_query($cnx, $sql);
            while (($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null ){
                $lista[] = $reg;
            }
            mysqli_close($cnx);
            return $lista;
        }
    }
?>