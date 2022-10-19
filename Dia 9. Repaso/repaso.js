// PRIMERO PREGUNTAMOS EDAD
let respuesta = parseInt(prompt("qué edad tienes?"));
let carnet;

// CONDICIONAL PARA LA EDAD
if (respuesta >= 18 && respuesta <= 75) {
  // SI TIENE ENTRE 18 Y 75, PREGUNTAMOS SI TIENE CARNET
  carnet = preguntarCarnet();
  // SI TIENE CARNET, PERFECTO, SINO, EL PROGRAMA AVISA
  comprobacion(carnet);
} else if (respuesta > 75) {
  alert("demasiado mayor para conducir");
} else {
  alert("NO tienes 18");
}

// FUNCIÓN PARA PREGUNTAR SI SE TIENE CARNET
function preguntarCarnet() {
  let carnet = prompt("tienes carnet?");
  // AQUÍ IMPONEMOS REDUCCIÓN A MINÚSCULA Y QUITAMOS ESPACIOS DELANTEROS/TRASEROS
  carnet = carnet.toLowerCase().trim();
  if (carnet == "si" || carnet == "sí") {
    return (carnet = true);
  } else {
    return (carnet = false);
  }
}

// ESTA FUNCIÓN COMPRUEBA SI TIENES CARNET. EL PARÁMETRO ES TRUE O FALSE, DEPENDIENDO DE ESTO REALIZA UN RETURN
function comprobacion(a) {
  if (a == true) {
    alert("muy bien: puedes conducir");
    tieneCarnet();
  } else {
    alert("tienes la edad pero NO puedes conducir");
  }
}

// ESTA FUNCIÓN, UNA VEZ SABEMOS QUE EL USUARIO TIENE CARNET, PREGUNTAMOS. SI NO ES UNA OPCIÓN VÁLIDA, VOLVEMOS A PREGUNTAR...
function tieneCarnet() {
  let respuesta = prompt("Qué vehículo quieres alquilar: coche, moto, bici...");

  let hayDisponibilidad = recorrerStock(respuesta);

  if (hayDisponibilidad == true) {
    
    switch (respuesta) {
      case "coche":
        pintarCoche();
        break;
      case "moto":
        break;
      case "bicicleta":
        break;
      case "monopatin":
        break;
      default:
        alert("No entiendo, te vuelvo a preguntar");
        tieneCarnet();
    }
    
  } else {
    alert("no hay disponibilidad, volvemos a preguntarte...");
    tieneCarnet();
  }
}

// ESTA FUNCIÓN PINTA POR PANTALLA EN CASO DE PODER ALQUILAR UN COCHE
function pintarCoche() {
  document.getElementById("webCompleta").innerHTML = `
        <img src="https://www.skikamel.com/viajes/images/alquiler_de_coches.jpg" alt="fotos de coches disponibles">
        `;
}

// FUNCIÓN PARA VER SI HAY STOCK ANTES DE PINTAR NADA POR PANTALLA 
function recorrerStock(peticion) {
  let disponibilidad = ["coche", "moto"];

  for (let i = 0; i < disponibilidad.length; i++) {
        //uno de los indice del bucle sea igual a .... bicicleta
    if (disponibilidad[i] == peticion) {
      alert("estupendo, tenemos stock");
      return true;
    } else {
      alert("no tenemos stock");
      return false;
    }
  }
}
