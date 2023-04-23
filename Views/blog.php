<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include('utilities.php');
include_once '../Controllers/blogsController.php';

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Power Fitness | Blogs </title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
	<!-- grid-slider -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<!-- //grid-slider -->
</head>

<body>

	<?php
	navClient();
	?>

	<div class="main">
		<div class="about_banner_img"><img src="images/blog_img1.jpg" class="img-responsive" alt="" /></div>
		<div class="about_banner_wrap">
			<h1 class="m_11">Blog</h1>
		</div>
		<div class="border"> </div>
		<div class="container">
			<div class="row single-top">
				<div class="col-md-8">
						<?php
						VerDatosBlogsCliente();
						?>
				</div>
				<div class="col-md-4 ">
					<ul class="single_times">
						<h3>Horario de <span class="opening">Atención</span></h3>
						<li><i class="calender"> </i><span class="week_class">Lunes</span>
							<div class="hours_class">5:00am-9:00pm</div>
							<div class="clear"></div>
						</li>
						<li><i class="calender"> </i><span class="week_class">Martes</span>
							<div class="hours_class">5:00-9:00pm</div>
							<div class="clear"></div>
						</li>
						<li><i class="calender"> </i><span class="week_class">Miércoles</span>
							<div class="hours_class">5:00-9:00pm</div>
							<div class="clear"></div>
						</li>
						<li><i class="calender"> </i><span class="week_class">Jueves</span>
							<div class="hours_class">5:00-9:00pm</div>
							<div class="clear"></div>
						</li>
						<li><i class="calender"> </i><span class="week_class">Viernes</span>
							<div class="hours_class">5:00-9:00pm</div>
							<div class="clear"></div>
						</li>
						<li><i class="calender"> </i><span class="week_class">Sábado</span>
							<div class="hours_class">5:00-9:00pm</div>
							<div class="clear"></div>
						</li>
						<li><i class="calender"> </i><span class="week_class">Domingo</span>
							<div class="hours_class">5:00-9:00pm</div>
							<div class="clear"></div>
						</li>
					</ul>
					<div class="course_demo">
						<ul id="flexiselDemo3">
							<li><img src="images/pic4.jpg" />
								<div class="desc">
									<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
									<div class="coursel_list">
										<i class="heart1"> </i>
										<i class="like"> </i>
									</div>
									<div class="coursel_list1">
										<i class="twt"> </i>
										<i class="fb"> </i>
									</div>
									<div class="clear"></div>
								</div>
							</li>
							<li><img src="images/pic5.jpg" />
								<div class="desc">
									<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
									<div class="coursel_list">
										<i class="heart2"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="twt"> </i>
										<i class="fb"> </i>
									</div>
									<div class="clear"></div>
								</div>
							</li>
							<li><img src="images/pic4.jpg" />
								<div class="desc">
									<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
									<div class="coursel_list">
										<i class="heart2"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="twt"> </i>
										<i class="fb"> </i>
									</div>
									<div class="clear"></div>
								</div>
							</li>
							<li><img src="images/pic5.jpg" />
								<div class="desc">
									<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
									<div class="coursel_list">
										<i class="heart2"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="twt"> </i>
										<i class="fb"> </i>
									</div>
									<div class="clear"></div>
								</div>
							</li>
							<li><img src="images/pic4.jpg" />
								<div class="desc">
									<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
									<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
									<div class="coursel_list">
										<i class="heart2"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="twt"> </i>
										<i class="fb"> </i>
									</div>
									<div class="clear"></div>
								</div>
							</li>
						</ul>
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo3").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint: 480,
											visibleItems: 1
										},
										landscape: {
											changePoint: 640,
											visibleItems: 2
										},
										tablet: {
											changePoint: 768,
											visibleItems: 2
										}
									}
								});

							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>
					<h3 class="m_14">Precios Membresias</h3>
					<div class="members">
						<h4 class="m_3">25% de descuento en su primera matricula</h4>
						<p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
						<div class="btn1">
							<a href="pricing.php">Más Información</a>
						</div>
					</div>
					<h3 class="m_15">Patrocinadores</h3>
					<ul class="partner_blog">
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