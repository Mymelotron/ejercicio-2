<?php

// Obtener la edad del usuario
$edad = $_POST['edad'];

// Comprobar si el usuario es mayor de edad
if ($edad >= 18) {
  echo "Es mayor de edad";
} else {
  echo "No es mayor de edad";
}

?>