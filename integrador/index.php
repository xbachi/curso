<?php 
session_start();
if(!isset($_SESSION['usuario'])){
   header("location: login.php");
}

 ?>

<p>hola</p>
<a href="editar.php">editar</a>
<a href="logout.php">logout</a>