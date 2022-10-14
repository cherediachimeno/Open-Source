// EJERCICIO 1 CON DOM
/* 
let num1 = parseInt(prompt("dime un número"));
let num2 = parseInt(prompt("dime otro numero"));

document.getElementById("print").innerHTML += `
<h3>Suma ${num1+num2}</h3>
<h3>Resta ${num1-num2}</h3>
<h3>Mult ${num1*num2}</h3>
<h3>Div ${num1/num2}</h3>
<h3>Media ${(num1+num2)/2}</h3>
`;

if (num1 > num2) {
    document.getElementById("print").innerHTML += ` 
    <h3>La variable más grande es num1: ${num1}}</h3>
    `
} else if (num1 == num2) {
    document.getElementById("print").innerHTML += ` 
    <h3>Las variables son iguales</h3>
    `
} else {
    document.getElementById("print").innerHTML += ` 
    <h3>La variable más grande es num2: ${num2}</h3>
    `
} */

// EJERCICIO 2
/*

let edad = parseInt(prompt("qué edad tienes"));

if ( edad >= 8) {
    console.log("demasiado mayor");
} else if (edad < 8 ) {
    console.log("pasa por el tobogán");
}  */

// EJERCICIO 3 Escribe un programa que pida al usuario 3 números.
//Si el resultado de la suma de los dos  primeros  es  igual  al  tercer  número,  mostrarlo  en  pantalla,  si  no  mostrar  que  el tercero no es la suma de los dos anteriores.
/*
let numero1 = parseInt(prompt("dime un número"));
let numero2 = parseInt(prompt("dime otro número"));
let numero3 = parseInt(prompt("dime el último número"));

if (numero1 + numero2 == numero3) {
  // alert("número 1 más número 2 es IGUAL a número 3");
  document.getElementById("print").innerHTML = `<p>número 1, cuyo valor es ${numero1}, más número 2, cuyo valor es ${numero2} es IGUAL a número 3</p>`;
} else {
  //alert("el número 3 NO es la suma de los números");
  document.getElementById("print").innerHTML = `<p>el número 3, cuyo valor es ${numero3} NO es la suma de los números 1 y 2</p>`;
} 

// EJERCICIO 4
// . Escribe un programa que pida al usuario tres números y que diga si la diferencia entre
/* uno de ellos es exactamente 20 menos que uno de los otros. Por ejemplo, si el usuario
introduce 20, 40 y 55, el programa dirá que el primer número es 20 menos que el
segundo 
*/
/*
let num1 = parseInt(prompt("dime num1"));
let num2 = parseInt(prompt("dime num2"));
let num3 = parseInt(prompt("dime num3"));

if (num1 - num2 == 20) {
    console.log("la diferencia entre el primero y el segundo es 20");
}

if (num1 - num3 == 20){
    console.log("la diferencia entre el primero y el tercero es 20");
} 

if (num2 - num3 == 20) {
    console.log("la diferencia entre el segundo y el tercero es 20"); }

    */

// 

// EJERCICIO 5 - Pide al usuario que escriba un día de la semana (lunes, martes…). Mostrar en pantalla el día que dice que es si es entre lunes y viernes (Por ejemplo "Hoy es lunes") y si es fin de semana mostrar "Es fin de semana". Hazlo una vez usando switch y otra con if else.

let dia = prompt("qué día es hoy").toLowerCase();

/*
if (dia == "lunes" 
|| dia == "martes" 
|| dia == "miércoles"
|| dia == "jueves" 
|| dia == "viernes") {
    console.log("es " + dia);
} else if (dia == "sábado" 
|| dia == "domingo") {
    console.log("es finde, concretamente es " + dia);
} else {
    console.log("error en la información obtenida");
} */

switch (dia){
    case "lunes":
    case "martes":
    case "miércoles":
    case "jueves": 
    case "viernes": document.getElementById("print").innerHTML = `
    <p>es laborable, concretamente es ${dia}</p>
    `;
    console.log("es laborable, concretamente es " + dia);
    break;
    case "sábado": 
    case "domingo": console.log("es fin de la semana, concretamente es " + dia);
    break;
    default: console.log("error");
}
