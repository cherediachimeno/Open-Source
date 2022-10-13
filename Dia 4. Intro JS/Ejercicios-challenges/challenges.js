/*
1)
console.log imprimirà qualsevol cosa que
hi hagi entre els parèntesis a la teva consola.

Canvia la frase a imprimir de sota, desa el fitxer,
i veuràs els canvis al teu navegador.

Després de confirmar que funciona, comenta"l.
*/

console.log("Hola mundo");

/*
2)
Fent servir tant l'operador (+) com l'operador (*),
multiplica i afegeix qualsevol combinació de números
per aconseguir imprimir el número 10.
*/
/*
let num1 = 5;
let num2 = 3;
let num3 = 2;

console.log(num1 + num2 + num3);
console.log(num1 * num2 * num3);
console.log((num1 + num2) * num3); 

3)
Sovint fem servir console.log per fer `debug` (depurar errors).
Pots afegir diversos arguments a dins del parèntesi del
console.log (separant-los amb comes).
Afegeix el següent dins el console.log!

3 + 4, " should equal 7"

 console.log(3 + 4, " should equal 7");


4)
Afegeix dos `strings` per imprimir
el teu nom i cognom conjuntament!
*/ 
/*
let nombre = "Roberto";
let apellidos = "Rivas";

 console.log(nombre + " " + apellidos)


5)
L'operador `modulo` (%) ens retorna la resta
d'una divisió. Si dividim qualsevol número entre 2
podrem saber si és parell o senar. Prova-ho!
*/
/*
let numero1 = prompt("dime un número");
let numero2 = prompt("dime otro número");

if (numero1 % numero2 == 0) {
  alert("números pares");
} else {
  alert("números impares");
}
*/
  
/*
6)
Canvia la ubicació de Mia reassignant la variable
"currentLocation" amb un nou string!
Per fer-ho, hauràs d"afegir una nova línia de codi
(no eliminis cap de les línies de codi).
Nota: també hauràs de "descomentar" el console.log
per imprimir la localització.
*/

const firstName = "Mia";
let currentLocation = "school";

console.log(firstName, "is currently at", currentLocation);

currentLocation = "home";

console.log(firstName, "is currently at", currentLocation);

/*
7)
Crea variables per que el missatge s'imprimeixi
correctament a la consola!
*/

let person = "Ana";
let place = "restaurant";
let food = "sushi";

console.log(person + " went to the " + place + " to eat " + food + ".");

/*
8)
Ara, reassigna totes les variables anteriors per
imprimir un nou missatge a la consola!
*/

person = "Natalia";
place = "school"
food = "pasta";

console.log(person, "went to the", place, "to eat", food, ".");
let frase = person + " went to the " + place + " to eat " + food + ".";
console.log(frase);

/*
9)
Existeixen tres formes d'incrementar
el número emmagatzemat a la variable "count".
Tot i així, hi ha un problema amb la forma en què
aquesta variable ha estat declarada. Corregeix-la!
*/
/*
let count = 0;
count = count + 1;
count += 1;
count++;

console.log(count, " should be 3");
*/ 
/*
10)
Hora de permutar! Al codi de sota volem intercanviar
els valors emmagatzemats a "a" i "b".

El codi no funciona correctament. Per assolir aquesta
tasca hauràs de crear una variable adicional
(pots anomenar-la "temp") per desar "a" o "b" mentre
fas la permuta. Fes-te un esquema si ho necessites!
*/
/*
let a = 1; // una caja llamada A, que vale 1.
let b = 2; // una caja llamada B, que vale 2.
let c = a; //guardo el valor de A, que es 1. 

console.log("BEFORE > a is: ", a, " - and b is: ", b);
 
a = b; // el valor de A se sobreescribe, y ahora vale 2. 
b = c; // el valor de b va a valer el valor de C, es decir
      // el antiguo valor de A. 

console.log("AFTER > a is: ", a, " - and b is: ", b);

11)
Fes que la següent afirmació resulti "true"!*/
/*
let num1 = 10;
let num2 = 5;

console.log(num1 > num2);

/*
12)
Fes que la següent afirmació resulti "false".
*/

let x = 10; // la variable x = 10
let y = x--; // DOS FASES
 // PRIMERA, GRABA QUE Y SEA X. ES DECIR Y = 10.
 // SEGUNDA, X SUMA 1, A PARTIR DE AHORA X = 11.
          // x = 9 >= 10
//console.log(x >= y);

/*
13)
Soluciona l'operador de comparació per què
l'afirmació següent resulti "false".
*/
          //3 es igual a 3 (solo mira contenido/dato);
console.log(3 == "3"); // true

         // 3 es igual a 3 (y mira contenido Y TIPO!)
console.log(3 === "3"); // false
/* 
14 
Modifica l'expressió de sota per què
no resulti "false".

const sunny = true;
const warm = true;

console.log(sunny != warm);

*/ 
/*
15)
Practica tot el que has après!

Inventa 10 expressions que facin servir el que
has après fins ara.
  - Fer servir els següents data types: `string`, `number`, `boolean`, `undefined` i `null`.
  - Fer servir els següents operadors: (+) (-) (\*) (/) (%).
  - Fer servir les paraules clau: var, const, let.
  - Fer servir els operadors: (=) (+=) (-=) (*=)(++) (- -).
  - Fer servir els operadors: (>) (<) (>=) (<=) (== vs ===) (!==). */