<?php
//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="proyecto_arduino";

$conn = mysqli_connect($servername,$username,$password,$db);

if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="\php\proyecto_1\css\style.css">
  </head>
    <body>
     <form class="sign-up" action="insertuser.php" method="POST">
       <h1 class="sign-up-title">Gracias por confiar en nosotr@s</h1>
          <input type="text" class="sign-up-input" placeholder="Nombre de usuario" autofocus name="nombre">
          <input type="password" class="sign-up-input" placeholder="password" name="password">
         <input type="submit" value="Enviar" class="sign-up-button">
      </form>
    </body>
</html>

