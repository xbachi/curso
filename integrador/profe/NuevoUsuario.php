<?php
include("globales.inc");
if(!isset($_POST['nom'])){
	header("location: $loginURL");
}
$nom=$_POST['nom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$direcc=$_POST['direcc'];
$user=$_POST['user'];
$pwd=$_POST['pwd'];
// creo archivo temporal con datos de usuario
$datosUsuario="$nom,$email,$tel,$direcc,$user,$pwd";
$nomArch=date("Ym").$email;
$f=fopen($nomArch,"w");
fwrite($f,$datosUsuario);
fclose($f);
//Envio de mail
$asunto = 'Registro en el sistema Proyecto Integrador';
$url=$URLbase."confirmar.php?conf=$nomArch";
$mensaje = "<html><head><meta charset='UTF-8' /></head><body>
<p>Estimado $nom,<br/>
Usted se registró en nuestro sistema Proyecto Integrador.<br/>
Para confirmar su registro, <a href='$url'>haga click aquí</a>.
<br/><br/>
Atentamente,
<br/><br/>
EducacionIT - Proyecto Integrador 2015
<br/><br/>
</p>
<i>Si no puede acceder, copie y pegue la siguiente dirección en su navegador:<br/>
$url
</i>
</body></html>";
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'To: '.$email. "\r\n";
$cabeceras .= 'From: PHP EducacionIT <integrador@xeven.com.ar>' . "\r\n";
$cabeceras .= 'Bcc: registros@xeven.com.ar' . "\r\n";
// Enviarlo
//mail($email, $asunto, $mensaje, $cabeceras);
	header("location: $url"); // este header reemplaza al acceso mediante el mail.
//despues de subir al server, redireccionar a la thankYou page y comentar el redirect de arriba
//header("location: $URLbase"."thankYou.php?c=r");
?>
