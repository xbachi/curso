<?php 

//isset quiere decir si esta el campo post nombre completo hace tal cosa
// en este caso si no esta completo ( !)


// NO SE PUEDE HACE REDIRECCIONES SI HICISTE ALGUN ECHO

	if (!isset($_POST['nombre'])) {
	header('Location: login.php');
	} 

	// obtener variables del formulario

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$dire = $_POST['dire'];
	$tel = $_POST['telefono'];
	$usuario = $_POST['user'];
	$pass = $_POST['pass'];


	// creo un archivo temporal con datos del usuario

	$datosUsuario = "$nombre,$email,$dire,$tel,$usuario,$pass";

	$nombArchivo = date("Ym").$email;
	$abrirArchivo = fopen($nombArchivo, "w");

	fwrite($abrirArchivo, $datosUsuario);
	fclose($abrirArchivo);

	
	// FUNCION MAIL PARA MNDARLO, PRIMERO DEFINO LAS VARIABLES QUE NECESITA
	// Y DSP LLAMO A LA FUNCION

	$to  = $email;
	$asunto = 'Registro en el sistema Proyecto Integrador';
	$url="http://127.0.0.1/curso/integrador/confirmar.php?conf=$nombArchivo";
	$mensaje = "
	<p>Estimado $nom,<br/>
	Usted se registró en nuestro sistema Proyecto Integrador.<br/>
	Para confirmar su registro, <a href='$url'>haga click aquí</a>.
	<br/><br/>
	</p>
	<i>Si no puede acceder, copie y pegue la siguiente dirección en su navegador:<br/>
	$url
	</i>
	";
	
	$headers  = "MIME-Version: 1.0" . "\r\n"; // ESTE VA SI O SI PARA MANDAR HTML
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; // ESTE VA SI O SI PARA MANDAR HTML
	$headers .= "From: webmaster@example.com"; // ESTE ES OPCIONAL

	// Enviarlo
	//mail($email, $asunto, $mensaje, $cabeceras);  DESCOMENTAR ESTO CUANDO SE SUBA AL SERVIDORT PARA QUE MANDE EL MAIL
	header("location: $url"); // este header reemplaza al acceso mediante el mail.
	//despues de subir al server, redireccionar a una thankYou page.





 ?>

