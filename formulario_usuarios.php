<?php
//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="proyecto_arduino";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
//echo "Conexion creada";
?>
<!DOCTYPE html>
<html>
<body>
<h2>Bienvenido</h2>
<form action="insertuser.php" method="POST">
  Nombre<br>
  <input type="text" name="nombre">
  <br><br>
  password<br>
  <input type="password" name="password" >
  <br><br>
  <input type="submit" value="Enviar">
</form> 
</body>
</html>