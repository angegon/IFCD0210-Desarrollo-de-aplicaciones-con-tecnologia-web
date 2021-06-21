<?php
/**
 * Trabajo con ficheros de texto
 * El formato general para trabajar con ficheros es
 * 1 -  Abrir el fichero
 *      $filedesciptor = fopen(fichero, modo); 
 *      el modo puede ser r(sino existe da error), 
 *      w(si no existe lo crea, si existe borra el contenido), 
 *      a (append, sino existe lo crea, si existe añade)
 * 2 - Procesarlo
 *       Si es modo lectura:
 *          fgets ($fd) --> Lee una línea
 *       si es modo w o a :
 *          fwrite ($fd) --> Escribe una línea
 *          PHP_EOL      --> Indica salto de línea
 * 3 - Cerrar
 *      fclose($fd);
 *      
 *      La función feof es true cuando se alcanzal el final del fichero
 */

// Leer
$filedesciptor = fopen("php011_Fichero.txt", "r");

while (!feof($filedesciptor)){
    $registro = fgets($filedesciptor);
    echo $registro, "<br>";
}

fclose($filedesciptor);

// Añadir
$filedesciptor = fopen("php011_Fichero.txt", "a");

fwrite($filedesciptor, ("Hola".PHP_EOL));

fclose($filedesciptor);

// Crear un fichero

$filedesciptor = fopen("php011_Fichero_2.txt", "w");

fwrite($filedesciptor, ("Hola".PHP_EOL));

fclose($filedesciptor);

?>