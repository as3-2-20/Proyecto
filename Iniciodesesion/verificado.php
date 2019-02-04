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

$name = $_POST['nombre'];

$pass = $_POST['password'];

$query = "SELECT password FROM usuarios WHERE nombre = '$name'";

$result = mysqli_query($conn, $query);
 
$row = mysqli_fetch_array($result, MYSQLI_NUM);

$hash=$row[0];

if (password_verify($pass, $hash)){
	session_start();
    $_SESSION['user'] = $name;
  header('Location: '.'\php\proyecto_1\Paginaprincipal\grafico.php');
}
else{
  header('Location: '.'\php\proyecto_1\composer\twig\libreriatwig.php');
}
