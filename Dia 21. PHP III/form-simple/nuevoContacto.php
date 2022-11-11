<?php 
            if($_POST['marcar'] == "on"){
                $aceptacion = "si";
            } else {
                $aceptacion = "no";
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado formulario</title>
</head>
<body>
    <div>
        <p>Hola <?= $_POST['nombre']?>, esto son los datos incorporados: </p>
        <p>Apellidos: <?= $_POST['apellidos'] ?> </p>
        <p>Acepta condiciones: <?= $aceptacion ?>  </p>
</div>
    
</body>
</html>