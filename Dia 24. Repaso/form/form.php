<?php
// escribir código PHP
if(isset($_REQUEST['mandar'])){

    // OBTENCIÓN DE LOS DATOS QUE EL USUARIO HA SELECCIONADO EN EL FORM
    $nombre = $_REQUEST['nombreMascota'];
    $especie = $_REQUEST['especie'];
    $esAlergico = $_REQUEST['alergico'];
    /*
        // CONDICIONAL PARA DARLE A LA VARIABLE UN VALOR BOOLEANO
        if ($esAlergico == "si") $esAlergico = true;
        else $esAlergico = false; */
    
  //  echo "Aquí los datos del registro: $nombre, $especie, $esAlergico";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <title>Registra tu mascota</title>
</head>
<body>
    <h1>Registra tu mascota</h1>
    </br>
    <form>
        <label for="nombreMascota">Nombre mascota:</label>
        <input type="text" name="nombreMascota"> 
        <br>
        <label for="especie">Especie:</label>
        <select name="especie" id="especie">
            <option value="perro">Perro</option>
            <option value="gato">Gato</option>
            <option value="winono">Winono</option>
            <option value="tortuga">Tortuga</option>
        </select>
        </br>
        <label for="alergico">¿Es alérgico?</label>
        <select name="alergico" id="alergico">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
        <br>
        <input class="btn btn-primary" type="submit" name="mandar">
        <input class="btn btn-primary" type="reset">
    </form>
    <h1>Output</h1>
    <?= $nombre ?>
    <?= $especie ?>
    <?= $esAlergico ?>


</body>
</html>