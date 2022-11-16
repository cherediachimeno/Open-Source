<?php
require_once("Tamagochi.php");
// RECOGIDA DE DATOS
$nombre = $_POST['comida'];

// CREACIÓN/INSTANCIA DEL OBJETO
$tamagochi = new Tamagochi("Marc", "Pichula");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interacción</title>
</head>

<body>
    <div>
        <h1>Respuesta a la interacción:</h1>
        <?= $tamagochi->comer($nombre); ?>
        </br>
        <?= $tamagochi->comprobarSalud(); ?>
    </div>

</body>
</html>