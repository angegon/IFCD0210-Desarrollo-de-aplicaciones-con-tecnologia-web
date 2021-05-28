$(document).ready(function(){
    $("#externo").load("js001_Repaso.html");
    var incremento = 10;
    $("#B_Animar").click(function(){
        $("#div1").animate({height: "+=200"}, 3000); //left: 800, top: 400
    });
    $("#B_Mover_Horizontal").click(function(){
        $(this).attr("disabled", "disabled");
        $("p").animate({left: "+=" + incremento}, 1000, function(){
            $("#B_Mover_Horizontal").removeAttr('disabled'); // Pendiente
        });
        
    });
    $("#B_Mover_Vertical").click(function(){
        $("#div1").animate({top: "-=20px"}, 3000);
    });
});