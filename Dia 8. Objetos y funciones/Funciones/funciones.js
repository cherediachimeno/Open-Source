

// CLIENTE 1 
/*
let producto1 = 9.95;
let producto2 = 10.95;
let producto3 = 89.95;
let producto4 = 3.95;

let total = (producto1 + producto2 + producto3 + producto4);
console.log("el total sin portes... sube a " + total);

if (total >= 60 && total < 100){
    console.log("más de 60 euros, descuento en los gastos de envío");
    total = total + 4.95;
} else if (total >= 100){
    console.log("gastos de envío gratis");
    total;
} else {
    console.log("gastos de envío sin descuento: 9.95!");
    total = total + 9.95;
}

console.log("EL TOTAL CON PORTES ES DE " + total);
*/

let producto1 = 9.95;
let producto2 = 10.95;

totalSINportes(producto1, producto2);
gastosEnvio();

function totalSINportes(item1, item2){
            //9.95 + 10.95
    total = item1 + item2;
    console.log("el total sin portes... sube a " + total);
}

function gastosEnvio(){

    if (total >= 60 && total < 100){
        console.log("más de 60 euros, descuento en los gastos de envío");
        total = total + 4.95;
    } else if (total >= 100){
        console.log("gastos de envío gratis");
        total;
    } else {
        console.log("gastos de envío sin descuento: 9.95!");
        total = total + 9.95;
    }
    
    console.log("EL TOTAL CON PORTES ES DE " + total);} 