<?php

require_once("Persona.php");

// RECOGIDA DE DATOS
if(isset($_POST['enviar'])){

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];

// CREACIÓN/INSTANCIA DEL OBJETO

$fichaPersonal = new Persona($nombre, $apellido, $dni, $direccion);

}

// EN CASO DE MODIFICACIÓN UN ISSET...

if(isset($_REQUEST['mandar'])){

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $dni = $_REQUEST['dni'];
    $direccion = $_REQUEST['direccion'];
    $fichaPersonal = new Persona($nombre, $apellido, $dni, $direccion);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO CORRECTO</title>
</head>

<body>
    <div>
        <h1>La información recogida es:</h1>
        <ul>
            <li>Nombre: <?= $fichaPersonal->getNombre() ?></li>
            <li>Apellido: <?= $fichaPersonal->getApellido() ?></li>
            <li>DNI: <?= $fichaPersonal->getDNI() ?></li>
            <li>Dirección: <?= $fichaPersonal->getDireccion() ?></li>
        </ul>
    </div>
    <div>
    <h2>Modifica aquí todos los datos en caso de error</h2>
    </br>
    <form action="#">
    <label for="nombre">Nombre</label>
        <input type="text" name="nombre"> 
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido"> 
        <br>
        <label for="dni">DNI</label>
        <input type="dni" name="dni"> 
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion"> 
        <br>
        <input class="btn btn-primary" type="submit" name="mandar">
        <input class="btn btn-primary" type="reset">
    </form>
    </div>
</body>

</html>