$(document).ready(function() {
    $("#div1").html("<strong>Hola</strong><input type='button' value='nuevo' />");
    $("#div2").text("<strong>Hola</strong><input type='button' value='nuevo' />");

    console.log($("#div1").html());
    console.log($("#div1").text());
    $("#div1").after("<b>Despues</b>");
    $("#div1").before("<b>Antes</b>");
    $("#div2").prepend("<b>Puesto antes</b>");
    $("#div2").append("<b>Puesto despues</b>");
});