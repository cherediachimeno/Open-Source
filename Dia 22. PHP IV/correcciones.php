<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- EJERCICIO 2 -->
<form action="#">
    <label for="ciudad">Selecciona el destino:</label>
    <select name="destino" id="destino">
            <option value="Sanvi">Sant Vicenç de Calders</option>
            <option value="tgn">Tarragona</option>
            <option value="R">Reus</option>
            <option value="Torto">Tortosa</option>
    </select>
 
<div>
    <input type="checkbox" id="marca" name="marca">
    <!-- <input type="hidden" id="marca" name="marca" value="0"> -->
    <label for="marca">Ida y vuelta</label>
<div>
    <input class="btn btn-primary" type="submit" name="enviar">
</form>
    <?php
if(isset($_REQUEST['enviar'])){
    $destino = $_REQUEST['destino'];
    $idaYvuelta = $_REQUEST['marca'];
 
function precio($destino){
    switch ($destino){
        case "Sanvi": $coste = 4.00;
        break;
        case "tgn": $coste = 5.50;
        break;
        case "R": $coste = 5.50;
        break;
        case "Torto": $coste = 7.50;
        break;
    }
    return($coste);
}
 
$coste = precio($destino);
$descuento = 0;

//Si no pongo ida y vueltra me sale error aqui

if ($idaYvuelta === "on") {
    $coste = $coste*2;
    $descuento = $coste*0.25;
} else {
    $descuento = 0;
}
 
$precioTotal= $coste - $descuento;

echo "El precio total es $precioTotal y la variable ida y vuelta tiene un valor de $idaYvuelta";
 
}
?>
</body>
</html>