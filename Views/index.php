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
	<title>Power Fitness | Inicio</title>
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
	<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('php,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	<!-- grid-slider -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- //grid-slider -->
</head>

<body>
	<!-- start header_top -->
	<div class="header">
		<div class="container">
			<div class="header-text">
				<h1>El gimnasio perfecto</h1>
				<h2>La mejor opción para cumplir tus metas</h2>
			</div>
			<div class="header-arrow">
				<a href="#menu" class="class scroll"><span> </span </a>
			</div>
		</div>
	</div>
	<!-- end header_top -->

	<?php
	navClient();
	?>

	<div class="main">
		<div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				<div class="col-md-5">
					<img src="images/pic.png" class="img-responsive" alt="" />
				</div>
				<div class="col-md-7 content_left_text">
					<h3>Lorem ipsum dolor sit!</h3>
					<p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
		<!-- end content-top -->
		<div class="container">
			<div class="row content-middle">
				<!-- start content-middle -->
				<div class="col-md-4"><a href="pricing.php">
						<ul class="spinning">
							<li class="live">live <span class="m_1">Spinning</span></li>
							<li class="room">Room 2</li>
							<div class="clear"></div>
						</ul>
						<div class="view view-fifth">
							<img src="images/pic3.jpg" class="img-responsive" alt="" />
							<div class="mask">
								<div class="info">Read More</div>
							</div>
						</div>
					</a></div>
				<div class="col-md-4"><a href="pricing.php">
						<ul class="spinning">
							<li class="live">live <span class="m_1">Gym</span></li>
							<li class="room">Room 1</li>
							<div class="clear"></div>
						</ul>
						<div class="view view-fifth">
							<img src="images/pic2.jpg" class="img-responsive" alt="" />
							<div class="mask">
								<div class="info">Read More</div>
							</div>
						</div>
					</a></div>
				<div class="col-md-4"><a href="pricing.php">
						<ul class="spinning">
							<li class="live">live <span class="m_1">Pilates</span></li>
							<li class="room">Room 4</li>
							<div class="clear"></div>
						</ul>
						<div class="view view-fifth">
							<img src="images/pic1.jpg" class="img-responsive" alt="" />
							<div class="mask">
								<div class="info">Read More</div>
							</div>
						</div>
					</a></div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="row about">
		<div class="col-md-8">
			<h3 class="m_3">Galería</h3>
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