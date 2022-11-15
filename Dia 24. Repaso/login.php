<?php
$usuariosRegistrados = array("Natalia", "Walter", "Pablo");
$name = $_POST["name"]; //receiving name field value in $name variable  
$password = $_POST["password"]; //receiving password field value in $password variable  
$registroCorrecto = "El usuario $name no está registrado";


foreach ($usuariosRegistrados as $value) {
    if ($value == $name) {
        $registroCorrecto = "Hola $name bienvenida de nuevo";
    };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Información registrada</h1>
    <?= $registroCorrecto ?>
    <p>Usuario: <?= $_POST["name"] ?></p>
    <p>Contraseña: <?= $_POST["password"] ?></p>
</body>

</html>