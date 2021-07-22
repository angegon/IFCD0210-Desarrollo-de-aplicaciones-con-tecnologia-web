function fInicio(){
    fCargar_Clientes();
}

function fCargar_Clientes(){
    const URL = "servidor.php?peticion=recupera_todos_clientes";
    fetch( URL )
    .then( (respuesta) => respuesta.json())
    .then ( (datos) => {
        //console.log(datos);
        let salida = "<table border=1>";
        salida += "<tr>";
        salida += "<th onclick='fFiltrar(\"codigo\")'>Código</th>";
        salida += "<th onclick='fFiltrar(\"empresa\")'>Empresa</th>";
        salida += "<th onclick='fFiltrar(\"direccion\")'>Dirección</th>";
        salida += "<th onclick='fFiltrar(\"poblacion\")'>Población</th>";
        salida += "<th onclick='fFiltrar(\"telefono\")'>Telefóno</th>";
        salida += "<th onclick='fFiltrar(\"responsable\")'>Responsable</th>";
        salida += "<th onclick='fFiltrar(\"historial\")'>Historial</th>";
        salida += "<th>Acciones</th></tr>";
        datos.forEach(objeto => {
            salida += "<tr>";
            salida += "<td>" + objeto.cli_codigo + "</td>";
            salida += "<td>" + objeto.cli_empresa + "</td>";
            salida += "<td>" + objeto.cli_direccion + "</td>";
            salida += "<td>" + objeto.cli_poblacion + "</td>";
            salida += "<td>" + objeto.cli_telefono + "</td>";
            salida += "<td>" + objeto.cli_responsable + "</td>";
            salida += "<td>" + objeto.cli_historial + "</td>";
            salida += "<td>";
            salida += `     <input type='button' value='Borrar' onclick='fOperar("b", "${objeto.cli_codigo }")'>`;
            salida += `    <input type='button' value='Modificar' onclick='fOperar("m", "${objeto.cli_codigo }")'>`;
            salida += "</td>";
            salida += "</tr>";
        });
        salida += "</table>";
        document.getElementById("div_clientes").innerHTML = salida;
    })
}

function fFiltrar($tipo_filtro){
    const filtro_codigo = document.getElementById("filtro_codigo").value;
    const filtro_empresa = document.getElementById("filtro_empresa").value;

    let URL = "servidor.php?peticion=recupera_todos_clientes_filtro&filtro_codigo=" + filtro_codigo + "&filtro_empresa=" + filtro_empresa;

    URL += "&filtro_orden=" + $tipo_filtro;
    
    if (filtro_codigo.length < 3){
        return;
    }
    
    //alert(URL);

    fetch( URL )
    .then( (respuesta) => respuesta.json())
    .then ( (datos) => {
        //console.log(datos);
        let salida = "<table border=1>";
        salida += "<tr>";
        salida += "<th onclick='fFiltrar(\"codigo\")'>Código</th>";
        salida += "<th onclick='fFiltrar(\"empresa\")'>Empresa</th>";
        salida += "<th onclick='fFiltrar(\"direccion\")'>Dirección</th>";
        salida += "<th onclick='fFiltrar(\"poblacion\")'>Población</th>";
        salida += "<th onclick='fFiltrar(\"telefono\")'>Telefóno</th>";
        salida += "<th onclick='fFiltrar(\"responsable\")'>Responsable</th>";
        salida += "<th onclick='fFiltrar(\"historial\")'>Historial</th>";
        salida += "<th>Acciones</th></tr>";
        datos.forEach(objeto => {
            salida += "<tr>";
            salida += "<td>" + objeto.cli_codigo + "</td>";
            salida += "<td>" + objeto.cli_empresa + "</td>";
            salida += "<td>" + objeto.cli_direccion + "</td>";
            salida += "<td>" + objeto.cli_poblacion + "</td>";
            salida += "<td>" + objeto.cli_telefono + "</td>";
            salida += "<td>" + objeto.cli_responsable + "</td>";
            salida += "<td>" + objeto.cli_historial + "</td>";
            salida += "<td>";
            salida += `     <input type='button' value='Borrar' onclick='fOperar("b", "${objeto.cli_codigo }")'>`;
            salida += `    <input type='button' value='Modificar' onclick='fOperar("m", "${objeto.cli_codigo }")'>`;
            salida += "</td>";
            salida += "</tr>";
        });
        salida += "</table>";
        document.getElementById("div_clientes").innerHTML = salida;
    })
}

