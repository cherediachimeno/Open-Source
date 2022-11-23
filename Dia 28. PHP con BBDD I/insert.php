<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 1º PASO. Nos conectamos a la base de datos
    // En una variable llamada connection, le guardamos una función llamada
    // mysqli_connect. Los valores internos son: el localhost que usamos, usuario
    // contraseña y base de datos

    $user = "winono";
    $password = "1234";

    $connection = mysqli_connect("localhost", $user, $password, "staff");

    // 2º PASO. Comprobamos conexión

    if($connection === false){
        die("ERROR: No se puede conectar ". mysqli_connect_error());
    }

    // 3º PASO. Obtenemos los valores del formulario
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    
    // 4º PASO. Vamos a introducir la instrucción SQL
    // Grabamos en una variable llamada $sql la orden SQL. 
    $sql = "INSERT INTO college VALUES (
        '$first_name', 
        '$last_name',
        '$gender',
        '$address',
        '$email')";

    // 5º PASO. Ejecutaremos esa instrucción SQL. 
    
    if(mysqli_query($connection, $sql)){
        echo 'Datos guardados correctamente. Puedes mirarlo en el PHP MyAdmin (si os va, excepto a Marc, Mario y Fran)';
    } else {
        echo 'ERROR!!!!' .mysqli_error($connection);
    }

    // 6º PASO. Cerramos la conexión
    mysqli_close($connection);



    ?>
</body>
</html>