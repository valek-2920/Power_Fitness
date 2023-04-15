<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
include_once '../Controllers/loginController.php';
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Power Fitness | Login </title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="js/jquery.min.js"></script>
</head>

<body>

	<?php
	navLogin();
	?>
	<div class="main">

		<div class="login_top" style="padding-bottom:17rem;">
			<div class="container">
			<div>
				<h1 style="color:aliceblue;">Power Fitness</h1>
			</div>
				<div class="col-md-6">
					<div class="login-page">
						<h4 class="title">Nuevos Clientes</h4>
						<p>Si se encuentra interesado en utilizar las distintas opciones que ofrecemos como gimnasio, por favor cree una cuenta al apretar el botón Crear Cuenta Nueva </p>
						<div class="button1">
							<a href="register.php"><input type="submit" value="!Crear cuenta nueva!"></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="login-page">
						<div class="login-title">
							<h4 class="title">Iniciar Sesión</h4>
							<div id="loginbox" class="loginbox">

								<form action="" method="post" id="login-form">
									<fieldset class="input">
										<p id="login-form-username">
											<label for="correoElectronico">Correo</label>
											<input id="correoElectronico" type="text" name="correoElectronico" class="inputbox" size="18" required onkeyup="HabilitarBoton();" autocomplete="off">
										</p>
										<p id="login-form-password">
											<label for="contrasenna">Contraseña</label>
											<input id="contrasenna" type="password" name="contrasenna" class="inputbox" required onkeyup="HabilitarBoton();" size="18" autocomplete="off">
										</p>
										<div class="remember">
											<p id="login-form-remember">
												<label for="modlgn_remember"><a href="forgot_password.php">Has olvidado contraseña? </a></label>
											</p>
											<input type="submit" class="button" value="Iniciar Sesión" disabled id="btnIniciarSesion" name="btnIniciarSesion">
										</div>
									</fieldset>
								</form>

							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<?php
	footerLogin();
	?>
	<script src="js/funciones/funcionesLogin.js"></script>
</body>

</html>