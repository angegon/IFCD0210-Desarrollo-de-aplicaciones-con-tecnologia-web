$(document).ready(function() {
    console.log("El color de fondo de div1 es: " + ($("#div1").css("background-color")));
    console.log("El color de fuente de div1 es: " + ($("#div1").css("font-size")));
    $("#div1").css("background-color", "gray");
    $("div").css("float", "left");
    $(".especial").css({"font-size":"20px", "color":"orange", "width": "500px"});

    //eventos Jquery
    $("#pc").click(function(){
        $("#div1").addClass("clase");
    });

    $("#qc").click(function(){
        $("#div1").removeClass("clase");
    });

    $("#ic").click(function(){
        $("#div1").toggleClass("clase"); //Pone o quita la clase si existe o no
    });

    $("p").attr("Prueba", "Esto es una prueba"); //Le pone el atributo, y se ve en el codigo fuente en la etiqueta

    $("p").removeAttr("style");
});