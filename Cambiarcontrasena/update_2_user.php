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

$newpass = $_POST['newpassword'];

$hash = password_hash($newpass, PASSWORD_DEFAULT);

session_start();

$newpass1 = $_SESSION['user'];

$query = "UPDATE usuarios SET password= '$hash' WHERE nombre ='$newpass1'";

$result = mysqli_query($conn, $query);

header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");