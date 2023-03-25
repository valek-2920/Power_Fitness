<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
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
	navClient();
	?>

	<div class="main">
		<div class="register-grids">
			<div class="container">
				<form>
					<div class="register-top-grid">
						<h3>Información Personal</h3>
						<div>
							<p>Primer Nombre<label>*</label></p>
							<input type="text">
						</div>
						<div>
							<p>Primer Apellido<label>*</label></p>
							<input type="text">
						</div>
						<div>
							<p>Segundo Apellido<label>*</label></p>
							<input type="text">
						</div>
						<div>
							<p>Numero Telefonico<label>*</label></p>
							<input type="text">
						</div>
						<div>
							<p>Correo Electronico<label>*</label></p>
							<input type="text">
						</div>
						<div>
							<p>Contraseña<label>*</label></p>
							<input type="text">
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<input type="submit" value="Crear Cuenta">
				</form>
			</div>
		</div>
	</div>
	<?php
	footer();
	?>
</body>

</html>