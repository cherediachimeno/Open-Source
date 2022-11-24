<?php

// EJEMPLO USANDO POO

// 1º PASO. CONECTAMOS
$mysqli = new mysqli("localhost", "laura", "LAURA@laura", "staff");
// COMPROBAMOS QUE LA CONEXIÓN ES CORRECTA
if($mysqli === false){
    die("Error: could not connect ". $mysqli->connect_error);
}

// 2º PASO. INSTRUCCIÓN SQL GRABADA EN UNA VARIABLE
$sql = 'UPDATE college 
SET address = "Calle Falsa 123"
WHERE first_name = "Ighor"';

// 3º EJECUCIÓN Y COMPROBACIÓN

if($mysqli->query($sql)){
    echo 'Cambios realizados correctamente';
} else {
    echo 'Error!!' .$mysqli->error;
}

$mysqli->close();