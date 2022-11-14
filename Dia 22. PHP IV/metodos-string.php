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

    /*
    
    $titulo = "Hola mundo";
    $stringExtraidoHola = substr($titulo, 0, 4); // hola
    $stringExtraidoMundo = substr($titulo, 5); // mundo
    $titulo = strtoupper($stringExtraidoHola) . " " . strtolower($stringExtraidoMundo);
    
    echo $titulo;
    */

    $palabra = "Hola";
    $longitud = strlen($palabra);
    $parte1 = substr($palabra,0, $longitud/2);
    $parte1mayus = strtoupper($parte1);
 
    $parte2 = substr($palabra,$longitud/2, $longitud/2);
    $parte2minus = strtolower($parte2);
 
    echo "$parte1mayus$parte2minus";

?>
</body>
</html>