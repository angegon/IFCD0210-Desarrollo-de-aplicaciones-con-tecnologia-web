// Ejercicio  1: (volumen)
function volumen() {
  var vol = document.getElementById("number1").value;

  if (vol == "") {
    console.log(vol + " is a " + typeof vol);
    document.getElementById("etiqueta1").innerHTML = "<em style='color: red;'>¡Eh, rellena el campo!<em>";
    return false;
  }

  console.log(vol + " is a " + typeof vol);

  var l = vol * 10,
      dl = vol * 100,
      cl = vol * 1000;

  document.getElementById("etiqueta1").innerHTML =
    "<br><h5><u><b>" + vol + "</b> <small><u>SÍ es un número y sus conversiones son:</u></small></h5>" +
    "<span>Litros: " + l + "</span><br>" + 
    "<span>Decilitros: " + dl + "</span><br>" + 
    "<span>Centilitros: " + cl + "</span><br>";
}

// Ejercicio  2: (longitud)
function longitud() {
  var long = document.getElementById("number2").value;

  if (long == "") {
    document.getElementById("etiqueta2").innerHTML =
      "<em style='color: orange;'>¡Ooops, parece que no has introducido ningún número!</em>";
    return false;
  }

  console.log(long + " is a " + typeof long);

  var dm = long / 10,
      cm = long / 100,
      mm = long / 1000;

  document.getElementById("etiqueta2").innerHTML =
    "<br><h5><b>" + long + "</b> <small><u>SÍ es un número y sus conversiones son:</u></small></h5>" +
    "<span>Decímetros: " + dm + "</span><br>" +
    "<span>Centímetros: " + cm + "</span><br>" +
    "<span>Milímetros: " + mm + "</span><br>";
}

// Ejercicio  3: (tiempo)
function tiempo() {
  var days = document.getElementById("number3").value;
  var s = "s",
      n = "n";

  if (days == "") {
    document.getElementById("etiqueta3").innerHTML =
      "<em><small style='color: red;'>Sin introducir números será chungo que te calculemos nada, majete/a.</em></small>";
    return false;
  } else if (days == "1") {
    s = "";
    n = "";
  }

  console.log(typeof days);

  var hours = days * 24,
      minutes = hours * 60,
      seconds = minutes * 60; // or hours * 3600

  document.getElementById("etiqueta3").innerHTML = 
    "<br><p><b>" + days + "</b> día" + s + " tiene" + n + 
    " <span>" + hours + " horas</span>, " +
    "<span>" + minutes + " minutos</span>, " +
    "<span>" + seconds + " segundos</span>.</p><br>";
}

// Ejercicio  4: (temperatura)
function temperatura() {
  var temp = document.getElementById("number4").value;

  if (temp == "") {
    document.getElementById("etiqueta4").innerHTML = "<span style='color: orange;'>...Falta un número :(</span>";
    return false;
  }

  var f = (temp * 1.8) + 32,
      k = temp + 273.15;

  document.getElementById("etiqueta4").innerHTML =
    "<br><b>" + temp + "</b> grados <u>Celsius</u> son <b>" +
    f + "º</b> <u>Fahrenheit</u> y <b>" +
    k + "º</b> <u>Kelvin</u>.";
}

// Ejercicio  5: (peso)
function peso() {
  var weight = document.getElementById("number5").value;

  if (weight == "") {
    document.getElementById("etiqueta5").innerHTML = "<span style='color: #af2a2d'>No has introducido ningún valor 🔥</span>";
    return false;
  }

  // option 1
  // var kg = weight * 1000,
  //     gr = kg * 1000,
  //     mg = gr * 1000;

  // option 2
  var kg = weight * 1000,
      gr = weight * 1000e3,
      mg = weight * 1000e6;

  // template literals
  document.getElementById("etiqueta5").innerHTML = 
    `<b style='color: #4c8e37'>${weight}</b> toneladas son <b>${kg}</b> kg, <b>${gr}</b> gr y <b>${mg}</b> mg.`;
}

// Ejercicio  6: (pesaje)
function pesaje() {
  var wg = document.getElementById("number6").value;
  var s = "s",
      son = "son";

  if (wg == "") {
    document.getElementById("etiqueta6").innerHTML = 
      "<span class='mt-3 text-monospace' style='color: #dc3545; display: block;'>Hace falta introducir un número para poder hacer el cálculo 🤦‍♂️</span>"
    return false;
  } else if (wg == "1") {
    s = "";
    son = "es";
  }

  var oz = wg * 35.274,
      qte = wg * 5e3,
      lb = wg * 2.2046,
      pd = wg * 0.1575;

  document.getElementById("etiqueta6").innerHTML = 
    `<span class="mt-3 text-monospace" style="display: block;"><b>${wg}</b> kilo${s} ${son}:</span>` +
    `<ul class="text-monospace"><li><b>${oz}</b> onzas.</li>` +
    `<li><b>${qte}</b> quilates.</li>` +
    `<li><b>${lb}</b> libras.</li>` +
    `<li><b>${pd}</b> piedras.</li></ul>`;
}

// Ejercicio  7: (distancia)
function distancia() {
  var distance = document.getElementById("number7").value;
  var s = "s",
      son = "son";

  if (distance == "") {
    document.getElementById("etiqueta7").innerHTML =
      "<span class='mt-3' style='color: #d39e00; display: block;'>Introduce un número de kilómetros, por favor 🙏</span>";
      return false;
  } else if (distance == "1") {
    s = "";
    son = "es";
  }

  var mi = distance * 0.621371,
      yd = distance * 1093.61,
      ft = distance * 3280.84,
      inc = distance * 39370.1;

  document.getElementById("etiqueta7").innerHTML = 
    `<span class="mt-3" style="display: block;"><b>${distance}</b> kilómetro${s} ${son}:</span>` +
    `<ul><li><b>${mi}</b> millas.</li>` +
    `<li><b>${yd}</b> yardas.</li>` +
    `<li><b>${ft}</b> pies.</li>` +
    `<li><b>${inc}</b> pulgadas.</li></ul>`;
}

// Ejercicio  8: (moneda)
function moneda() {
  var currency = document.getElementById("number8").value;
  var s = "s",
      son = "son";

  if (currency == "") {
    document.getElementById("etiqueta8").innerHTML = 
      "<small style='color: #d39e00;'><b>Introduce una cantidad para poder hacer la conversión</b> 💰</span>";
      return false;
  } else if (currency == "1") {
    s = "";
    son = "es";
  }

  var dollar = currency * 1.22,
      pound = currency * 0.91,
      yen = currency * 126.08,
      yuan = currency * 7.97;

  document.getElementById("etiqueta8").innerHTML = 
  `<span class="mt-3" style="display: block;"><b>${currency}</b>€ (Euro${s}) ${son}:</span>` +
  `<span class="badge badge-primary mr-2">${dollar}$ USD.</span>` +
  `<span class="badge badge-success mr-2">${pound}£ libras.</span>` +
  `<span class="badge badge-warning mr-2">${yen}¥ yenes.</span>` +
  `<span class="badge badge-danger mr-2">${yuan}¥ yuanes.</span>`;
}

// Ejercicio  9: (velocidad)
function velocidad() {
  var vel = document.getElementById("number9").value;
  var s = "s",
      son = "son";

  if (vel == "") {
    document.getElementById("etiqueta9").innerHTML = 
      "<span class='badge badge-danger'>Introduce un valor numérico y deja de cotillear Facebook.</span>";
      return false;
  } else if (vel == "1") {
    s = "";
    son = "es";
  }

  var m = vel * 0.277778,  // meters per seconds
      ml = vel * 0.621371, // milles per hour
      kn = vel * 0.539957, // knots per seconds
      ft = vel * 0.911344; // feets per seconds

  document.getElementById("etiqueta9").innerHTML = 
    `<span class="mt-3" style="display: block;"><b>${vel}</b>Km <small>kilómetro${s} por hora</small> ${son}:</span>` +
    `<span class="badge badge-primary mr-2">${m} m/s <small>metros por segundo</small>.</span>` +
    `<span class="badge badge-success mr-2">${ml} m/h <small>millas por hora</small>.</span>` +
    `<span class="badge badge-warning mr-2">${kn} m/s <small>nudos por segundo</small>.</span>` +
    `<span class="badge badge-danger mr-2">${ft} p/s <small>pies por segundo</small>.</span>`;
}

// Ejercicio  10: (áreas)
function areas() {
  var area = document.getElementById("number10").value;
  var s = "s",
      son = "son";

  if (area == "") {
    document.getElementById("etiqueta10").innerHTML = 
    "<b class='display: block; color: red;'>Si no escribes nada chungo tema...</b>";
    return false;
  } else if (area == "1") {
    s = "";
    son = "es";
  }

  var ha = area * 100,
      ac = area * 247.105,
      mi = area * 0.386102;
  
  document.getElementById("etiqueta10").innerHTML = 
    `<table class="table mt-2"><caption>Tabla de conversión de <b>km<sup>2</sup></b></caption>` + 
    `<thead><tr><th>Cantidad</th><th>Unidad</th></tr></thead>` + 
    `<tbody><tr><td>${ha}</td><td>Hectáreas</td></tr>` +
    `<tr><td>${ac}</td><td>Acres</td></tr>` +
    `<tr><td>${mi}</td><td>Millas cuadradas</td></tr>` +
    `</tbody></table>`;
}
