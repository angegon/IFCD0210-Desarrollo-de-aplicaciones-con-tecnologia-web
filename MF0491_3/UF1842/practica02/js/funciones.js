function sueldoNeto()
{
    var sueldoBruto = Number(document.getElementById("number1").value); 

    if (isNaN(sueldoBruto) == true) {
        document.getElementById("etiqueta1").innerHTML = "Por favor, introduce un número";
        document.getElementById("etiqueta1").style.color = "red";
        return false;
    }

    var seguridadSocial = sueldoBruto * 1.064;
    var irpf = sueldoBruto * 1.15;
    var sueldoNeto = sueldoBruto - seguridadSocial - irpf;
    document.getElementById("etiqueta1").innerHTML =
        "<ul>" + "Sueldo Bruto: " +  sueldoBruto +
        "<li>" + "Seguridad Social: " +  irpf + "</li>"  +
        "<li>" + "IRPF: " +  sueldoBruto * 1,15 + "</li>"  +	
        "<li>" + "sueldo Neto: " +  sueldoNeto + "</li>"  +							
        "</ul>";
}


function precioFinal()
{
    var precioProducto = Number(document.getElementById("number2").value); 

    if (isNaN(precioProducto) == true) {
        document.getElementById("etiqueta2").innerHTML = "Por favor, introduce un número";
        document.getElementById("etiqueta2").style.color = "red";
        return false;
    }

    var descuento = precioProducto * 1.2;
    var impuesto = precioProducto * 1.21;
    var precioFinal = precioProducto - descuento + impuesto;
    document.getElementById("etiqueta2").innerHTML =
        "<ul>" + "Precio Producto: " +  impuesto +
        "<li>" + "Impuestos: " +  impuesto + "</li>"  +	
        "<li>" + "Precio Total: " +  precioFinal + "</li>"  +							
        "</ul>";
}


function email()
{
    var email = document.getElementById("text3").value;

    var arrayEmail1 = frase.split("@"); 

    var arrayEmail2 = arrayEmail1.split(".");

    var usuario = arrayEmail1[0];
    var dominio = arrayEmail2[0];
    var extensionEmail = "." + arrayEmail2[1]

    document.getElementById("etiqueta3").innerHTML =
    "El email es: " + usuario + "@" + dominio + extensionEmail + "<br>" +
    "El usuario es :" + usuario + "<br>" +
    "El dominio es :" + dominio + "<br>" +
    "La extension es :" + extensionEmail + "<br>";

}


function frase()
{
    var frase = document.getElementById("number4").value;

    var arrayFrase = frase.split(""); //Ascendente

    var revesArray = arrayFrase.reverse(); //Descendente

    document.getElementById("etiqueta4").innerHTML =
    "La frase es: " + frase + "<br>" +
    "Entre comillas es:" + "\"" + frase + "\"" + "<br>" +
    "En mayusculas es: " + frase.toUpperCase() + "<br>" +
    "En Minusculas es: " + frase.toLowerCase() + "<br>" +
    "Al reves es: " +  revesArray + "<br>" +
    "Cita: " + frase;

        /* otra manera de revertir la cadena
        for (i = cadena.lenght; i >= 0; i --) {
            cadenaReverse += cadena.charAt(i);
        }
        */

}


function comparativa()
{	
    var numeros = document.getElementById("number5").value; //"3,1,2"
    var arrayNumero = numeros.split(","); //[3,1,2]

    var ordenarMatriz = arrayNumero.sort(function(a,b){return a - b}); // Ordena ascendente [1,2,3]
    var valorMenor = ordenarMatriz[0]; //1
    var ordenaMatrizAlreves = ordenarMatriz.reverse(); // Ordena al reves [3,2,1]
    var valorMayor = ordenarMatriz[0]; //3

    var suma = 0;
    var i;
    for (i = 0; i < arrayNumero.lenght; i++){
        suma += arrayNumero[i];
    }

    document.getElementById("etiqueta5").innerHTML =
        "<ul>" +
        "<li>" + "El número mayor es:" + valorMayor  + "</li>"  +
        "<li>" + "El número menor es:" + valorMenor  + "</li>"  +
        "<li>" + "la suma de los números es :" + suma  + "</li>"  +
        "</ul>";
}


function tablaMultiplicar()
{
    var valor = Number(document.getElementById("number6").value); 

    if (isNaN(valor) == true) {
        document.getElementById("etiqueta6").innerHTML = "Por favor, introduce un número";
        document.getElementById("etiqueta6").style.color = "red";
        return false;
    }

    if (valor < 1 || valor  > 10) {
        document.getElementById("etiqueta6").innerHTML = "Por favor, escriba un número entre el 1 y el 10";
        document.getElementById("etiqueta6").style.color = "red";
        return false;
    }
    document.getElementById("etiqueta6").innerHTML =
        "<ul>" + "Tabla del" +  valor +
        "<li>" + "1  x " + valor + "=" + 1 * valor + "</li>"  +
        "<li>" + "2  x " + valor + "=" + 2 * valor + "</li>"  +
        "<li>" + "3  x " + valor + "=" + 3 * valor + "</li>"  +
        "<li>" + "4  x " + valor + "=" + 4 * valor + "</li>"  +
        "<li>" + "5  x " + valor + "=" + 5 * valor + "</li>"  +
        "<li>" + "6  x " + valor + "=" + 6 * valor + "</li>"  +
        "<li>" + "7  x " + valor + "=" + 7 * valor + "</li>"  +
        "<li>" + "8  x " + valor + "=" + 8 * valor + "</li>"  +
        "<li>" + "9  x " + valor + "=" + 9 * valor + "</li>"  +
        "<li>" + "10  x " + valor + "=" + 10 * valor + "</li>"  +							
        "</ul>";
}