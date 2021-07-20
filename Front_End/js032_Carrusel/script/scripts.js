var contador_imagenes = 0;
var total_de_imagenes;

$(document).ready(inicial);

function inicial(){
    total_de_imagenes = $(".diapositivas img").length;

    $(".diapositivas li").hide();
    $(".diapositivas li").eq(0).show();
    contador_imagenes = 0;

    //setInterval(carrusel, 1000);
    var html = "<ul>";
    for (i=0; i<total_de_imagenes; i++){
        html+= "<li><i class='fa fa-circle fa-5x'></i></li>";
    }
    html+="</ul>";
    $("#iconos").html(html);
    
    $(".fa-circle").eq(0).css("color","red");

    $(".fa-circle").on("click",function(){   
        // Saber numero de circulo donde han clicado (0-3)   
        var foto = $("#iconos i").index(this);  
        // Ocultar todas las fotos
        $(".diapositivas li").eq(contador_imagenes).hide();
        // Seleccionar foto a mostrar. La funcion eq selecciona por posicion en la lista
        $(".diapositivas li").eq(foto).fadeIn(1000);
        contador_imagenes=foto;
        //Ponemos todos los circulos en negro
        $(".fa-circle").css("color","black");
        // Ponemos en rojo el seleccionado
        $(this).css("color","red");
    });  

    $(".fa-chevron-left").on("click", function(){
        // Al pulsar hacia izda, ir a la anterior. si no hay anterior, mostrar la última
        contador_imagenes--;
        if (contador_imagenes < 0){
            contador_imagenes = total_de_imagenes-1;
        }
        // Oculto todas
        $(".diapositivas li").hide();
        // Muestro la calculada
        $(".diapositivas li").eq(contador_imagenes).fadeIn(1000);

        $(".fa-circle").css("color","black");
        //Poner el boton asociado en rojo
        $(".fa-circle").eq(contador_imagenes).css("color","red");
    });
    $(".fa-chevron-right").on("click", function(){
        contador_imagenes++;
        if(contador_imagenes >= total_de_imagenes){
            contador_imagenes=0;
        }
        // Oculto todas
        $(".diapositivas li").hide();
        // Muestro la calculada
        $(".diapositivas li").eq(contador_imagenes).fadeIn(1000);

        $(".fa-circle").css("color","black");
        //Poner el boton asociado en rojo
        $(".fa-circle").eq(contador_imagenes).css("color","red");
    });
    
    $(".diapositivas").hover(function(){
        $(".flechas").css("visibility","visible");
    }, function(){
        $(".flechas").css("visibility","hidden");
    });
    
    /*
    $(".diapositivas").on("mouseenter", function(){
        $(".flechas").css("visibility","visible");
    });
    $(".diapositivas").on("mouseleave", function(){
        $(".flechas").css("visibility","hidden");
    });
    */
}

function carrusel(){
    contador_imagenes++;
    if (contador_imagenes > total_de_imagenes){
        contador_imagenes = 1; 
    }
    $(".diapositivas li").hide();
    $(".diapositivas #" + contador_imagenes).show();
}

