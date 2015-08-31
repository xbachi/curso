<?php
session_start();
include("globales.inc");
if(isset($_SESSION['usuario'])){
   header("Location: $indexURL");
}
include("head.inc"); ?>
	<title>Proyecto Integrador - Nuevo usuario</title>
<?php include("body.inc"); ?>
 <div class="contenedor">
  <div class="izquierda">
	<form action="NuevoUsuario.php" method="POST" id="NuevoUsuario" class="formu">
		<div class="etiqueta"><h2>Nuevo usuario</h2></div>
		<p>Por favor, complete el formulario para registrarse en nuestro sistema.<br/>
		Todos los campos son obligatorios.</p>
	<div class="contenedor">
	  <div class="izquierda">
		<div class="etiqueta">Nombre</div>
		<input class="campo" id="nom" name="nom" type="text" size="15" maxlenght="30" placeholder="Nombre" /><br />
	  </div>
	  <div class="derecha">
		<div class="etiqueta">Email</div>
		<input class="campo" id="email" name="email" type="email" size="15" maxlenght="50" placeholder="Email" /><br />
	  </div>
	</div>
	<div class="contenedor">
	  <div class="izquierda">
		<div class="etiqueta">Teléfono</div>
		<input class="campo" id="tel" name="tel" type="text" size="15" maxlenght="20" placeholder="Teléfono" /><br />
	  </div>
	  <div class="derecha">
		<div class="etiqueta">Dirección</div>
		<input class="campo" id="direcc" name="direcc" type="text" size="15" maxlenght="50" placeholder="Dirección" /><br />
	  </div>
	</div>
	<div class="contenedor">
	  <div class="ladoAlado">
		<div class="etiqueta">Nombre de usuario</div>
		<input class="campo" id="user" name="user" type="text" size="32" maxlenght="50" placeholder="Usuario" /><br />
	  </div>
	</div>
	<div class="contenedor">
	  <div class="izquierda">
		<div class="etiqueta">Contraseña</div>
		<input class="campo" id="pwd" name="pwd" type="password" size="15" maxlenght="50" placeholder="Clave" /><br />
	  </div>
	  <div class="derecha">
		<div class="etiqueta">Vuelva a escribirla</div>
		<input class="campo" id="pwd2" name="pwd2" type="password" size="15" maxlenght="50" placeholder="Confirmar clave" /><br />
	  </div>
	</div>
	<br/><br/><br/>
	<div class="botonForm"><input class="boton" type="submit" value="Registrar" /></div>
	</form>
	  </div>
  <div class="login">
	<form action="ingresar.php" method="POST" id="loginForm" class="formu">
		<div class="etiqueta"><h2>Iniciar sesión</h2></div>
		<p>
			<?php
			if(isset($_GET['e'])){
				echo "Los datos ingresados son incorrectos.";
			}else{
				echo "Ingrese sus datos para acceder.";
			}
			?>
		</p>
		<div class="etiqueta">Usuario</div>
		<input class="campo" type="text" name="userL" id="userL" placeholder="Nombre de usuario" /><br />
		<div class="etiqueta">Contraseña</div>
		<input class="campo" type="password" name="pwdL" id="pwdL" placeholder="***********" /><br />
		<div class="botonForm"><input class="boton" type="submit" id="btn_login" value="Ingresar" /></div>
	</form>
  </div>
 </div>
<div class="loginError" title="Error de ingreso">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
	Los datos ingresados no son correctos. Vuelva a intentarlo.</p>
</div>
<div class="errores" title="Error de registro">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
	<span id="dialogoErrores"></span></p>
</div>
<script type="text/javascript" src="css_js/registro.js"></script>
<?php include("footer.inc"); ?>
