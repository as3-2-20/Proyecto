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

$newuser = $_POST['nuevonombre'];

session_start();

$newuser1 = $_SESSION['user'];

$query = "UPDATE usuarios SET nombre= '$newuser' WHERE nombre ='$newuser1'";

$result = mysqli_query($conn, $query);

header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");