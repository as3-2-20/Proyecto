<?php
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="proyecto_arduino";

$conn = mysqli_connect($servername,$username,$password,$db);

if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }

$user_1 = $_POST['nombre'];

$pass =$_POST['password'];

$hash = password_hash($pass, PASSWORD_DEFAULT);

$query = "INSERT INTO `usuarios`(`nombre`, `password`) VALUES ('$user_1','$hash')";

$result = mysqli_query($conn, $query);

header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");