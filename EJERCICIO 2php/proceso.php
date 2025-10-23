<?php
$nombre = ($_GET['nombre']);
$apellidos = ($_GET['apellidos']);
$edad = intval ($_GET['edad']);
function comprobarEdad($edad) {
    if ($edad >= 18) {
        echo "hola $nombre $apellidos, eres mayor de edad.";
    } else {
        echo "hola $nombre $apellidos, eres menor de edad.";
    }
    comprobarEdad($nombre,$apellidos,$edad);
}