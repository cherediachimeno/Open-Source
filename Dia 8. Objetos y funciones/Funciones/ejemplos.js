let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime otro numero"));

let respuesta = prompt("quieres sumar o restar?");

if (respuesta === "sumar"){
    alert(sumar(num1, num2));
} else if (respuesta === "restar"){
    alert(restar(num1, num2));
} else {
    alert("valor no válido");
}

function sumar(a, b){
    return a + b;
}

function restar(a, b){
    return a - b;
}

/*

let perrito = "Toby";

residenciaCanina(perrito);

function residenciaCanina(animal) {

    console.log("perfecto, nos quedamos unos dias a " + animal);
}


let num1 = 5;
let num2 = 10;

             // 15
let total = suma(num1, num2);

total = total + 5.95;

console.log("total con gastos " + total);


function suma(item1, item2) {
    console.log("console.log de la función " + item1+item2); 
    return item1+item2
    // imprimo
    // la suma da 15... quiero cconseguir ese "15" para sumarle los gastos de envio
}
*/