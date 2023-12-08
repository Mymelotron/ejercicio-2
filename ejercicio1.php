<?php

// Obtener los datos del formulario
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

// Realizar la operación
switch ($operacion) {
  case "suma":
    $resultado = $numero1 + $numero2;
    break;
  case "resta":
    $resultado = $numero1 - $numero2;
    break;
  case "multiplicacion":
    $resultado = $numero1 * $numero2;
    break;
  case "division":
    $resultado = $numero1 / $numero2;
    break;
}

// Mostrar el resultado
echo "El resultado es: $resultado";

?>