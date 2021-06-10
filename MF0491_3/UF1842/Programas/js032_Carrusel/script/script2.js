$(document).ready(inicial);

var contador_imagenes = 0;
var total_imagenes;

function inicial(){
    total_imagenes = $(".diapositivas img").length;
    //console.log($(".diapositivas img").length);
    /*$(".diapositivas img").on("click", function(){
        console.log("Me has hecho click en la foto " + $(this).attr("id"));
    });*/  
    

    /** Movimiento de fotos */
    setInterval(carrusel, 1000); /**Fijaamos el intervalo en el que se ejecutara la funnción */
}

function carrusel(){
    contador_imagenes++;
    if(contador_imagenes > total_imagenes)
        contador_imagenes = 1;
    $(".diapositivas li").hide();
    $(".diapositivas #"+ contador_imagenes).show();
    
}