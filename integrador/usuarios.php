<?php include("head.inc"); ?>
	<title>Proyecto Integrador - Admin - Usuarios</title>
<?php include("body.inc"); ?>
	<h2>Listado de usuarios</h2>
	<p>A continuación se listan los usuarios, haga click en Editar para modificar uno.</p>
	<br/>
	<?php

$laConexion = mysqli_connect('localhost', 'root', '');
if (!$laConexion) {
 	header("location: errores.php?i=NoDB");
}
//Selecciono la base de datos
$db=mysqli_select_db($laConexion, 'integrador');

$consulta = "SELECT * FROM usuarios";
$registros = mysqli_query($laConexion, $consulta);
//cierro la conexion
mysqli_close($laConexion);
$i=0;


?>
<br/>



 <!-- CONSULTAS A LA BASE DE DATOS (para leer los campos que ya hay en la base, en este caso a fila mail)

	 lo que hago es guardar el resultado de la consulta en una variable $registros
	 luego divido la variabl registros en un array llamado $fila ( fetch array)
	 luego muestro la posicion 'email' del array fila  (que son todso los datos dela base por la consulta que hicimos)

     $consulta = "SELECT * FROM usuario";
	$registros = mysqli_query($laConexion, $consulta);
	
	while ($fila = mysqli_fetch_array($registros)){

		$i++;
		echo $fila['email'];
		echo "<br/>";

	} -->


<table border="1">
	<tr style="background-color:#81BEF7;">
		<td>ID</td><td>Nombre</td><td>Email</td><td>Tel</td><td>Dirección</td><td>Usuario</td>
		<td>Editar</td><td>Eliminar</td>
	</tr>
<?php
$f1="<tr style='background-color:#CEECF5;'><td>";
$f2="<tr style='background-color:#F8ECE0;'><td>";
while($fila = mysqli_fetch_array ($registros)){
	$i++;
	if($i%2==0){
		echo $f1;
	}else{
		echo $f2;
	}
	echo $fila['id'];
	echo "</td><td>";
	echo $fila['nombre'];
	echo "</td><td>";
	echo $fila['email'];
	echo "</td><td>";
	echo $fila['tel'];
	echo "</td><td>";
	echo $fila['direccion'];
	echo "</td><td>";
	echo $fila['usuario'];
	echo "</td><td>";
	echo "Editar";
	echo "</td><td>";
	echo "Eliminar";
	echo "</td></tr>";
}
?>
<tr><td colspan="8">Total: <?=$i?></td></tr>
</table>

<script type="text/javascript" src="funciones.js"></script>
<?php include("footer.inc"); ?>


