<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

$puerto = "localhost";
$usuario = "root";
$contraseña = "";

$conexion = mysql_connect($puerto,$usuario,$contraseña);
mysql_select_db("curso",$conexion);

$insertar = "insert into calidad(nombre,apellido,email,comentario) values('$nombre','$apellido','$email','$comentario')";
mysql_query($insertar);

echo "Datos guardados";


 ?>

 