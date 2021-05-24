/******** función volumen *******/

function volumen () {
    /* Convierte litros, a decilitros, centilitros y mililitros */
    var litros = parseInt(document.getElementById("number1").value);

    if (isNaN(litros) == true) {
        document.getElementById("etiqueta1").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var decilitros = litros * 10;
    var centilitros = litros * 100;
    var mililitros = litros * 1000;

    document.getElementById("etiqueta1").innerHTML = 
        'El volumen en decilitros es: ' + decilitros + '<br>' + 
        'El volumen en centilitros es: ' + centilitros+ '<br>' +
        'El volumen en mililitros es: ' + mililitros + '<br>' ;
}

/******** función longitud *******/

function longitud () {
    /* Convierte kms, a metros, centimetros y milimetros */
    var kilometros = parseInt(document.getElementById("number2").value);

    if (isNaN(kilometros) == true) {
        document.getElementById("etiqueta2").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var metros = kilometros * 1000;
    var centimetros = metros * 100;
    var milimetros = centimetros * 100;

    document.getElementById("etiqueta2").innerHTML = 
        'La longitud en metros es: ' + metros + '<br>' + 
        'La longitud en centimetros es: ' + centimetros+ '<br>' +
        'La longitud en milimetros es: ' + milimetros + '<br>' ;
}

/******** función tiempo *******/

function tiempo() {
    /* Convierte horas, a dias, minutos y segundos */
    var dias = parseInt(document.getElementById("number3").value);

    if (isNaN(dias) == true) {
        document.getElementById("etiqueta3").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var horas = dias * 24;
    var minutos = horas * 60;
    var segundos = minutos * 60;

    document.getElementById("etiqueta3").innerHTML = 
        'La conversión a horas es: ' + horas + '<br>' + 
        'La conversión a minutos es: ' + minutos+ '<br>' +
        'La conversión a segundos es: ' + segundos + '<br>' ;
}

/******** función temperatura *******/

function temperatura() {
    /* Convierte gracos centigrados, a grados Fahrenheit y grados Kelvin. */
    var grados = parseInt(document.getElementById("number4").value);

    if (isNaN(grados) == true) {
        document.getElementById("etiqueta4").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var Fahrenheit = (grados * 1.8 ) + 32;
    var Kelvin = grados + 273.15;

    document.getElementById("etiqueta4").innerHTML = 
        'Son : ' + Fahrenheit + ' grados Fahrenheit<br>' + 
        'Son : ' + Kelvin + ' grados Kelvin<br>';
}

/******** función peso *******/

function peso() {
    /* Convierte las toneladas en kilogramos, gramos, miligramos. */
    var toneladas = parseInt(document.getElementById("number5").value);

    if (isNaN(toneladas) == true) {
        document.getElementById("etiqueta5").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var kilogramos = toneladas * 1000;
    var gramos = kilogramos * 1000;
    var miligramos = gramos * 1000;

    document.getElementById("etiqueta5").innerHTML = 
        'Convertido a kilogramos son: ' + kilogramos + '<br>' + 
        'Convertido a gramos son: ' + gramos+ '<br>' +
        'Convertido a miligramos son: ' + miligramos + '<br>' ;
}

/******** función pesaje *******/

function pesaje() {
    /* Convierte  kilogramos en onzas, libras y piedras, quilates. */
    var kilogramos = parseInt(document.getElementById("number6").value);

    if (isNaN(kilogramos) == true) {
        document.getElementById("etiqueta6").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var onzas = kilogramos * 35.274;
    var libras = kilogramos * 2.2046;
    var piedras = kilogramos * 0.1575;
    var quilates = kilogramos * 5000;

    document.getElementById("etiqueta6").innerHTML = 
        'El pesaje en onzas es: ' + onzas + '<br>' + 
        'El pesaje en libras es: ' + libras+ '<br>' +
        'El pesaje en piedras es: ' + piedras + '<br>' +
        'El pesaje en quilates es: ' + quilates + '<br>' ;
}

/******** función distancia *******/

function distancia() {
    /* Convierte kilómetros en millas, pies, yardas, pulgadas. */
    var kilometros = parseInt(document.getElementById("number7").value);

    if (isNaN(kilometros) == true) {
        document.getElementById("etiqueta7").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var millas = kilometros * 0.621371;
    var pies = kilometros * 1093.61;
    var yardas = kilometros * 3280.84;
    var pulgadas = kilometros * 39370.1;

    document.getElementById("etiqueta7").innerHTML = 
        'La distancia en millas es: ' + millas + '<br>' + 
        'La distancia en pies es: ' + pies + '<br>' +
        'La distancia en yardas es: ' + yardas + '<br>' +
        'La distancia en pulgadas es: ' + pulgadas + '<br>' ;
}

/******** función moneda *******/

function moneda() {
    /* Convierte los euros en dólares US, libras, yenes, yuanes */
    var euros  = parseInt(document.getElementById("number8").value);

    if (isNaN(euros) == true) {
        document.getElementById("etiqueta8").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var dolares = euros  * 1.22;
    var libras = euros  * 0.91;
    var yenes = euros  * 126.08;
    var yuanes = euros  * 7.97;

    document.getElementById("etiqueta8").innerHTML = 
        'La conversión a dolares es: ' + dolares + '<br>' + 
        'La conversión a libras es: ' + libras + '<br>' +
        'La conversión a yenes es: ' + yenes + '<br>' +
        'La conversión a yuanes es: ' + yuanes + '<br>' ;
}

/******** función velocidad *******/

function velocidad() {
    /* Convierte los kilómetros por hora en metros por segundo, millas por hora , nudos y pies por segundo */
    var kilómetroshora  = parseInt(document.getElementById("number9").value);

    if (isNaN(kilómetroshora) == true) {
        document.getElementById("etiqueta9").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var metrossegundo = kilómetroshora  * 0.621371;
    var millashora = kilómetroshora  * 0.539957;
    var nudos = kilómetroshora  * 0.277778;
    var piessegundo = kilómetroshora  * 0.911344;

    document.getElementById("etiqueta9").innerHTML = 
        'La conversión a metros/segundo es: ' + metrossegundo + '<br>' + 
        'La conversión a millas/hora es: ' + millashora + '<br>' +
        'La conversión a nudos es: ' + nudos + '<br>' +
        'La conversión a pies/segundo es: ' + piessegundo + '<br>' ;
}

/******** función áreas *******/

function areas() {
    /* Convierte los kilómetros cuadrados en hectáreas, acres y millas cuadradas */
    var kilometroscuadrados  = parseInt(document.getElementById("number10").value);

    if (isNaN(kilometroscuadrados) == true) {
        document.getElementById("etiqueta10").innerHTML = '<i style = "color:red">Por favor, introduce un número</i>';
        return false;
    } 

    var hectáreas = kilometroscuadrados  * 100;
    var acres = kilometroscuadrados  * 247.105;
    var millascuadradas = kilometroscuadrados  * 0.386102;

    document.getElementById("etiqueta10").innerHTML = 
        'La conversión a hectáreas es: ' + hectáreas + '<br>' + 
        'La conversión a acres es: ' + acres + '<br>' +
        'La conversión a millas cuadradas es: ' + millascuadradas + '<br>';
}