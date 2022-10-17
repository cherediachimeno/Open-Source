const person = {
    fullName: {
        firstName: "Sofia",
        lastName: "Arrayás"
    },
    age: 30, 
    isCooder: true
}


// OPCIÓN ARRAY + OBJETO

const personajesCine = [
    {
        nombre: "James Bond",
        primeraPeli: 1962,
        ultimaPeli: 2021
    },
    {
        nombre: "Harry Potter",
        primeraPeli: 2001,
        ultimaPeli: 2009
    },
]

console.log(personajesCine);

personajesCine.push(
    {
        nombre: "Hulk",
        primeraPeli: 1982,
        ultimaPeli: 2022,
        imagen: "http://....jpg"
    }
)

console.log(personajesCine);

//console.log(personajesCine[2].nombre);

console.log((person.fullName.firstName)); // SOFIA
console.log(person["fullName"]["firstName"]); // SOFIA 

person.fullName.firstName = "Maria";

person["age"] = 31;
person.age = 32;

const estudiante = {};

estudiante.nombre = "Marc";
estudiante.edad = 17;
estudiante.isCooder = true;
estudiante.enjoysLatin = false;

console.log(estudiante["nombre"]);
console.log(estudiante.nombre);

console.log(estudiante);

delete estudiante.enjoysLatin;

console.log(estudiante);

/* ESTE ES EL OBJETO EN ESTE MOMENTO: 
const estudiante = {
    nombre: "Marc", 
    edad: 17, 
    isCooder: true,
    enjoysLatin: false
}

*/ 

const persona = {
    name: "Rubén",
    age: 19,
    isCooder: false
}

console.log(person.name);
console.log(persona.name);



