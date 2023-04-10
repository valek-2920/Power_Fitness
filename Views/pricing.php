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
	<title>Free Gym Website Template | Pricing :: w3layouts</title>
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
	<!-- grid-slider -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- //grid-slider -->
	<!-- Add fancyBox main JS and CSS files -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>

</head>

<body>

	<?php
	navClient();
	?>

	<div class="main">
		<div class="about_banner_img"><img src="images/price.jpg" class="img-responsive" alt="" /></div>
		<div class="about_banner_wrap">
			<h1 class="m_11">Precios</h1>
		</div>
		<div class="border"> </div>
		<div class="container">
			<div class="row price_plans">
				<h3 class="m_2">Mensualidades y planes</h3>
				<div class="price_plans_box">
					<div class="col-md-3">
						<ul class="price1">
							<h4>Primer día de entrenamiento</h4>
							<h3>Gratis</h3>
							<ul class="price_list">
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Acceso al los equipos de ejercicio</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">1 bebida de proteina por visita</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Rutina semanal </a></p>
							
								<a class="popup-with-zoom-anim" href="#small-dialog">
								<li class="price_but">Pagar ahora</li>
								</a>
								<!-----pop-up-grid---->
								<div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
										<div class="payment-online-form-left">
											<form>
												<h4><span class="shipping"> </span>Shipping</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Frist Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<div class="clear"> </div>
												</ul>
												<div class="clear"> </div>
												<ul class="payment-type">
													<h4><span class="payment"> </span> Payments</h4>
													<li>
														<span class="col_checkbox">
															<input id="3" class="css-checkbox1" type="checkbox">
															<label for="3" name="demo_lbl_1" class="css-label1"> </label>
															<a class="visa" href="#"> </a>
														</span>
													</li>
													<li>
														<span class="col_checkbox">
															<input id="4" class="css-checkbox2" type="checkbox">
															<label for="4" name="demo_lbl_2" class="css-label2"> </label>
															<a class="paypal" href="#"> </a>
														</span>
													</li>
													<div class="clear"> </div>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
													<div class="clear"> </div>
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
													<div class="clear"> </div>
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Cancel"></li>
													<li><input type="submit" value="Process order"></li>
												</ul>
												<div class="clear"> </div>
											</form>
										</div>
									</div>
								</div>
								<!-----pop-up-grid---->
								<div class="clear"></div>
							</ul>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="price1">
							<h4>Membresía de tres meses</h4>
							<h2 class="m_25">$33</h2>
							<ul class="price_list">
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Acceso al los equipos de ejercicio</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">1 bebida de proteina por visita</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">rutina semanal</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Recomendacion calorica</a></p>
								
								<a class="popup-with-zoom-anim" href="#small-dialog">
								<li class="price_but">Pagar ahora</li>
								</a>
								<div class="clear"></div>
							</ul>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="price1">
							<h4>Membresía de seis meses</h4>
							<h2 class="m_25">$59</h2>
							<ul class="price_list">
							    <p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Acceso al los equipos de ejercicio</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">1 bebida de proteina por visita</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">rutina semanal</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Recomendacion calorica</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Servicio de nutricionista </a></p>
								<a class="popup-with-zoom-anim" href="#small-dialog">
								<li class="price_but">Pagar ahora</li>
								</a>
								<div class="clear"></div>
							</ul>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="price1">
							<h4>Membresía de un año</h4>
							<h2 class="m_25">$120<small>.00</small></h2>
							<ul class="price_list">
							<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Acceso al los equipos de ejercicio</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">1 bebida de proteina por visita</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">rutina semanal</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Recomendacion calorica</a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Servicio de nutricionista </a></p>
								<p><img src="images/tick.png" alt="" align="middle" width="16" height="14" /><a href="#">Entrenador presonal 2 veses por semana</a></p>
								<a class="popup-with-zoom-anim" href="#small-dialog">
									<li class="price_but">Pagar ahora</li>
								</a>
								<div class="clear"></div>
							</ul>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<ul class="price_question">
			<div class="container">
				<li class="question_left">
					<h4>Tienes dudas?</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
				</li>
				<li class="question_right">(+506) 8888-8888</li>
				<div class="clear"></div>
			</div>
		</ul>
		<div class="container">
			<div class="row pricing">
				<div class="col-md-12">
					<h3 class="m_2">Todas las clases</h3>
					<div class="classes">
						<div class="cardio_list">
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Cardio Fitness</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Spinning</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Pilates</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Boxing</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="cardio_list1">
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Aerobics</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Kik Boxing</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>CrossFit</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="cardio_sublist">
								<ul class="cardio">
									<li><i class="clock"> </i><span>Yoga</span></li>
								</ul>
								<div class="social-media">
									<ul>
										<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="timetable"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="Send to"><a href="#" target="_blank"> </a> </span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="like it"><a href="#" target="_blank"> </a></span></li>
										<li><span class="simptip-position-bottom simptip-movable" data-tooltip="share"><a href="#" target="_blank"> </a></span></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="about_gallery">
				<div class="container">
					<div class="col-md-8">
						<h3 class="m_2">Galería</h3>
						<div id="ca-container" class="ca-container">
							<div class="ca-wrapper">
								<div class="ca-item ca-item-1">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon1"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-2">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon2"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-3">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon3"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-4">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon4"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-5">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon5"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-6">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon6"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-7">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon7"> </div>
									</div>
								</div>
								<div class="ca-item ca-item-8">
									<div class="ca-item-main">
										<div class="ca-icon"> </div>
										<div class="ca-icon"> </div>
									</div>
								</div>
							</div>
						</div>
						<script type="text/javascript">
							$('#ca-container').contentcarousel();
						</script>
					</div>
					<div class="col-md-4">
						<h3 class="m_2">Patrocinadores</h3>
						<ul class="partner">
							<li><img src="images/p6.png" alt="" /></li>
							<li><img src="images/p5.png" alt="" /></li>
							<li><img src="images/p4.png" alt="" /></li>
							<li><img src="images/p3.png" alt="" /></li>
							<li><img src="images/p2.png" alt="" /></li>
							<li><img src="images/p1.png" alt="" /></li>
							<div class="clear"></div>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<?php
		footer();
		?>
</body>

</html>