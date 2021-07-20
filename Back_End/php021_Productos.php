<?php
    // Sacar de la tabla productos la seccion y el nombre del producto
    // ordenado por sección y nombre.
    $sql = "SELECT prod_seccion, prod_nombre
            FROM productos
            ORDER BY prod_seccion, prod_nombre";

    // Conectar
    $cnx = mysqli_connect("localhost","root","","bd_pedidos") or
        die("No puedo conectar a la base de datos");
    mysqli_set_charset( $cnx, "UTF8" );
    // Currar
    $html = "<table border=1>";
    $html .="   <tr><th>Sección</th><th>Producto</th></tr>";
    $resultset = mysqli_query( $cnx, $sql );
    
    while ( ( $registro = mysqli_fetch_array( $resultset ) ) != null ) {
        $html .= "<tr>";
        $html .= "      <td>" . $registro[0] . "</td>";
        $html .= "      <td>" . $registro[1] . "</td>";
        $html .= "</tr>";
    }
    // Desconectar
    mysqli_close($cnx);
    $html .="</table>";
    echo $html;

