<?php
include "conexion.php";

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$sql="INSERT INTO clientes(id,nombre,apellido) VALUES (NULL,'$nombre','$apellido')";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
echo "ACTOR AGREGADO";





?>