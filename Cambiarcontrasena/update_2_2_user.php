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
if (isset($_SESSION['user'])) {
    echo  "<font color='white'>"."Gracias por su cambio de password señorit@ " . $_SESSION['user']."</font>";
} else {
    header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="\php\proyecto_1\css\style.css">
  </head>
    <html>
      <body>
        <form class="sign-up" action="update_2_user.php" method="POST">
          <h1 class="sign-up-title">MODIFICAR PASSWORD DE USUARIO</h1>
          <input type="password" class="sign-up-input" placeholder="Nuevo password" autofocus name="newpassword">
          <input type="submit" value="Enviar" class="sign-up-button">
        </form> 
      </body>
    </html>
