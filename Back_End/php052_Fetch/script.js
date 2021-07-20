function fInicio(){
    fPintarLista();
    fetch("servidor.php?peticion=texto&nombre=pepe")
    .then ((response) => response.text())
    /*.then (function(response){
        // Si response es texto, return response.text();
        // Si response es json, return response.json();
        // Si response es fichero, return response.blob();
        console.log(response);
        return response.text();
    })*/
    .then ((datos) => {
        document.getElementById("texto").innerHTML = datos;
        fPintarLista();
    })
    /*.then (function(datos){
        // Ya tengo los datos en formato texto
        document.getElementById("texto").innerHTML = datos;
    })*/
    .catch (function(error){
        console.log("Error: " + error);
    })
    .finally (function(){
        console.log("Final.");
    })
}
function fPintarLista(){
    fetch("servidor.php?peticion=rt")
    // El servidor.php me contesta con response
    .then (function(response){
        // Si response es texto, return response.text();
        // Si response es json, return response.json();
        // Si response es fichero, return response.blob();
        console.log(response);
        return response.json();
    })
    .then (function(datos){
        // Ya tengo los datos en formato JSON javascript
        console.log(datos);
        $texto = "<table>";
            $texto += "<tr>";
            $texto += "     <th> Id </th>";
            $texto += "     <th>Marca </th>";
            $texto += "     <th>Modelo</th>";
            $texto += "     <th>Color</th>";
            $texto += "     <th>Matricula</th>";
            $texto += "</tr>";
        for(let i = 0; i < datos.length; i++){
            const Obj = datos[i];
            $texto += "<tr>";
            $texto += "     <td>" + Obj.auto_id + "</td>";
            $texto += "     <td>" + Obj.auto_marca + "</td>";
            $texto += "     <td>" + Obj.auto_modelo + "</td>";
            $texto += "     <td>" + Obj.auto_color + "</td>";
            $texto += "     <td>" + Obj.auto_matricula + "</td>";
            $texto += "</tr>";
        }   
        //console.log(i);
        $texto += "</table>";
        document.getElementById("lista").innerHTML = $texto;
    })
    .catch (function(error){
        console.log("Error: " + error);
    })
    .finally (function(){
        console.log("Final.");
    })
}



function fFiltrar(){
    let marca = document.getElementById("marca").value; 
    fetch (`servidor.php?peticion=filtro&marca=${marca}`)
    //fetch("servidor.php?peticion=filtro&marca=" +  marca) // Otra forma
    .then ((response) => response.json())
    .then ((datos) => {
        let salida= "";
        for (let i = 0; i < datos.length; i++){
            let objeto = datos[i];
            salida += objeto.auto_marca + " - " + objeto.auto_modelo + "-" + objeto.auto_matricula + "<br>";
        }
        document.getElementById("filtro").innerHTML = salida;
    })
}


