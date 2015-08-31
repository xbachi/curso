<html>
<head>
	<title>Nuevo usuario</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="validar.js"></script>
	<title>Integrador</title>


</head>
<body>
<?php 
// inicio sesion, incluyo las variables globales de URL y chequeo si ya existe usuario logeado, en caso que si lo madno a index

session_start();
include("globales.inc");
if(isset($_SESSION['usuario'])){
   header("Location: index.php");
}


 ?>

<section class="registro">
	<form method="POST" action="nuevoUsuario.php">
		<label class="hola">Nombre</label><br>
		<input id="nomb" type="text" name="nombre">

		<br><br>

		<label>Email</label> <br>
		<input type="email" name="email" maxlength="50" required>

		<br><br>

		<label>Direccion</label> <br>
		<input type="text" name="dire">

		<br><br>

		<label>Telefono</label><br>
		<input type="text" name="telefono">
		<br><br>

		<label>Usuario</label><br>
		<input type="text" name="user" maxlength="30">
		<br><br>

		<label>Password</label><br>
		<input type="password" name="pass" maxlength="50">
		<br><br>

	
		<button type="submit" id="submit" name="submit">Enviar</button>
	</form>

</section>

  <section class="login">
	<form action="ingresar.php" method="POST" id="loginForm" class="formu">
		<div class="etiqueta"><h2>Iniciar sesión</h2></div>
		<p>Ingrese sus datos para acceder.</p>
		<div class="etiqueta">Usuario</div>
		<input class="campo" type="text" name="userL" id="userL" placeholder="Nombre de usuario" /><br />
		<div class="etiqueta">Contraseña</div>
		<input class="campo" type="password" name="pwdL" id="pwdL" placeholder="***********" /><br />
		<div class="botonForm"><input class="boton" type="submit" id="btn_login" value="Ingresar" /></div>
	</form>
  </section>
<div class="clear"></div>


<footer>
	<hr>
<?php 
	include("contador.php");  // incluyo el contador de visitas
?>
</footer>


<script type="text/javascript" src="registro.js"></script>

</body>
</html>