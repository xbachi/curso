<?php require("funciones/db.inc"); // requiere es como include pero si no lo encuentra no sigue el codigo, 
include("globales.inc");
$conn = conectar(); // me conecto a la base con la funcion que esta en db.inc de conectar

session_start(); // inicio session para poder usar el usuario luego

$sql = "SELECT * FROM usuario WHERE usuario LIKE '".$_POST['userL']."' AND password='".$_POST['pwdL']."';"; // traigo todos los datos de la tabla usuario del usuario que ingrese con la contraseña 

$usuarios = mysqli_query($conn, $sql); // la variable que tiene la funcion de conectar, y la varaible que tiene la consulta a la base de datos, hago el pedido a la base de datos

desconectar(); // SIEMPRE dsp de las consultas te desconectas

$usuario = mysqli_fetch_array($usuarios, MYSQL_BOTH); // me devuelve un array con los datos de usuario con ese usser y pass

if($usuario!=NULL){
	$_SESSION['usuario'] = $usuario['nombre'];
	$_SESSION['userID'] = $usuario['ID'];
//  echo "OK";
    header("location: index.php");
}
	else{
		header("location: login.php");
	}


?>
