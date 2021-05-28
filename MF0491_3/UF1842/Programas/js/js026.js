$(document).ready(function(){
    $("#texto1").on("keydown", function(){
        console.log("Has presionado tecla");
    });
    $("#texto1").on("keypress", function(event){ //se produce un objeto cada vez que se produce el evento
        var letra = String.fromCharCode(event.charCode);
        console.log("Presionando tecla" + letra + " que se corresponde con el caracter Ascii" + event.charCode);
        if (letra == 'a') { //Captura la letra y no la escribe, letra número etc
            alert("Buen finde"); 
            return false;
        }
        if (event.charCode >= 48 && event.charCode <= 57) { //Captura la letra y no la escribe, letra número etc
            alert("Buen finde"); 
            return false;
        }        
    });
    $("#texto1").on("keyup", function(){
        console.log("Has soltado tecla");
    });
});