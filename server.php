<?php
include "connection.php";

$name = $_GET['name'];
$surname = $_GET['surname'];

$sql="INSERT INTO stars (id,name,surname) VALUES (NULL,'$name','$surname')";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
echo $name. " ".$surname." added..";




?>