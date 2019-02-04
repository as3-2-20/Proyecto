
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="\php\proyecto_1\css\style2.css">
</head>
<body bgcolor="#E6E6FA">
	<header>
		<div class="wrapper">
			<div class="logo">Equipo graficos</div>
			<br></br>
			<div class="logo1">
<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Bienvenido señorit@ " . $_SESSION['user'] .", espero que la pagina le guste";
} else {
    header('Location: '."\php\proyecto_1\Iniciodesesion\login.php");
}
header("Refresh: 60;");
?>
			</div>
				<nav>
					<a href="\php\proyecto_1\Cerrarsesion\logout.php">cerrar sesion</a>
					<a href="\php\proyecto_1\Borrarusuario\deleteuser.php">borrar usuario</a>
					<a href="\php\proyecto_1\Cambiarcontrasena\update_2_2_user.php">cambiar contraseña</a>
					<a href="\php\proyecto_1\Cambiarnombre\update_1_1_user.php">cambiar nombre</a>
					<a href="\php\proyecto_1\Añadirinformacion\formulario.php">datos manualmente</a>
				</nav>
		</div>
 	</header>
</body>
</html>

<!DOCTYPE html>
	<html lang="en">
		<head>
    		<title>Graficos con plotly</title>
    		<link rel="stylesheet" type="text/css" href="\php\proyecto_1\librerias\bootstrap\css\bootstrap.css">
    		<script src="\php\proyecto_1\librerias\jquery-3.3.1.min.js"></script>
    		<script src="\php\proyecto_1\librerias\plotly-latest.min.js"></script>
		</head>
			<body bgcolor="#E6E6FA">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-primary">
								<div class="panel panel-heading">
									<div align="center" >ESTACION METEOROLOGICA CON ARDUINO BY JONATHAN, ANDONI E IRMA</div>
								</div>
									<div class="panel panel-body">
										<div class="row">
											<div class="col-sm-6">
												<div id="cargalineal"></div>
											</div>
												<div class="col-sm-6">
													<div id="cargalineal1"></div>
												</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>  
			</body>
	</html>

<script type="text/javascript">
	$(document).ready(function(){
	$('#cargalineal').load('lineal_editado.php');
	$('#cargalineal1').load('lineal1.php');
	});
</script>