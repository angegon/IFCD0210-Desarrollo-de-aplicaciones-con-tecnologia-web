<?php
/* El formato general para trabajar con ficheros es 
        1.- Abrir el fichero
            $fd = fopen( fichero, modo );
                modo    
                    r->Lectura    (Si no existe, error)
                    w->Escritura  (Si no existe, lo crea; si existe lo machaca)  
                    a->Añadir     (Si no existe, lo crea; si existe, añade)
        2.- Procesarlo
            Si es modo lectura
                fgets( $fd );    --> Lee una línea
            Si es modo w o a
                fwrite( $fd );    --> Escribe una línea
                PHP_EOL         --> Indica el salto línea
        3.- Cerrarlo
            fclose( $fd );

            La función feof($fd) es true cuando se alcanza el final de fichero
*/

// LEER
    // Abrir el fichero
$fd = fopen("php011_Fichero.txt", "r");
while ( ! feof($fd) ){
    // Leer línea
    $registro = fgets( $fd );
    // Imprimir
    echo $registro, "<br>";
}
    // Cerrar el fichero
fclose ($fd);

// Añadir
$fd = fopen("php011_Fichero.txt", "a");
fwrite($fd, PHP_EOL."Delta");
fwrite($fd, PHP_EOL."Mucho pides");
fclose( $fd );
echo "<hr>";

// Crear un fichero

$fd = fopen("php011_Fichero_2.txt", "w");
fwrite($fd, "Lunes".PHP_EOL);
fwrite($fd, "Martes".PHP_EOL);
fwrite($fd, "Miércoles".PHP_EOL);
fwrite($fd, "Jueves".PHP_EOL);
fclose($fd);

// Y leerlo
$fd = fopen("php011_Fichero_2.txt", "r");
while ( ! feof($fd) ){
    // Leer línea
    $registro = fgets( $fd );
    // Imprimir
    echo $registro, "<br>";
}
fclose ($fd);