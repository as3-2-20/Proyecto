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

    session_start();
if (isset($_SESSION['user'])) {
    echo  "<font color='white'>"."Gracias por su gran ayuda señorit@ " . $_SESSION['user']."</font>";
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
        <form class="sign-up" method="POST" action="arduino.php">
          <h2 class="sign-up-title">Sensor de temperatura y humedad con Arduino</h2>
            <input type="text" class="sign-up-input" placeholder="Temperatura" autofocus name="temperatura">
              <br><br>
            <input type="text" class="sign-up-input" placeholder="humedad" autofocus name="humedad">
              <br><br>
             <input type="submit" value="Enviar" class="sign-up-button">
        </form> 
    </body>
  </html>
