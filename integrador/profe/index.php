<?php
session_start();
include("globales.inc");
if(!isset($_SESSION['usuario'])){
  header("Location: $loginURL");
}
include("head.inc"); ?>
	<title>Proyecto Integrador - Bienvenido</title>
<?php include("body.inc"); ?>
 <div class="contenedor">
  <div class="formu cuerpo">
		<div class="etiqueta"><h2>Bienvenido <?=$_SESSION['usuario']?> <a href="logout.php">(cerrar sesión)</a></h2>
		</div>
		<p>
		[Contenido del sistema...]
		<br/><br/><br/>
		<a href="usuario.php">Editar perfil</a>
		<br/><br/><br/>
		<b><i>EducacionIT - Proyecto Integrador 2015</i></b>
		</p>
  </div>
 </div>
<?php include("footer.inc"); ?>
