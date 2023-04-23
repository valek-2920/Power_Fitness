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
	<title>Power Fitness | Contactos</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
</head>

<body>

	<?php
	navClient();
	?>

	<div class="main">
		<div class="about_banner_wrap">
			<h1 class="m_11">Contacto</h1>
		</div>
		<div class="border"> </div>
		<div class="row contact">
			<div class="container">
				<div class="col-md-10">

					<div class="contact-top">
						<h3>Envianos un mensaje!</h3>
						<p class="contact_msg">En caso de que te sientas con dudas, no dudes en enviarnos un correo electronico</p>
					</div>

					<form method="post" action="post">
						<div class="to">
							<input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
						</div>
						<div class="text">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mensaje:</textarea>
							<div class="form-submit1">
								<input name="submit" type="submit" id="submit" value="Enviar tu mensaje"><br>
							</div>
						</div>
						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<?php
	footer();
	?>
</body>

</html>