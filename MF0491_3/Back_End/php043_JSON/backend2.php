<?php
$mensaje=array();
$mensaje['status'] = 'ko';
$mensaje['titulo'] = 'No encontrado';
$mensaje['datos']=array();

$sql = "SELECT * FROM automoviles WHERE auto_id=" . $_GET['id'];
$cnx = mysqli_connect("localhost", "root", "", "bd_automoviles");
$rs = mysqli_query( $cnx, $sql);
if ( ($reg = mysqli_fetch_array($rs, MYSQLI_ASSOC)) !=null){
    $mensaje['status'] = 'ok';
    $mensaje['datos'] = $reg;
    $menseje['titulo'] = 'Todo bien';
}
mysqli_close($cnx);
$json = json_encode($mensaje);

//var_dump($json);
echo $json;