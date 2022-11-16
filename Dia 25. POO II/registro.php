
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <title>Formulario POO</title>
</head>

<body>
    <h1>Registro de personal de Buking.com</h1>
    </br>
    <form method="post" action="respuesta.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"> 
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido"> 
        <br>
        <label for="dni">DNI</label>
        <input type="dni" name="dni"> 
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion"> 
        <br>
        <input class="btn btn-primary" type="submit" name="enviar">
        <input class="btn btn-primary" type="reset">
    </form>
</body>
</html>