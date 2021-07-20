$(document).ready(inicial);

var contador_imagenes = 0;
var total_imagenes;

function inicial(){
    total_imagenes = $(".diapositivas img").length;
    //console.log($(".diapositivas img").length);
    /*$(".diapositivas img").on("click", function(){
        console.log("Me has hecho click en la foto " + $(this).attr("id"));
    });*/  
    
    contador_imagenes = 1;
    $(".diapositivas li").hide();
    $(".diapositivas #"+ 1).show();
    
    /** Movimiento de fotos */
    //setInterval(carrusel, 1000); /**Fijaamos el intervalo en el que se ejecutara la funnción */

    /** Generamos los iconos */
    var html = "<ul>";
    for (i = 0; i < total_imagenes; i++){
        html += "<li><i id='icono" + (i + 1) + "' class='fa fa-circle fa-3x'></i></li>";
    }
    html += "<ul>";
    $("#iconos").html(html);

    $(".fa-circle").eq(0).css("color", "red"); // Ponemos el primer circulo en rojo

    //$("#iconos i").on("click", function(){
    $(".fa-circle").on("click", function(){
        /** Saber nº de circulo donde han clickado del 0 al X */
        console.log($("#iconos i").index(this));
        var foto = $("#iconos i").index(this);
        // lo mismo que antes hecho de otra manera
        var iconoClickeado = $(this).attr("id");
        var num = iconoClickeado.substring(5, 99); /** Quitamos icono para que quede solo el nº */
        console.log(num);
        /** Ocultar todas las fotos */
        $(".diapositivas li").hide();
        /** Seleccionar foto a mostrar, la función eq selecciona por posición */
        $(".diapositivas li").eq(foto).fadeIn(100);
        /** Pintamos todos los circulos en negro, y luego en rojo el seleccionado */
        $("#iconos i").css("color", "black");
        $("#icono"+ num).css("color", "red"); //Otra manera $(this).css("color", "red");

        //carrusel2(num); /**En función del círculo clickeado muestra una u otra imagen */
    });

    /*** */
    /**Para manejar las flechas */
    $(".fa-chevron-left").on("click", function(){
        contador_imagenes--;
        if (contador_imagenes < 0) {
            contador_imagenes = total_imagenes - 1;
        }
        //Oculto todas
        $(".diapositivas li").hide();
        //Muestro la calculada
        $(".diapositivas li").eq(contador_imagenes).fadeIn(1000);

        $("#iconos i").css("color", "black");
        //Poner el botón asociado en rojo
        $(".fa-circle").eq(contador_imagenes).css("color", "red");

    });
    $(".fa-chevron-right").on("click", function(){
        contador_imagenes++;
        if (contador_imagenes >= total_imagenes) {
            contador_imagenes = 0;
        }
        $(".diapositivas li").hide();
        $(".diapositivas li").eq(contador_imagenes).fadeIn(1000);

        $("#iconos i").css("color", "black");
        //Poner el botón asociado en rojo
        $(".fa-circle").eq(contador_imagenes).css("color", "red");
    });

    $(".diapositivas").on("mouseover", function(){
        $(".flechas").css("visibility", "visible");
    });
    $(".diapositivas").on("mouseout", function(){
        $(".flechas").css("visibility", "hidden");
    });

}

function carrusel(){
    contador_imagenes++;
    if(contador_imagenes > total_imagenes)
        contador_imagenes = 1;
    $(".diapositivas li").hide();
    $(".diapositivas #"+ contador_imagenes).show();
}

function carrusel2(num){
    $(".diapositivas li").hide();
    $(".diapositivas li"+ num).fadeIn(100);
}