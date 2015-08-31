<?php
$conn="";
function conectar(){
global $conn;
$server="localhost";
$db = "integrador";
$usr = "root";
$pass = "";
$conn = mysqli_connect($server, $usr, $pass,$db);
	mysqli_set_charset($conn,'utf8');
	return $conn;	
}
function desconectar(){
	global $conn;
	mysqli_close($conn);
}
?>
