<?php
session_start();
include("globales.inc");
if(!isset($_SESSION['usuario'])){
//  header("Location: $loginURL");
}
$userID=$_SESSION['userID'];
require("funciones/db.inc");
$conn=conectar();

if(isset($_POST['nombre'])){
	$urlImagen="";
	if($_FILES['adjunto']['size']<2000000){
	if($_FILES['adjunto']['type']=="image/jpeg" || $_FILES['adjunto']['type']=="image/jpg" || $_FILES['adjunto']['type']=="image/gif"){
		$urlImagen="./imagenes/".$_POST['usuario'].".jpg";
		move_uploaded_file($_FILES['adjunto']['tmp_name'],$urlImagen);
	}
}
	$sql="UPDATE usuarios SET nombre='".$_POST['nombre']."',";
	$sql.=" email='".$_POST['email']."', ";
	$sql.="imagen='".$urlImagen."' WHERE id=".$userID;
	$actualiza = mysqli_query($conn, $sql);
}

$sql="SELECT * FROM usuarios WHERE id=".$userID;
$usuarios = mysqli_query($conn, $sql);
desconectar();
$usuario=mysqli_fetch_array($usuarios, MYSQL_BOTH);

include("head.inc"); ?>
	<title>Proyecto Integrador - Editar perfil</title>
<?php include("body.inc"); ?>
 <div class="contenedor">
  <form action="usuario.php" method="post" class="formu cuerpo" enctype="multipart/form-data">
	<div class="titulo"><h2>Editar perfil - <?=$usuario['nombre'] ?></h2></div>
	<div class="contenedor">
	  <div class="izquierda">
		<div class="etiqueta">Nombre</div>
		<input class="campo" type="text" name="nombre" value="<?=$usuario['nombre'] ?>" /><br/>
		<div class="etiqueta">Email</div>
		<input class="campo" type="text" name="email" value="<?=$usuario['email'] ?>" /><br/>
		<div class="etiqueta">Telefono</div>
		<input class="campo" type="text" name="tel" value="<?=$usuario['tel'] ?>" /><br/>
		<div class="etiqueta">Direccion</div>
		<input class="campo" type="text" name="direccion" value="<?=$usuario['direccion'] ?>" /><br/>
		<div class="etiqueta">Usuario</div>
		<input class="campo" type="text" name="usuario" value="<?=$usuario['usuario'] ?>" /><br/>
		<div class="etiqueta">Password</div>
		<input class="campo" type="password" name="passwd" value="<?=$usuario['passwd'] ?>" /><br/>
	  </div>
	  <div class="derecha">
		<div class="etiqueta">Imagen de perfil</div>
		<input class="campo" type="file" name="adjunto" /><br/><br/>
		<img width="100%" height="50%" src="<?=$usuario['imagen'] ?>" />
				<br/>
		<center><input class="boton" value="Guardar" type="submit" /></center>
	  </div>
	</div>
	<br/><br/>
	<div class="finDivision"></div>
	<p>Ante cualquier duda, contáctenos.
	<br/><br/><br/>
	<b><i>EducacionIT - Proyecto Integrador 2015</i></b>
	</p>
  </form>
</div>
<?php include("footer.inc"); ?>
