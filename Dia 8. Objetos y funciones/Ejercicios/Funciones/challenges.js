/*
1)
Crea una funció anomenada "triple" que rebi
un paràmetre, "x", i que retorni el valor
de "x" multiplicat per tres.

*/ 

console.log(triple(5));

function triple(x){
  return x * 3;
}


/*
2)
Crea una funció anomenada "subtract" que
rebi dos paràmetres i que retorni el resultat
de la resta del primer menys el segon.
*/

console.log(subtract(5, 2)); // 3
console.log(subtract(1, 3)); // -2
console.log(subtract(10, 5)); 
console.log(subtract(4, 5)); 

function subtract(a, b) {
  let resta = a - b;
  return resta;
}

/*
3)
Crea una funció anomenada "createArray" que
rebi tres arguments i retorni tots tres
arguments dins un array.
*/
/*
function createArray(a, b, c){
  return ([a, b, c]);
}

console.log(createArray(3, "a", true)); // [3, "a", true]

let listaClase = createArray("Fran", "Laura", "Núria");

console.log(listaClase[2]);


/*
4)
Crea una funció anomenada "greetPerson" que rebi
un string com a argument i retorni aquest mateix
string dins una frase de salutació.
Si la funció rep un argument que no és un string,
la funció ha de retornar "Please provide a name."
*/ 
/*
function greetPerson(nombre) {

  if (typeof nombre === "string") {
      return `Hello ${nombre}`
  } else if (typeof nombre === "number"){
    return `Please provide a name, because the element ${nombre} is a NUMBER`
  } else if (typeof nombre === "boolean"){
    return `Please provide a name, because the element ${nombre} is a BOOLEAN item`
  } else {
      return `Please provide a name`}
  }

console.log(greetPerson("Sofia")); // "Hello, Sofia!"
console.log(greetPerson(42)); // "Please provide a name."
console.log(greetPerson(true));

/* 
5)
Crea una funció anomenada "addTogether" que rebi un array
de números com a argument i que retorni la suma de tots
els números.
*/
/*
function addTogether([num1, num2, num3, num4, num5]){
  return num1 + num2 + num3 + num4 + num5;
}

console.log(addTogether([1, 2, 3, 4, 5])); 

// UNA FUNCIÓN QUE ME HAGA LA MEDIA DE LAS NOTAS DE CLASE

let notas = [7, 7, 10, 9, 3, 7, 7, 10];

console.log("la media de clase es... " + calcularMedia(notas));


function calcularMedia([nota1, nota2, nota3, nota4, nota5, nota6, nota7, nota8]){
  let suma = (nota1+nota2+nota3+nota4+nota5+nota6+nota7+nota8);
  return suma / 8;

}

/*
6)
Crea una funció anomenada "getIndex". Ha de rebre dos
arguments: un array i un valor. La funció ha de retornar
l'índex en què es troba el valor donat. Si el valor no
es troba a l'array, ha de retornar -1.

NO facis servir el mètode d'arrays indexOf a la teva resposta.
Pista: crea un loop!

Test cases:
console.log(getIndex([1, 2, 3, 4, 5, 6], 4)); // 3
console.log(getIndex([1, 2, 3, 4, 5, 6], 7)); // -1
*/

/*
7)
Crea una funció anomenada "includesValue". Ha de retornar
un boolean si "x" (un valor) es troba a "arr" (un array).

Per fer aquest exercici fes servir la funció "getIndex"
que has creat a la pregunta anterior. Crida la funció
"getIndex" des de dins de la funció "includesValue".

Test cases:
console.log(includesValue([1, 2, 3, 4, 5, 6], 4)); // true
console.log(includesValue([1, 2, 3, 4, 5, 6], 7)); // false
*/

/*
8) Nested Objects
Crea una funció anomenada "createObject" que rebi un array
com a argument. Ha de retornar un objecte que classifiqui
els valors de l'array per data type.
Fes servir la variable "result" que et proporcionem a
continuació per construir l'objecte a retornar.

let result = {
  numbers: [],
  booleans: [],
  strings: []
}

Test case:
console.log(createObject([3, "a", true, false, 2, true])); // { numbers: [3, 2], booleans: [true, false, true], strings: ["a"] }
*/

/*
9)
Crea una funció anomenada "removeSpaces" que elimini tots
els espais d'un string.

Test case:
console.log(removeSpaces("He went to the store.")); // "Hewenttothestore"
*/

/*
10)
Crea una funció anomenada "titleCase" que rebi un string
com a argument. La funció ha de retornar el string però
amb la primera lletra de cada paraula en majúscula.
No cal que et preocupis de la primera lletra de la frase -
pots assumir que ja és majúscula.

Pista: l'índex de cada lletra que hem de passar a majúscula
és 1 valor més gran que l'índex dels espais del teu string.

Test case:
console.log(titleCase("He went to the store.")); // "He Went To The Store"
*/