function fInicio(){
    fMostrar_Lista_Tareas();
}

function fMostrar_Lista_Tareas(){
    
    let url = "servidor.php";
    /* Petición modo get
    url += "?peticion=recupera_todos";
    fetch (url) */
    // Petición modo post
    const datos_envio = new FormData();
    datos_envio.append("peticion", "recupera_todos");
    fetch(url, {
        method: "post",
        body: datos_envio
    })
    .then ( function(respuesta){
        return respuesta.json();
    })
    .then ( function(datos_convertidos_a_JSON_javascript){
        //console.log(datos_convertidos_a_JSON_javascript); 
        let salida = "<table border=1>";
            salida += "<caption>";
            salida += "<span>Lista de " + datos_convertidos_a_JSON_javascript.length + " tareas </span>";
            salida += "<span><button type='button' onclick='fFormulario(\"a\")'>Form. Añadir</button></span>";
            salida += "</caption>";
            salida += "<tr><th>ID</th><th>Nombre</th><th>Descripcion</th><th>Fecha</th><th>Estado</th><th colspan='2'>Acciones</th><tr>";
        datos_convertidos_a_JSON_javascript.forEach(objeto => {
            salida += "<tr>";
            salida += "<td>" + objeto.tar_id + "</td>";
            salida += "<td>" + objeto.tar_nombre + "</td>";
            salida += "<td>" + objeto.tar_descripcion + "</td>";
            salida += "<td>" + objeto.tar_fecha + "</td>";
            salida += "<td>" + objeto.tar_estado + "</td>";
            salida += "<td><button type='button'onclick='fFormulario(\"m\")'> Form. Modificar</button></td>";
            salida += "<td><button type='button' onclick='fFormulario(\"b\")'> Form. Borrar</button></td>"; 
            salida += "</tr>";
        });
        salida += "</table>";
        document.getElementById("div_lista").innerHTML = salida;
    })
}