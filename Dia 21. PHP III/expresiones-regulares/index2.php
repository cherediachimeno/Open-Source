<?php

$str = "Comprad consolas de Nintendo";

$str = preg_replace("/nintendo/i", "XBOX", $str);
echo $str


/*
$str = "No ha venido casi casi CASI CASI nadie";

echo preg_match("/casi/i", $str); // si existe el patrón que estoy 
// buscando, devuelve 1, en caso contrario, devuelve 0.
echo "<br>";

echo preg_match("/todos/i", $str); // si existe el patrón que estoy 
// buscando, devuelve 1, en caso contrario, devuelve 0.
echo "<br>";

echo preg_match_all("/casi/", $str); // si existe el patrón que estoy 
// buscando, devuelve 1, en caso contrario, devuelve 0.
echo "<br>";

echo preg_match_all("/todos/i", $str); // si existe el patrón que estoy 
// buscando, devuelve 1, en caso contrario, devuelve 0.*/


?>