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
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="\php\proyecto_1\css\style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <form class="sign-up" action="\php\proyecto_1\Iniciodesesion\verificado.php" method="POST">
    <h1 class="sign-up-title">Bienvenido</h1>
    <input type="text" class="sign-up-input" placeholder="Nombre de usuario" autofocus name="nombre">
    <input type="password" class="sign-up-input" placeholder="password" name="password">
    <input type="submit" value="Iniciar sesion" class="sign-up-button">
  </form>
    <form class="sign-up" action="\php\proyecto_1\Añadirusuario\formulario_usuarios.php" method="POST">
    <input type="submit" value="Registrar" class="sign-up-button">
    <input type="text" value="{{ errorsesion }}" class="sign-up-button">
  </form>
</body>
</html>


