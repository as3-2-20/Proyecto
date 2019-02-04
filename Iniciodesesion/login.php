<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="\php\proyecto_1\css\style.css">
  </head>
    <body>
      <form class="sign-up" action="verificado.php" method="POST">
        <h1 class="sign-up-title">Bienvenido</h1>
        <input type="text" class="sign-up-input" placeholder="Nombre de usuario" autofocus name="nombre">
        <input type="password" class="sign-up-input" placeholder="password" name="password">
        <input type="submit" value="Iniciar sesion" class="sign-up-button">
      </form>
        <form class="sign-up" action="\php\proyecto_1\Añadirusuario\formulario_usuarios.php" method="POST">
          <input type="submit" value="Registrar" class="sign-up-button">
        </form>
    </body>
</html>
