function fPintar_Tabla(){
    $.get("backend.php", null, function(response){
         // Convertir a JSON javascript
         console.log(response);
         var data = JSON.parse(response);
         console.log(data);
         // Preparar la salida
         var texto = "<table border=1>";
         for(i=0; i<data.length;i++){
             var coche = data[i];
             texto += "<tr>";
             texto += "  <td>" + coche.auto_marca + "</td>";
             texto += "  <td>" + coche.auto_modelo + "</td>";
             texto += "  <td>" + coche.auto_color + "</td>";                    
             texto += "</tr>";
         }
         texto += "</table>";
         // Llevar a donde necesite
         $("#visor").html(texto);
    });
}

function fImprimirId(id){
    //nombre=Javier&apellidos=Ruiz-Toledo
    var datos_envio = "id="+id;
    $.get("backend2.php", datos_envio, function(response){
        var mensaje = JSON.parse(response);
        console.log(mensaje.status);
        console.log(mensaje.titulo);
        if (mensaje.status == 'ko'){
            texto = "El id no existe";
        } else{
            var data = mensaje.datos;
            console.log(data);
            var texto = data.auto_id + "-" + data.auto_marca + "<br>";
        }
        
        $("#visor").html(texto);
    });
}