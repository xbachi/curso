<?php 
	
	if (!isset($_GET['conf'])) {
	header('Location: login.php');
	} 


	$f=fopen($_GET['conf'],"r");
	$datosUsuario = fgets($f);
	fclose($f);
	$usuario = explode(",", $datosUsuario);
	print_r($usuario);

	// CONECTARSE AL SERVIDOR

	$laConexion = mysqli_connect('localhost','root',''); // ip del servidor, usuario y contraseña de mysql

	if (!$laConexion) {
		echo "no se pudo conectar";
	}

	// CONECTAR A LA BASE DE DATOS

	mysqli_select_db($laConexion, 'integrador'); // la variable donde guarde la conexion y la base de datos que quiero

	
	// INSERTO LOS CAMPOS EN LA BASE

	$consulta="INSERT INTO usuario (`nombre` ,`email` ,`tel` ,`direccion` ,`usuario` ,`password`)
	VALUES ('$usuario[0]','$usuario[1]','$usuario[2]','$usuario[3]','$usuario[4]','$usuario[5]')";

	$resultado = mysqli_query($laConexion, $consulta); // SIEMRE SE USA LA VARIABLE DONDE ESTA LA CONEXION, Y DSP EL QUERY, QUE EN ESTE CASO ESTA EN UNA VARIABLE "CONSULTA"

	//Cierro la conexion
	mysqli_close($laConexion);
	
	// avisar que esta todo bien

	echo $usuario[0]." su usuario fue registrado";
	
	header( "refresh:3;url=index.php" ); //  dsp de 3 segs redirecciono al index

 ?>