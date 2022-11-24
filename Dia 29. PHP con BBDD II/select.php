<?php

// EJEMPLO USANDO POO

// 1º PASO. CONECTAMOS
$mysqli = new mysqli("localhost", "laura", "LAURA@laura", "staff");
// COMPROBAMOS QUE LA CONEXIÓN ES CORRECTA
if($mysqli === false){
    die("Error: could not connect ". $mysqli->connect_error);
}

// 2º PASO. INSTRUCCIÓN SQL GRABADA EN UNA VARIABLE
$sql = "SELECT * FROM college ORDER BY last_name LIMIT 5";

// 3º PASO. EJECUTAMOS INSTRUCCION SQL E IMPRIMOS RESULTADOS
// EJECUTAMOS EN UNA VARIABLE LLAMADA RESULT. 
$result = $mysqli->query($sql);

// CONDICIONAL. SI LA EJECUCIÓN HA IDO BIEN, IMPRIMO POR PANTALLA
if($result){
    // SI HAY MÁS DE 0 COLUMNAS, ME IMPRIMES LA TABLA (DE MOMENTO SIN REGISTROS DENTRO)
    if($result->num_rows > 0){
        echo "<table>";
        echo "<tr>";
            echo "<th>First name</th>";
            echo "<th>Last name</th>";
            echo "<th>Gender</th>";
            echo "<th>Address</th>";
            echo "<th>Email</th>";
        echo "</tr>";
        // BUCLE PARA RECORRER TODOS LOS REGISTROS. UTILIZAMOS LA FUNCIÓN FETCH_ARRAY QUE LO QUE HACE ES RECORRERME TODOS LOS REGISTROS...
        while ($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free(); // te borra todo lo que se había grabado/ejecutado en $result
    } else {
        echo "No hay registros";
    }
} else{
    echo 'ERROR' .$mysqli->error;
}

?>