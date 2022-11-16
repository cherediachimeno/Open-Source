<?php
require("Tamagochi.php"); // importamos la clase
    session_start(); // iniciamos sesión

if(isset($_SESSION['tamagochi'])){   // si la sesión ya está iniciada, guardame
    // en una variable tamagochi, el objeto tamagochi;
    $tamagochi = $_SESSION['tamagochi'];
}

if(isset($_REQUEST['resucitar'])){  
    $tamagochi = new Tamagochi("Marc", "Pichula");
}


// RECOGIDA DE DATOS
$nombre = "";
if(isset($_POST['tamagochi']) ){
    $nombre = $_POST['comida'];
}

if(isset($_POST['enviar'])){
    $nombre = $_POST['comida'];
}

// CREACIÓN/INSTANCIA DEL OBJETO/*
if ($tamagochi == null){
    $tamagochi = new Tamagochi("Marc", "Pichula");
}

if ($tamagochi->vida <= 0){
    session_destroy();
    //$tamagochi = new Tamagochi("Marc", "Pichula");

}

$_SESSION['tamagochi'] = $tamagochi;


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
    <h2>Qué más quieres hacer?</h2>
    <form method="post" action="#">
    <label for="comida">¿Qué le das de comer?:</label>
        <select name="comida" id="comida">
            <option value="berenjena">Berenjena</option>
            <option value="donut">Donut</option>
            <option value="fideos">Fideos</option>
            <option value="platano">platano</option>
            <option value="nada">nada</option>
        </select>
        </br>
    <input class="btn btn-primary" type="submit" name="tamagochi">
    </form>
</body>
</html>