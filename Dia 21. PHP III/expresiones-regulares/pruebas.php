<?php

if(isset($_REQUEST['enviar'])){
    $impresion = $_GET ['address'];
    $hayCoincidencia = preg_match("/calle/", $impresion);
    // si es un 1, hay coincidencia, si no la hay, es un 0. 

    if ($hayCoincidencia == 1){
        print "Your address is: <br/><b>" . $impresion . "</b>";
    } else {
        print "Faltó poner la calle";
    }
}
?>

<html>
<body>
   <form method="get">
        Especifique si es calle o no en la descripción
      <textarea id="address" name="address" rows="5" cols="40"></textarea>
      <input id="address-input" type="submit" value="enviar" />
    </form>

</body>
</html>

