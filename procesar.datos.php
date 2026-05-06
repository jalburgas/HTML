<?php
print_r($_POST);
echo "<br>";
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";
