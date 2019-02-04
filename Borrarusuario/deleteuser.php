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
  
session_start();
$user_1_delete = $_SESSION['user'];

$query = "DELETE FROM usuarios WHERE nombre = '$user_1_delete'";

$result = mysqli_query($conn, $query);

header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");