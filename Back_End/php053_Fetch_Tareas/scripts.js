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
            salida += `<span><button type='button' onclick='fFormulario(\"a\", 0)'>Form. Añadir</button></span>`;
            salida += "</caption>";
            salida += "<tr><th>ID</th><th>Nombre</th><th>Descripcion</th><th>Fecha</th><th>Estado</th><th colspan='2'>Acciones</th><tr>";
        datos_convertidos_a_JSON_javascript.forEach(objeto => {
            salida += "<tr>";
            salida += "<td>" + objeto.tar_id + "</td>";
            salida += "<td>" + objeto.tar_nombre + "</td>";
            
            if (objeto.tar_descripcion == null){
                objeto.tar_descripcion = "";
            }
            const descripcion = objeto.tar_descripcion.replaceAll("\r\n", "<br>");
            salida += "<td>" + descripcion + "</td>";
            salida += "<td>" + objeto.tar_fecha + "</td>";
            salida += "<td>" + objeto.tar_estado + "</td>";
            salida += `<td><button type='button'onclick='fFormulario(\"m\",${objeto.tar_id})'> Form. Modificar</button></td>`;
            salida += `<td><button type='button' onclick='fFormulario(\"b\", ${objeto.tar_id})'> Form. Borrar</button></td>`; 
            salida += "</tr>";
        });
        salida += "</table>";
        document.getElementById("div_lista").innerHTML = salida;
    })
}

function fPreparaFecha(fecha_dd_mm_aaaa){
    const dma = fecha_dd_mm_aaaa.split("/");
    if (dma[0].length == 1){
        dma[0] = "0" + dma[0];
    }
    if (dma[1].length == 1){
        dma[1] = "0" + dma[1];
    }
    return `${dma[2]}-${dma[1]}-${dma[0]}`;
}

function fFormulario(opcion_formulario, id){
    /*if (document.getElementById("frm_tareas").style.display == 'block'){
        document.getElementById("frm_tareas").style.display = 'none';
        return;
    } */
    document.getElementById("frm_tareas").style.display = 'block';

    document.getElementById("peticion").value = opcion_formulario;
    document.getElementById("id").value = id;

    if (opcion_formulario == 'a') {
        document.getElementById('nombre').value = '';
        document.getElementById('descripcion').value = '';
        const hoy = new Date();
        const preparada = fPreparaFecha(hoy.toLocaleDateString());
        document.getElementById('fecha').value = preparada;

        //Para el select
        document.getElementById('estado').options.selectedIndex = 0 ;
        
        document.getElementById("btnOperar").innerHTML = "Grabar";
        //document.getElementById("btnOperar").style.display = 'inline-block';
    } else {
        // Traer los datos para el id seleccionado
        // Llenar los campos del formulario con los campos 
        fRecuperar_por_id(id);
        // Prepararé la botonera de opciones
        if(opcion_formulario == "m"){
            document.getElementById("btnOperar").innerHTML = "Modificar";
        } else {
            document.getElementById("btnOperar").innerHTML = "Eliminar";
        }
    }
    // Mostrar
    document.getElementById("div_fondo").style.display = 'flex';
}

function fCancelar(){
    document.getElementById("div_fondo").style.display = 'none';
}

function fGrabar(){
    const objeto = document.getElementById("frm_tareas");

    datos_envio = new FormData(objeto);
    fetch("servidor.php", {
        method: "post",
        body: datos_envio
    })
    .then(function(respuesta){
        return respuesta.text();
    })
    .then( function(data){
        //alert(data);
        if(data > 0) {
            fMostrar_Lista_Tareas();
        }
        else{
            document.getElementById("td_error").value = "No se ha podido grabar";
        }
    })
    .finally(function(){
        document.getElementById("div_fondo").style.display = 'none';
    })
}

function fRecuperar_por_id(id){
    const URL = "servidor.php?peticion=recupera_id&id="+id;

    fetch(URL)
    .then((respuesta) =>respuesta.json())
    .then((datos)=>{
        // Rellenamos el formulario con los datos
        //console.log(datos);
        document.getElementById('nombre').value = datos.tar_nombre;
        document.getElementById('descripcion').value = datos.tar_descripcion;
        //Para el select
        let opcion = 2;
        if (datos.tar_estado == "Sin iniciar") {
            opcion = 0;
        } 
        if (datos.tar_estado == "Iniciada") {
            opcion = 1;
        } 
        document.getElementById('estado').options.selectedIndex = opcion ;
        document.getElementById('fecha').value = datos.tar_fecha;
    })
}