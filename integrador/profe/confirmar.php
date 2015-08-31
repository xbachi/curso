<?php
session_start();
require("funciones/db.inc");
include("globales.inc");
if(!isset($_GET['conf'])){
	header("location: $loginURL");
}
$f=fopen($_GET['conf'],"r");
$datosUsuario=fgets($f);
fclose($f);
$usuario=explode(",",$datosUsuario);
$laConexion=conectar();
$consulta="INSERT INTO usuarios (`nombre` ,`email` ,`tel` ,`direccion` ,`usuario` ,`passwd`)
VALUES ('$usuario[0]','$usuario[1]','$usuario[2]','$usuario[3]','$usuario[4]','$usuario[5]')";
$resultado = mysqli_query($laConexion, $consulta);
//Cierro la conexion
desconectar();
$_SESSION['usuario']=$usuario[0];
header("location: $indexURL");
?>
