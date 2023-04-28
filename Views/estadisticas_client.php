<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
include_once '../Controllers/estadisticasController.php';
?>

<DOCTYPE HTML>
	<html>

	<head>
		<title>Power Fitness | Actualizar Datos</title>
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
		navClient();
		?>

		<div class="main">
			<div class="register-grids" style="margin-top: 6rem;">
				<div class="container">
					<div class="register-top-grid">
						<h2>Información Estadísticas</h2>
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Altura</th>
									<th>Peso</th>
									<th>Fecha</th>
								</tr>
							</thead>
							<tbody>
								<?php
								VerDatosEstadisticasUsuarioCliente();
								?>
							</tbody>
						</table>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<div style="margin-top: 11rem;"></div>
		<?php
		footerLogin();
		?>
	</body>

	</html>