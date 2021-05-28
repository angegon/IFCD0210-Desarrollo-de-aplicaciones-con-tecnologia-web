$(document).ready(function(){
    $("#B_hide_Ocultar").click(function(){
        $("#div1").hide(1000);
    });
    $("#B_show_Mostrar").click(function(){
        $("#div1").show(1000);
    });
    //Toggle: Alterna entre hide y show
    $("#B_show_Toggle").click(function(){ 
        $("#div1").toggle(1000);
    });

    $("#B_slideUp_Ocultar").click(function(){
        $("#div1").slideUp(1000);
    });
    $("#B_slideDown_Mostrar").click(function(){
        $("#div1").slideDown(1000);
    });
    //slideToggle: Alterna entre slideUp y slideDown
    $("#B_slidetoggle").click(function(){ 
        $("#div1").slideToggle(1000);
    });

    $("#B_fadeOut_Ocultar").click(function(){
        $("#div1").fadeOut(1000);
    });
    $("#B_fadeIn_Mostrar").click(function(){
        $("#div1").fadeIn(1000);
    });
    //fadeToggle: Alterna entre fadeOut y fadeIn
    $("#B_fadeToggle").click(function(){ 
        $("#div1").fadeToggle(1000, function(){alert("Hola");});//la Segunda función se ejecutará cuando termine la primera.
    });    
});