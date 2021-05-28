$(document).ready(function(){
    //Poner los Li con ancho 100px y alto 30 px
    $("li").height(30).width(100);
    //Añadir a los li un margin top de 10px y un border radius de 5px
    $("li").css({"margin-top": 10, "border-radius" : 15, "text-align": "center", "line-height": "30px"});
    // Quitar viñetas
    $("ul").css("list-style", "none");
    // El color de los li pares tiene que ser azul
    $("#div1  li:even").css("background-color", "blue");
    $("#div1  li:odd").css("background-color", "red"); 
    // El Primer Li tiene un ancho de 200
    $("li:first").css("width", 200);
    // El Primer Li tiene un ancho de 300
    $("li:last-child").css("width", 300);    
    // Todos los inputs con value 'prueba'
    //$("input").attr("value", "prueba");
    // Para seleccionar por atributo
    $("[type=text]").attr("value", "prueba");
    //Poner verde el país
    $("[href='http://www.elpais.es']").css("color","green");
    $("[href='http://www.elpais.es']").next().css("color","green");
    $("[href='http://www.elpais.es']").prev().css("color","blue");
    $("#li_b").on("click", function(){
        alert($(this).parent().attr("name"));
    });

});