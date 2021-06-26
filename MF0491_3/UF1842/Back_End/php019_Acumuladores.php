<?php
// Acumulación de datos desordenados
 $array_conceptos = array();

 $fd = fopen("php019_Acumuladores.txt", "r");
 while (!feof($fd)){
    $linea = fgets($fd);
    if ( $linea != ""){
        $registro = explode("#", $linea);
        $concepto = $registro[1];
        $cantidad = intval($registro[2]);
        // Si el concepto ya existe        
        //      Acumular la cantidad
        // Si no existe
        //      Crear el concepto con la cantidad

        // Crear una función buscar que me conteste 
        // con la posicion donde lo encuentra o -1
        $posicion = Buscar($concepto);
        if ($posicion == -1){
            $elemento = array( $concepto, $cantidad );
            $array_conceptos[] = $elemento;
        } else{
            $array_conceptos[$posicion][1] +=  $cantidad;
        }
    }
 }
fclose($fd);
for ($i=0; $i<count($array_conceptos); $i++){
    echo $array_conceptos[$i][0] . ": " . $array_conceptos[$i][1] . "<br>";
}

function Buscar($que){
    $datos = $GLOBALS['array_conceptos'];

    for ($i=0; $i<count($datos); $i++){
        if ( strcasecmp ($datos[$i][0], $que) == 0 ){
            return $i;
        }
    }
    return -1;
}