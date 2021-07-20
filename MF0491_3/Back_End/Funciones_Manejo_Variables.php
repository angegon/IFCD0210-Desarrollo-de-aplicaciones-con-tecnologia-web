<?php

use function PHPSTORM_META\type;

$bool = true;
$entero = 35;
$entero_texto = "35";
$float = 44.5;
$float_texto = "44.5";
$array_texto = array("Pepe", "Juan", "Ana");
$array_complejo = array(1, "Hola", 33.5, array("red", "green", "blue"));
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de análisis de variables</title>
    <style>
    .importante{
        background-color: black;
        color:yellow;
    }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th>Función</td>
            <td>Utilidad</td>
            <td>Ejemplos</td>
        </tr>
        <tr>
            <td><b>boolval(variable)</b></td>
            <td>Devuelve el valor booleano de una variable</td>
            <td>
            <?php
                $a = "";
                echo ( boolval($a) ? 'true' : 'false' ) . "<br>";
                $b = "0";
                echo ( boolval($b) ? 'true' : 'false' ) . "<br>";
                $c = 0;
                echo ( boolval($c) ? 'true' : 'false' ) . "<br>";
                $d = 0.0;
                echo ( boolval($d) ? 'true' : 'false' ) . "<br>";
                $e = "0.0";
                echo ( boolval($e) ? 'true' : 'false' ) . "<br>";
                $f = 1;
                echo ( boolval($f) ? 'true' : 'false' ) . "<br>";
                $g = 2;
                echo ( boolval($g) ? 'true' : 'false' ) . "<br>";
                $h = "1";
                echo ( boolval($h) ? 'true' : 'false' );
                ?>
            </td>
        </tr>        
        <tr class="importante">
            <td><b>empty(variable)</b></td>
            <td>Indica si una variable está vacía(string->"", numerica->0 ó 0.0</td>
            <td>
                <?php
                $a = "";
                echo ( empty($a) ? 'vacía' : 'rellena' ) . "<br>";
                $b = "0";
                echo ( empty($b) ? 'vacía' : 'rellena' ) . "<br>";
                $c = 0;
                echo ( empty($c) ? 'vacía' : 'rellena' ) . "<br>";
                $d = 0.0;
                echo ( empty($d) ? 'vacía' : 'rellena' ) . "<br>";
                $e = "0.0";
                echo ( empty($e) ? 'vacía' : 'rellena' ) . "<br>";
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>floatval(variable)</b></td>
            <td>Devuelve el valor de la variable a float</td>
            <td>
                <?php
                $a = "44";
                $b = floatval($a);
                echo "\$b vale $b y es de tipo " . gettype($b) . "<br>";
                $c = "33.8";
                $d = floatval($c);
                echo "\$d vale $d y es de tipo " . gettype($d) . "<br>";
                $e = "33px";
                $f = floatval($e);
                echo "\$f vale $f y es de tipo " . gettype($f) . "<br>";
                $g = 22;
                $h = floatval($g);
                echo "\$h vale $h y es de tipo " . gettype($h);
                ?>
            </td>
        </tr>
        <tr>
            <td><b>get_defined_vars()</b></td>
            <td>Crea un array con las variables del programa</td>
            <td>
                <?php
                $matriz = get_defined_vars();
                print_r($matriz);
                echo "<hr>";
                print_r($matriz['array_texto']);
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>gettype(variable)</b></td>
            <td>Obtiene el tipo de la variable</td>
            <td>
                <?php
                $tests = array(
                    "42",
                    1337,
                    0x539,
                    02471,
                    0b10100111001,
                    1337e0,
                    "0x539",
                    "02471",
                    "0b10100111001",
                    "1337e0",
                    "not numeric",
                    array(),
                    9.1,
                    null
                );
                echo gettype($tests) . "<br>";
                for ($i = 0; $i < count($tests); $i++) {
                    echo gettype($tests[$i]) . "<br>";
                }
                $v = new stdClass;
                echo gettype($v);
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>intval(variable)</b></td>
            <td>Convierte el valor de la variable a entero</td>
            <td>
                <?php
                $a = "44";
                $b = intval($a);
                echo "\$b vale $b y es de tipo " . gettype($b) . "<br>";
                $c = "33.8";
                $d = intval($c);
                echo "\$d vale $d y es de tipo " . gettype($d) . "<br>";
                $e = "33px";
                $f = intval($e);
                echo "\$f vale $f y es de tipo " . gettype($f) . "<br>";
                $g = 22.44;
                $h = intval($g);
                echo "\$h vale $h y es de tipo " . gettype($h);
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>is_array(variable)</b></td>
            <td>Comprueba si la variable es un array</td>
            <td>
                <?php
                $a = NULL;
                echo (is_array($a) ? 'true' : 'false') . "<br>";
                $b = array();
                echo (is_array($b) ? 'true' : 'false') . "<br>";
                $c = new stdClass;
                echo (is_array($c) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_bool(variable)</b></td>
            <td>Comprueba si la variable es del tipo boolean</td>
            <td>
                <?php
                $a = NULL;
                echo (is_bool($a) ? 'true' : 'false') . "<br>";
                $b = 8;
                echo (is_bool($b) ? 'true' : 'false') . "<br>";
                $c = "8";
                echo (is_bool($c) ? 'true' : 'false') . "<br>";
                $d = "8.55";
                echo (is_bool($d) ? 'true' : 'false') . "<br>";
                $e = true;
                echo (is_bool($e) ? 'true' : 'false') . "<br>";
                $f = 1;
                echo (is_bool($f) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_double(variable)</b></td>
            <td>Comprueba si la variable es del tipo float o double</td>
            <td>
                <?php
                $a = NULL;
                echo (is_double($a) ? 'true' : 'false') . "<br>";
                $b = 8;
                echo (is_double($b) ? 'true' : 'false') . "<br>";
                $c = "8";
                echo (is_double($c) ? 'true' : 'false') . "<br>";
                $d = "8.55";
                echo (is_double($d) ? 'true' : 'false') . "<br>";
                $e = true;
                echo (is_double($e) ? 'true' : 'false') . "<br>";
                $f = 44.55;
                echo (is_double($f) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>is_float(variable)</b></td>
            <td>Comprueba si la variable es del tipo float o double</td>
            <td>
                <?php
                $a = NULL;
                echo (is_float($a) ? 'true' : 'false') . "<br>";
                $b = 8;
                echo (is_float($b) ? 'true' : 'false') . "<br>";
                $c = "8";
                echo (is_float($c) ? 'true' : 'false') . "<br>";
                $d = "8.55";
                echo (is_float($d) ? 'true' : 'false') . "<br>";
                $e = true;
                echo (is_float($e) ? 'true' : 'false') . "<br>";
                $f = 44.55;
                echo (is_float($f) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_int(variable)</b></td>
            <td>Comprueba si la variable es del tipo integer</td>
            <td>
                <?php
                $a = NULL;
                echo (is_int($a) ? 'true' : 'false') . "<br>";
                $b = 8;
                echo (is_int($b) ? 'true' : 'false') . "<br>";
                $c = "8";
                echo (is_int($c) ? 'true' : 'false') . "<br>";
                $d = "8.55";
                echo (is_int($d) ? 'true' : 'false') . "<br>";
                $e = true;
                echo (is_int($e) ? 'true' : 'false') . "<br>";
                $f = 44.55;
                echo (is_int($f) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>is_integer(variable)</b></td>
            <td>Comprueba si la variable es del tipo integer</td>
            <td>
                <?php
                $a = NULL;
                echo (is_integer($a) ? 'true' : 'false') . "<br>";
                $b = 8;
                echo (is_integer($b) ? 'true' : 'false') . "<br>";
                $c = "8";
                echo (is_integer($c) ? 'true' : 'false') . "<br>";
                $d = "8.55";
                echo (is_integer($d) ? 'true' : 'false') . "<br>";
                $e = true;
                echo (is_integer($e) ? 'true' : 'false') . "<br>";
                $f = 44.55;
                echo (is_integer($f) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_iterable(variable)</b></td>
            <td>Comprueba si la variable es iterable</td>
            <td>
                <?php
                $a = NULL;
                echo (is_iterable($a) ? 'true' : 'false') . "<br>";
                $b = array();
                echo (is_iterable($b) ? 'true' : 'false') . "<br>";
                $c = new stdClass;
                echo (is_iterable($c) ? 'true' : 'false') . "<br>";
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_long(variable)</b></td>
            <td>Comprueba si la variable es del tipo integer</td>
            <td>
                <?php
                $a = NULL;
                echo (is_long($a) ? 'true' : 'false') . "<br>";
                $b = 8;
                echo (is_long($b) ? 'true' : 'false') . "<br>";
                $c = "8";
                echo (is_long($c) ? 'true' : 'false') . "<br>";
                $d = "8.55";
                echo (is_long($d) ? 'true' : 'false') . "<br>";
                $e = true;
                echo (is_long($e) ? 'true' : 'false') . "<br>";
                $f = 44.55;
                echo (is_long($f) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>is_null(variable)</b></td>
            <td>Comprueba si la variable está inicializada</td>
            <td>
                <?php
                $a = NULL;
                echo (is_null($a) ? 'true' : 'false') . "<br>";
                $b = 4;
                echo (is_null($b) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>is_numeric(variable)</b></td>
            <td>Comprueba si la variable es numérica</td>
            <td>
                <?php
                $tests = array(
                    "42",
                    1337,
                    0x539,
                    02471,
                    0b10100111001,
                    1337e0,
                    "0x539",
                    "02471",
                    "0b10100111001",
                    "1337e0",
                    "not numeric",
                    array(),
                    9.1,
                    null
                );

                for ($i = 0; $i < count($tests); $i++) {
                    if (is_numeric($tests[$i])) {
                        echo var_export($tests[$i], true) . " es numérico", "<br>";
                    } else {
                        echo var_export($tests[$i], true) . " NO es numérico", "<br>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_object(variable)</b></td>
            <td>Comprueba si la variable es un objeto</td>
            <td>
                <?php
                $a = true;
                echo (is_object($a) ? 'true' : 'false') . "<br>";
                $b = new stdClass;
                echo (is_object($b) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_resource(variable)</b></td>
            <td>Comprueba si la variable es un recurso</td>
            <td>
                <?php
                $a = true;
                echo (is_resource($a) ? 'true' : 'false') . "<br>";
                $fd = fopen("php011_Fichero.txt", "r");
                echo (is_resource($fd) ? 'true' : 'false') . "<br>";
                fclose($fd);
                $b = "php011_Fichero.txt";
                echo (is_resource($b) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_scalar(variable)</b></td>
            <td>Comprueba si la variable es escalar (int, float, string o boolean)</td>
            <td>
                <?php
                $a = true;
                echo (is_scalar($a) ? 'true' : 'false') . "<br>";
                $b = 44;
                echo (is_scalar($b) ? 'true' : 'false') . "<br>";
                $c = 45.99;
                echo (is_scalar($c) ? 'true' : 'false') . "<br>";
                $d = "Pepe";
                echo (is_scalar($d) ? 'true' : 'false') . "<br>";
                $e = array();
                echo (is_scalar($e) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr>
            <td><b>is_string(variable)</b></td>
            <td>Comprueba si la variable es de tipo string</td>
            <td class="importante">
                <?php
                $a = true;
                echo (is_string($a) ? 'true' : 'false') . "<br>";
                $b = 44;
                echo (is_string($b) ? 'true' : 'false') . "<br>";
                $c = "22";
                echo (is_string($c) ? 'true' : 'false') . "<br>";
                $d = "Pepe";
                echo (is_string($d) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>isset(variable)</b></td>
            <td>Comprueba si la variable declarada e inicializada</td>
            <td>
                <?php
                $aa;
                echo (isset($aa) ? 'true' : 'false') . "<br>";
                echo (isset($bb) ? 'true' : 'false') . "<br>";
                $cc = 2;
                echo (isset($cc) ? 'true' : 'false') . "<br>";
                $dd = NULL;
                echo (isset($dd) ? 'true' : 'false') . "<br>";
                $ee = "";
                echo (isset($ee) ? 'true' : 'false');
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>print_r(variable)</b></td>
            <td>Imprime la variable en un formato legible</td>
            <td>
                <?php
                print_r($array_texto);
                echo "<hr>";
                print_r($array_complejo);
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>serialize(variable)</b></td>
            <td>Convierte los datos a datos transmitibles</td>
            <td>
                <?php
                $x = serialize($array_texto);
                echo "Serializado: $x<br>";
                ?>
            </td>
        </tr>
        <tr>
            <td><b>settype(variable, tipo)</b></td>
            <td>Convierte el tipo de la variable</td>
            <td>
                <?php
                $x = 32.4;
                echo " x es " . gettype($x) . ". Vale $x<br>";
                settype($x, "boolean");
                echo "x ahora es " . gettype($x) . ". Vale $x<br>";

                $x = 32;
                echo " x es ahora " . gettype($x) . ". Vale $x<br>";
                settype($x, "double");
                echo " x es ahora " . gettype($x) . ". Vale $x";
                ?>
            </td>
        </tr>
        <tr>
            <td><b>strval(variable)</b></td>
            <td>Convierte a string la variable</td>
            <td>
                <?php
                $x = 32.4;
                echo " x es " . gettype($x) . ". Vale $x<br>";
                $y = strval($x);
                echo "y es " . gettype($y) . ". Vale " . $y;
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>unserialize(variable)</b></td>
            <td>Convierte datos serializados a datos normales</td>
            <td>
                <?php
                $x = serialize($array_texto);
                echo "Serializado: $x<br>";
                $y = unserialize($x);
                echo "No serializado: " . print_r($y);
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>unset(variable)</b></td>
            <td>Elimina la variable</td>
            <td>
                <?php
                $x = $array_texto;
                unset($x);
                echo $x;
                ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>var_dump(variable1, variable2, ...)</b></td>
            <td>Devuelve información JSON sobre una o mas variables</td>
            <td>
                bool: <?= var_dump($bool) ?><br>
                entero: <?= var_dump($entero) ?><br>
                entero_texto: <?= var_dump($entero_texto) ?><br>
                float: <?= var_dump($float) ?><br>
                float_texto: <?= var_dump($float_texto) ?><br>
                array_texto: <?= var_dump($array_texto) ?><br>
                array_complejo: <?= var_dump($array_complejo) ?>
            </td>
        </tr>
        <tr class="importante">
            <td><b>var_export(variable)</b></td>
            <td>Devuelve información estructurada sobre la variable</td>
            <td>
                bool: <?= var_export($bool) ?><br>
                entero: <?= var_export($entero) ?><br>
                entero_texto: <?= var_export($entero_texto) ?><br>
                float: <?= var_export($float) ?><br>
                float_texto: <?= var_export($float_texto) ?><br>
                array_texto: <?= var_export($array_texto) ?><br>
                array_complejo: <?= var_export($array_complejo) ?>
            </td>
        </tr>
    </table>
</body>

</html>