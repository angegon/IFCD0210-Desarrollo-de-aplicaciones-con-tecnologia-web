<?php
$lista = array();
$sql = "SELECT * FROM automoviles ORDER BY auto_marca, auto_modelo";
$cnx = mysqli_connect("localhost", "root", "", "bd_automoviles");
$rs = mysqli_query( $cnx, $sql);
while ( ($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != null){
    $lista[] = $reg;
}
mysqli_close($cnx);
// La función json_encode convierte el array a formato JSON
// SON CONJUNTOS variable:valor, variable:valor, ...

$json = json_encode($lista);

//var_dump($json);
echo $json;