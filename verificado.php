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

$name = $_POST['nombre'];
$pass = $_POST['password'];

$query = "SELECT password FROM usuarios WHERE nombre = '$name'";
$result = mysqli_query($conn, $query);
 
$row = mysqli_fetch_array($result, MYSQLI_NUM);
//echo $row[0];
$hash=$row[0];


if (password_verify($pass, $hash)){
  echo header('Location: '.'arduino_2.php');
}
else{
  echo header('Location: '.'login.php');
}

