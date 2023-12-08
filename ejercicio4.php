<?php

// Obtener la fecha de nacimiento del usuario
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Obtener la fecha actual
$fecha_actual = date("Y-m-d");

// Calcular la diferencia de fechas
$diferencia_de_fechas = strtotime($fecha_actual) - strtotime($fecha_nacimiento);

// Convertir la diferencia de fechas en años
$edad = $diferencia_de_fechas / (60 * 60 * 24 * 365.25);

// Comprobar si el usuario es mayor de edad
if ($edad >= 18) {
  echo "Su edad es $edad por tanto: Es mayor de edad";
} else {
  echo "Su edad es $edad por tanto: No es mayor de edad";
}

?>