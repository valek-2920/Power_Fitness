<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
include_once '../Controllers/usuariosController.php';
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Free Gym Website Template | Register :: w3layouts</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
</head>

<body>

	<?php
	navLogin();
	?>

	<div class="main">
		<div class="register-grids">
			<div class="container">
				<form action="" method="post">
					<div class="register-top-grid">
						<h2>Información Personal</h2>
						<div>
							<p>Primer Nombre<label>*</label></p>
							<input type="text" id="primerNombre" name="primerNombre" required>
						</div>
						<div>
							<p>Primer Apellido<label>*</label></p>
							<input type="text" id="primerApellido" name="primerApellido" required>
						</div>
						<div>
							<p>Segundo Apellido<label>*</label></p>
							<input type="text" id="segundoApellido" name="segundoApellido" required>
						</div>
						<div>
							<p>Genero<label>*</label></p>
							<select id="genero" name="genero" required>
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
						</div>
						<div>
							<p>Celular<label>*</label></p>
							<input type="number" id="celular" name="celular" required>
						</div>
						<div>
							<p>Provincia<label>*</label></p>
							<select id="provincia" name="provincia" class="form-control" required>
								<option value="San José">San José</option>
								<option value="Alajuela">Alajuela</option>
								<option value="Cartago">Cartago</option>
								<option value="Heredia">Heredia</option>
								<option value="Guanacaste">Guanacaste</option>
								<option value="Puntarenas">Puntarenas</option>
								<option value="Limón">Limón</option>
							</select>
						</div>
						<div>
							<p>Ciudad<label>*</label></p>
							<input type="text" id="ciudad" name="ciudad" required class="form-control ">
						</div>
						<div>
							<p>Dirección Exacta<label>*</label></p>
							<input type="text" id="direccionExacta" name="direccionExacta" required class="form-control">
						</div>
						<div>
							<p>Fecha Nacimiento<label>*</label></p>
							<input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
						</div>
						<div>
							<p>Correo Electronico<label>*</label></p>
							<input type="email" id="correoElectronico" name="correoElectronico" required onkeyup="HabilitarBoton();">
						</div>
						<div>
							<p>Contraseña<label>*</label></p>
							<input type="password" id="contrasenna" name="contrasenna" required onkeyup="HabilitarBoton();">
						</div>
						<div>
							<p>Confirmar Contraseña<label>*</label></p>
							<input type="password" id="confirmarContrasenna" name="confirmarContrasenna" required onkeyup="HabilitarBoton();">
						</div>
					</div>
					<div class="clear"> </div>
					<input type="submit" value="Crear Cuenta" id="btnRegistrarCuentaCliente" name="btnRegistrarCuentaCliente" disabled>
				</form>
			</div>
		</div>
	</div>
	<?php
	footerLogin();
	?>
	<script src="js/funciones/funcionesRegistro.js"></script>
</body>

</html>