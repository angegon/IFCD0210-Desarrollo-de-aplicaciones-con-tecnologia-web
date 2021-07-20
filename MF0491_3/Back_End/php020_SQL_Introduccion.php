<?php
    // Volcar en la web la tabla clientes
    //Preparar el sql
    $sql = "SELECT cli_poblacion, cli_empresa 
            FROM clientes
            WHERE cli_poblacion='Barcelona' OR cli_poblacion='Madrid'
            ORDER BY cli_poblacion, cli_empresa";
    // Conectar
    $cnx = mysqli_connect("localhost","root","","bd_pedidos") or
        die("No puedo conectar a la base de datos");
    // Currar
    $resultset = mysqli_query( $cnx, $sql );
    $html = "<table border=1>";
    $html .="   <tr><th>Población</th><th>Cliente</th></tr>";
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