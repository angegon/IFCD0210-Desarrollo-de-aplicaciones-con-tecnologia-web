<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página flexbox</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/IFCD0210-Desarrollo-de-aplicaciones-con-tecnologia-web/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/360db1fee7.js"></script>

    <script>
        let arr = ['a', {b:'b'}, ['c', 'd'], {e:['f','g']}];
        console.log(arr[0]);console.log(arr[2][0]);console.log(arr[3].e[1]);

        var array = [1,2,3,10];
        var suma = 0; for (i = 0; i < array.length; i ++) {suma += array[i];} console.log(suma); 

         let coche = {
             "marca":'honda', 
             "motor":{
                 "combustible":"gasolina",
                 "consumo": 5,
             }, 
             "extras":{
                 "0": 'radio',
                 "1":'vaca',
                 "2":'A/C',
                },
         };
            console.log(coche); 
        if (coche.marca === 'honda') {
        console.log('viva los japos!');
        }
        if (coche.motor.combustible === 'gasolina') {
        console.log('¿y sólo consume 5 litros a los 100km?');
        }
        if (coche.motor.consumo === 5) {
        console.log('¿y sólo consume 5 litros a los 100km?');
        }
        if (coche.extras[2] === 'A/C') {
        console.log('¿Venden el A/C como un extra?!');
        }
    </script>
</head>
<body>
    <header>
        <nav class="menu-navegacion contenedor">
            <div class="logo">
                <img src="imagenes/logo.jpg" alt="Foto de No disponible" id="logo">
            </div>
            <div class="logo_texto">
                
            </div>

            <ul class="enlaces">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#quien">Quien soy</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>

        </nav>
        <section class="hero">
            <div class="contenedor-textos contenedor">
                <h1>Desarrollo web</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, non vel accusamus quasi blanditiis mollitia, saepe totam id adipisci beatae nostrum nulla repellat tenetur nihil obcaecati fuga porro! Perferendis, et.</p>
                <a class="boton" href="#">Más info</a>
            </div>
        </section>
    </header>
</body>
</html>