<?php require("funciones/db.inc");
$conn=conectar();session_start();
$sql="SELECT * FROM usuarios WHERE usuario LIKE '".$_POST['userL']."' AND passwd='".$_POST['pwdL']."';";
$usuarios = mysqli_query($conn, $sql);
desconectar();
$usuario=mysqli_fetch_array($usuarios, MYSQL_BOTH);
if($usuario!=NULL){
	$_SESSION['usuario']=$usuario['nombre'];
	$_SESSION['userID']=$usuario['id'];
	//$_SESSION['role']=$usuario['role']; // aca guarda en sesion el rol para identificar a los admin en las paginas de administracion
//	echo "OK";
	header("location: index.php");
}else{
	header("location: registro.php?e=UC");
}
?>
