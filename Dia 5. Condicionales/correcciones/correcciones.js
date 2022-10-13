
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

// EJERCICIO 4
// . Escribe un programa que pida al usuario tres números y que diga si la diferencia entre
/* uno de ellos es exactamente 20 menos que uno de los otros. Por ejemplo, si el usuario
introduce 20, 40 y 55, el programa dirá que el primer número es 20 menos que el
segundo 
*/

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

    