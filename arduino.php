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

  //leer informacion del formulario
$temp = $_POST['temperatura'];
$hum = $_POST['humedad'];
$tiemp = date('D-j-h:i:sa');
//añadir datos desde el formulario
//ALTER TABLE informacion AUTO_INCREMENT = 1;
$query = "INSERT INTO `informacion`(`id`, `temperatura`, `humedad`, `fechayhora`) VALUES ('$id_1','$temp','$hum','$tiemp')";
//$query1 = "ALTER TABLE `informacion` AUTO_INCREMENT = 1";
//echo $query;
//jugamos con el result
$result = mysqli_query($conn, $query);
header('Location: '."arduino_2.php");