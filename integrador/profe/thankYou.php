<?php
session_start();
include("globales.inc");
include("head.inc"); ?>
	<title>Proyecto Integrador - Gracias</title>
<?php include("body.inc"); ?>
 <div class="contenedor">
  <div class="formu cuerpo">
		<div class="etiqueta"><h2>Muchas gracias</h2></div>
		<p>
<?php
	if($_GET['c']=="r"){
?>
		Hemos recibido su solicitud de registro. <br/>
		En breves recibirá un correo electrónico con los pasos a seguir para completar el registro.
<?php
}else{
?>
		Gracias por tomar acción en nuestro sistema.<br/>Estamos procesando su solicitud y pronto recibirá una notificación electrónica en su correo.
<?php
}
?>
		<br/><br/>
		Ante cualquier duda, contáctenos.
		<br/><br/><br/>
		<b><i>EducacionIT - Proyecto Integrador 2015</i></b>
		</p>
  </div>
</div>
<?php include("footer.inc"); ?>
