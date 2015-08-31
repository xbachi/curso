<?php
$asunto = 'teste';
$mensaje = "<html><head><meta charset='UTF-8' /></head><body>
<p>Estimado $nom,<br/>
Usted se registró en nuestro sistema Proyecto Integrador.<br/>
Para confirmar su registro
<br/><br/>
Atentamente,
<br/><br/>
EducacionIT - Proyecto Integrador 2015
<br/><br/>
</p>
<i>Si no puede acceder, copie y pegue la siguiente dirección en su navegador:<br/>
</i>
</body></html>";
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'To: pablo@xeven.com.ar'."\r\n";
$cabeceras .= 'From: PHP EducacionIT <integrador@xeven.com.ar>' . "\r\n";
$cabeceras .= 'Bcc: registros@xeven.com.ar' . "\r\n";
// Enviarlo
echo mail("pablo@xeven.com.ar", $asunto, $mensaje, $cabeceras);
?>

