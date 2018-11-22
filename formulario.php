<?php
//datos de nuestro mysqlhola
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
<h2>Sensor de temperatura y humedad con Arduino</h2>
<form action="arduino.php" method="POST">
  Temperatura<br>
  <input type="text" name="temperatura">
  <br><br>
  Humedad<br>
  <input type="text" name="humedad" >
  <br><br>
  <input type="submit" value="Enviar">
</form> 
</body>
</html>
