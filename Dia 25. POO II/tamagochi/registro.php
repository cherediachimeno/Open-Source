
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <title>Formulario TAMAGOCHI</title>
</head>

<body>
    <h1>Interactua con tu tamagochi</h1>
    </br>
    <form method="post" action="respuestaTamagochi.php">
    <label for="comida">¿Qué le das de comer?:</label>
        <select name="comida" id="comida">
            <option value="berenjena">Berenjena</option>
            <option value="donut">Donut</option>
            <option value="fideos">Fideos</option>
            <option value="platano">platano</option>
            <option value="nada">nada</option>
        </select>
        </br>
        <input class="btn btn-primary" type="submit" name="enviar">
        <input class="btn btn-primary" type="reset">
    </form>
</body>
</html>