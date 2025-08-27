<?php
$nombre = "juan";
$edad = 25;

$presentacion1 = "hola, mo nombre es" . $nombre . "y tengo" . $edad . "años.";

$presentacion2 = "hola, mi nombre es $nombre y tengo $edad años.";

define("SALUDO","¡BIEVENIDO!");

$mensaje = SALUDO ." ". $nombre;
echo $presentacion1 ."<br>";
echo $presentacion2 ."<br>";
echo $mensaje ."<br>";


?>