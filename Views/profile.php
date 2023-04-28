<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
include '../Controllers/usuariosController.php';
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Power Fitness | Perfil</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/profile_style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
</head>

<body>

	<?php
	navClient();
	?>
	<div class="padding">
		<div class="col-md-8">
			<div class="card-body little-profile text-center">
				<?php
				mostrarFotoPerfil();
				?>
				<h3 class="m-b-0"><?php echo $_SESSION["NombreUsuario"]; ?></h3>
				<div class="row text-center m-t-20">
					<div class="col-lg-4 col-md-4 m-t-20">
						<a href="update_user_client.php?q=<?php echo $_SESSION["UsuarioId"] ?>">Actualizar Datos Personales</a>
					</div>
					<div class="col-lg-4 col-md-4 m-t-20">
						<a href="estadisticas_client.php">Ver Estadística</a>
					</div>
					<div class="col-lg-4 col-md-4 m-t-20">
						<a href="#">Ver Datos Membresía</a>
					</div>
					<div class="col-lg-4 col-md-4 m-t-20">
						<a href="forgot_password.php">Recuperar Contraseña</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	footer();
	?>
</body>

</html>