<html>
    
<form action="registro.php" method="POST">
    <input type="text" name="nombre" placeholder="nombre" >
    <input type="text" name="apellido" placeholder="apellido">
    <input type="email" name="email" placeholder="email" required>
    <textarea type="text"name="comentario" placeholder="comentarios"/></textarea>

    <input type="submit" value="enviarr">

</form>
<footer>
    &copy; <?php echo date("Y") ?>
</footer>
</html>
