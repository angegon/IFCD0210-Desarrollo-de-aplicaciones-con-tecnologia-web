// Form validation function to all Exercises
function dataValidation(data, tag, msg) {
  if (data == "") {
    document.getElementById("etiqueta"+tag).innerHTML =
    `<span class='msg-alert'>${msg}</span>`;
    return false;
  }
}

/* 
* EJERCICIO 1: (Cálculo) -> Nómina - IRPF - SS
*/
function salaryCalc() {
  const salariesPerYear = 14;
  const SS = 6.4;   // 6,4% Seguridad Social
  const IRPF = 15;  // 15% Impuesto sobre la Renta de Personas Físicas
  let salaryYearly, target, salaryMonthly, monthlySS, monthlyIRPF, finalSalaryMonthly;

  salaryYearly = document.getElementById("number1").value;
  target = document.getElementById("etiqueta1");

  if (salaryYearly == "") {
    target.innerHTML =
      "<span class='msg is-danger'>💰 Introduce tu salario bruto anual 💰</span>";
    return false;
  }
  // "Salario por mes" readondeado a 2 decimales
  salaryMonthly = salaryYearly / salariesPerYear;
  salaryMonthly = salaryMonthly.toFixed(2);
  salaryMonthly = parseFloat(salaryMonthly);

  // "Impuestos" readondeados a 2 decimales
  monthlySS = salaryMonthly * (SS / 100);
  monthlySS = monthlySS.toFixed(2);
  monthlySS = parseFloat(monthlySS);

  monthlyIRPF = salaryMonthly * (IRPF / 100);
  monthlyIRPF = monthlyIRPF.toFixed(2);
  monthlyIRPF = parseFloat(monthlyIRPF);

  // "Salario neto mensual" readondeado a 2 decimales
  finalSalaryMonthly = salaryMonthly - (monthlySS + monthlyIRPF);
  finalSalaryMonthly = finalSalaryMonthly.toFixed(2);
  finalSalaryMonthly = parseFloat(finalSalaryMonthly);

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    Bruto anual: ${salaryYearly} -> ${typeof salaryYearly} 
    Bruto mensual: ${salaryMonthly} -> ${typeof salaryMonthly}
    SS mensual: ${monthlySS} -> ${typeof monthlySS}
    IRPF mensual: ${monthlyIRPF} -> ${typeof monthlyIRPF}
    Neto mensual: ${finalSalaryMonthly} -> ${typeof finalSalaryMonthly}
  `);

  target.innerHTML = 
    `<table class="is-table">` +
    `<caption>Salario <u>bruto anual</u>: <span class="is-success">${salaryYearly}</span> en ${salariesPerYear} pagas:</caption>` +
    `<thead>` +
    `<tr><th>Mensalualidades</th><th>Cantidad</th></tr>` +
    `</thead>` +
    `<tbody>` +
    `<tr><td>Bruto</td><td><span>${salaryMonthly}</span> <small>€</small></td></tr>` +
    `<tr><td>S.S. <small>(6.4%)</small></td><td><span class="is-danger">-${monthlySS}</span> <small>€</small></td></tr>` +
    `<tr><td>I.R.P.F. <small>(15%)</small></td><td><span class="is-danger">-${monthlyIRPF}</span> <small>€</small></td></tr>` +
    `<tr><td>Neto</td><td><span class="is-success"><b>${finalSalaryMonthly}</b></span> <small>€</small></td></tr>` +
    `</tbody>` +
    `</table>`;
}

/* 
* EJERCICIO 2: (Cálculo) -> Precio - descuento + IVA
*/
function getTicket() {
  const tax = 21 // 21%
  var target, price, discount, priceLessDisc, taxPrice, totalPrice;

  price = document.getElementById("number2").value;
  target = document.getElementById("etiqueta2");

  // TODO: refactor conditional in a function as:
  // dataValidation(price, 2, "⚠️ Introduce un precio para obtener el desglose.");
  if (price == "") {
    target.innerHTML =
      "<span class='msg is-danger'>⚠️ Introduce un precio para obtener el desglose.</span>";
    return false;
  }
  
  price = parseInt(price);

  discount = price / 5; // because it´s 20% (1/5)

  priceLessDisc = price - discount;

  taxPrice = (priceLessDisc * tax) / 121;
  taxPrice = taxPrice.toPrecision(2);
  taxPrice = parseFloat(taxPrice);

  totalPrice = priceLessDisc + taxPrice;
  totalPrice = totalPrice.toPrecision(3);
  totalPrice = parseFloat(totalPrice);

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    Price: ${price} -> ${typeof price} 
    Discount: ${discount} -> ${typeof discount}
    priceLessDisc: ${priceLessDisc} -> ${typeof priceLessDisc}
    Tax Price: ${taxPrice} -> ${typeof taxPrice}
    Total Price: ${totalPrice} -> ${typeof totalPrice}
  `);

  target.innerHTML = 
    `<table class="is-table">` +
    `<caption>Ticket de caja:</caption>` +
    `<thead>` +
    `<tr><th>Detalle</th><th>Cantidad</th></tr>` +
    `</thead>` +
    `<tbody>` +
    `<tr><td>Precio</td><td><span>${price}</span> <small>€</small></td></tr>` +
    `<tr><td>Descuento <small>(20%)</small></td><td><span class="is-success">${discount}</span> <small>€</small></td></tr>` +
    `<tr><td>Subtotal</td><td><span>${priceLessDisc}</span> <small>€</small></td></tr>` +
    `<tr><td>IVA <small>(21%)</small></td><td><span class="is-danger">${taxPrice}</span> <small>€</small></td></tr>` +
    `<tr><td>Total</td><td><span class="is-success"><b>${totalPrice}</b></span> <small>€</small></td></tr>` +
    `</tbody>` +
    `</table>`;
}
 
/* 
* EJERCICIO 3: (Extracción) -> Email: username, domain & extension
*/
function getEmails() {
  var target, email, username, arroba, domain, dot, extension;

  email = document.getElementById("text3").value;
  target = document.getElementById("etiqueta3");

  arroba = email.indexOf("@");
  // last "." (dot) in String cause usernames or domains can contain "." (dots) too
  dot = email.lastIndexOf(".");

  // TODO: refactor conditional in a function as:
  // dataValidation(email, 3, "✋ Introduce una dirección de email, por favor.");
  if (email == "") {
    target.innerHTML =
      "<span class='msg is-danger'>✋ Introduce una dirección de email, por favor.</span>";
    return false;
  } else if (arroba == -1 || dot == -1) {
    target.innerHTML =
      "<span class='msg is-danger'>Introduce una dirección de email válida 🧐</span>";
    return false;
  } else {
    target.innerHTML =
      "<span class='msg is-success'>Así sí 👌</span>";
  }

  username = email.slice(0, arroba);
  domain = email.slice(arroba + 1, dot);
  extension = email.slice(dot + 1, email.length);

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    Posición arroba: ${arroba} -> ${typeof arroba}
    Posición punto: ${dot} -> ${typeof dot}
    Nombre: ${username} -> ${typeof username}
    Dominio: ${domain} -> ${typeof domain}
    Extensión: ${extension} -> ${typeof extension}
  `);

  target.innerHTML += 
    `<table class="table mt-2">` +
    `<caption>${email}</caption>` +
    `<thead>` +
    `<tr><th>Usuario</th><th>Dominio</th><th>Extensión</th></tr>` +
    `</thead>` +
    `<tbody>` +
    `<tr><td><span>${username}</span></td><td><span>${domain}</span></td><td><span>${extension}</span></td></tr>` +
    `</tbody>` +
    `</table>`;
}

/* 
* EJERCICIO 4: (Análisis) -> Sentence transform to: commas, uppercase, lowercase, inverted & + "cite: "
*/
function phraseTransform() {
  var phrase, target, qmarks, uppercased, lowercased, reversed, cite;

  phrase = document.getElementById("number4").value,
  target = document.getElementById("etiqueta4");

  if (phrase == "") {
    target.innerHTML = "<span class='msg is-danger'>⌨️ &nbsp;Introduce una frase para poder hacer algo...</span>";
    return false;
  }

  qmarks = '"' + phrase + '"';

  uppercased = phrase.toUpperCase();
  lowercased = phrase.toLowerCase();

  reversed = "";
  phrase.split("").forEach((char) => {
    reversed = char + reversed;
  })

  cite = '<b>Cita:</b> ' + phrase;

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    Frase: ${phrase} -> ${typeof phrase}
    Comillas: ${qmarks} -> ${typeof qmarks}
    Mayúsculas: ${uppercased} -> ${typeof uppercased}
    Minúsculas: ${lowercased} -> ${typeof lowercased}
    Invertida: ${reversed} -> ${typeof reversed}
    Con intro: ${cite} -> ${typeof cite}
  `);

  target.innerHTML = 
    `<p class="msg">${phrase}</p>` +
    `<p>${qmarks}</p>` +
    `<p>${uppercased}</p>` +
    `<p>${lowercased}</p>` +
    `<p>${reversed}</p>` +
    `<p>${cite}</p>`;
}

/* 
* EJERCICIO 5: (Comparativa) -> Numbers sort & summa
*/
function sortNumbers() {
  var numbers, target, numbersArray, sorted, sortedInverted, minValue, maxValue;

  numbers = document.getElementById("number5").value;
  target = document.getElementById("etiqueta5");

  if (numbers == "") {
    target.innerHTML = "<span class='msg is-danger'>¡Números, necesito números! Varios y entre comas.</span>";
    return false;
  }

  numbersArray = numbers.split(","); // returns values with commas

  sorted = numbersArray.sort(function(a, b){return a - b});
  minValue = sorted[0];

  sortedInverted = numbersArray.reverse();
  maxValue = sortedInverted[0];
  
  var i, summa;
  summa = 0;
  for (i = 0; i < numbersArray.length; i++) {
    numbersArray[i] = parseInt(numbersArray[i]);
    summa += numbersArray[i];
  }

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    Números: ${numbers} -> ${typeof numbers}
    Números Array: ${numbersArray} -> ${typeof numbersArray}
    Ordenados: ${sorted} -> ${typeof sorted}
    Mínimo: ${minValue} -> ${typeof minValue}
    Máximo: ${maxValue} -> ${typeof maxValue}
    Sumados: ${summa} -> ${typeof summa}
  `);

  target.innerHTML =
    `<ul class="mt-2">` +
    `<li>Mínimo: <b class="is-danger">${minValue}</b></li>` +
    `<li>Máximo: <b class="is-success">${maxValue}</b></li>` +
    `<li>Suma: <b>${summa}</b></li>` +
    `</ul>`;
}

/* 
* EJERCICIO 6: (Listado) -> Tabla de multiplicar
*/
function getMath() {
  let number, target, mathTable;

  number = document.getElementById("number6").value;
  target = document.getElementById("etiqueta6");

  if (number == "") {
    target.innerHTML = "<span class='msg is-danger'>Por favor, no dejes la casilla en blanco.</span>";
    return false;
  }

  number = parseInt(number);
  if (number < 0 || number > 10) {
    target.innerHTML = "<span class='msg is-danger'>Por favor, introduce un número entre el 1️⃣ &nbsp;y el 🔟 .</span>";
    return false;
  }

  let i;
  mathTable = "";
  for (i = 1; i <= 10; i++) {
    mathTable += 
      `<tr><td><span>${i}</span></td><td><span>x</span></td><td><span>${number}</span></td><td><span>=</span></td><td><span>${number * i}</span></td></tr>`;
  }

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    numbers: ${number} -> ${typeof number}
    mathTable: ${mathTable} -> ${typeof mathTable}
  `);

  target.innerHTML = 
    `<table class="is-table mt-2">` +
    `<caption>Tabla de multiplicar del <b class="is-success">${number}</b></caption>` +
    `<thead class="is-hidden">` +
    `<tr><th>tabla</th><th>por</th><th>número</th><th>igual</th><th>resultado</th></tr>` +
    `</thead>` +
    `<tbody>` +
    mathTable +
    `</tbody>` +
    `</table>`;
}

/* 
* EJERCICIO 7: Representación del objeto
*/
function userMng() {
  var phrase, target, name, age, civil, namePos, civilPos, userDataObj;

  phrase = document.getElementById("text7").value;
  target = document.getElementById("etiqueta7");

  namePos = phrase.indexOf(" ");
  name = phrase.slice(0, namePos);

  age = phrase.substr(11, 2);

  civilPos = phrase.lastIndexOf(" ");
  civil = phrase.slice(civilPos + 1, phrase.length);

  userDataObj = {
    name,
    age,
    civil
  }

  // TODO: only usefull in DEV enviroment & usually removed for PRO
  console.log(`
    Frase por defecto: ${phrase} -> ${typeof phrase}
    Mombre: ${name} -> ${typeof name}
    Edad: ${age} -> ${typeof age}
    Estado civil: ${civil} -> ${typeof civil}
    Object: var persona = {nombre: "${userDataObj.name}", edad: ${userDataObj.age}, estado: "${userDataObj.civil}"}; -> ${typeof userDataObj}
  `);

  target.innerHTML = 
    `<table class="table mt-2">` +
    `<caption>Desglose de la frase: <em>"${phrase}"</em></caption>` +
    `<thead>` +
    `<tr><th><small>Nombre</small></th><th><small>Edad</small></th><th><small>Estado civil</small></th></tr>` +
    `</thead>` +
    `<tbody>` +
    `<tr><th>${userDataObj.name}</th><th>${userDataObj.age}</th><th>${userDataObj.civil}</th></tr>` +
    `</tbody>` +
    `</table>`;
}
