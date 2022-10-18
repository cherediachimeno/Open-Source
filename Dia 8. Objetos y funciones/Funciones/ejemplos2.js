// PRIMERO, DECLARAMOS VARIABLES

let num1 = parseInt(prompt("dime PRIMER numero"));
let num2 = parseInt(prompt("dime SEGUNDO numero"));
let num3 = parseInt(prompt("dime TERCER numero"));
let nombre = prompt("dime tu nombre");

let saludarArrow = (nombre) => `Hola ${nombre}`

alert(saludarArrow(nombre) + " el resultado de la operación es " + calculos(num1, num2, num3));



// console.log("el total es " + calculos(num1, num2, num3) )
console.log("el total es " + total);

function calculos(a, b, c) {
    let suma = (a + b) * c;
    return suma + 50;
}

function saludar(nombre) {
    return `Hola ${nombre}`
}

