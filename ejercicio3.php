<?php

// Obtener los datos del formulario
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$cedula = $_GET['cedula'];

// Mostrar los datos
echo "<h1>Datos personales</h1>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Apellido: $apellido</p>";
echo "<p>Cédula: $cedula</p>";

?>