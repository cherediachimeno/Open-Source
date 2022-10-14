// NOTAS
/*

let notaWalter = 10;
let notaEduardo = 7;
let notaFran = 9;
let notaRoberto = 3;
let notaLaura = 3;
let notaCristina = 4;
let notaPablo = 5;
let notaNatalia = 3;
let notaCarlos = 8;
let notaMario = 3;
            //         0    1
let notasEstudiantes = [10, 7, 9, 3, 3, 4, 5, 3, 8, 3, 3]

console.log(notasEstudiantes[0]);
console.log(notasEstudiantes[9]);

let estudiantes = ["Rober", "Pablo"];

console.log("la nota de " + estudiantes[0] + " es..." + notasEstudiantes[11]);

let EduardoArray = ["Eduardo...", 10, false, true]

let array = []; // le indicamos
// que es un array.
let arrayNumerico = [1, 2, 3];
let arrayNumerico2 = [1, 2, 3];

console.log("El array tiene estos elementos " + arrayNumerico);
// este console.log me imprime el array.

console.log("El array tiene..." + arrayNumerico.length + " elementos");
// este console.log me va a decir
// lo grande que es el array
*/

let estudiantes = [];
let companyero = "Fran";

console.log("El array tiene estos valores " + estudiantes);

estudiantes.push("Walter");
console.log("El array tiene estos valores " + estudiantes);

estudiantes.push("Eduardo");
console.log("El array tiene estos valores " + estudiantes);

estudiantes.push(companyero);
console.log("El array tiene estos valores " + estudiantes);

/*
estudiantes.pop();
console.log("El array tiene estos valores " + estudiantes); */

console.log("indice 0: " + estudiantes[0]);

estudiantes.shift();
console.log("El array tiene estos valores " + estudiantes);

console.log("indice 0: " + estudiantes[0]);

estudiantes.splice(0, 1, "Natalia");

estudiantes[0] = "Pablo";
estudiantes[0] = null;
console.log(estudiantes);


// 0  ------>    1            2