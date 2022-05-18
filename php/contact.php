<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<?php

if(session_status() !== PHP_SESSION_ACTIVE) session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Garnachas | La Navidad</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>55-49-63-31-64</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="home.php">
						<!-- replace logo here -->
						<img src="../images/rodolfo2.png" alt="Rodolfo" width="300px" height="100px"> 
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a href="cart.php"><i class="tf-ion-android-cart"></i>Carrito
							<?php

								if(isset($_SESSION['id_usuario'])){
									if(isset($_SESSION['carrito'])){
										$count = count($_SESSION['carrito']);
										
										echo '<span id="cart_count" class="text-success bg-light">'.$count.'</span>';
									}else{
										echo '<span id="cart_count" class="text-success bg-light">0</span>';
									}
								}
								

							?>
						</a>
					</li><!-- / Cart -->

					<?php
						if(isset($_SESSION['correo_usuario']) && isset($_SESSION['contrasena_usuario'])){
							$paginas = '
								<!-- Usuario -->
								<li class="dropdown search dropdown-slide">
									<a href="profile-details.php">Perfil</a>
								</li><!-- / Login -->
			
								<!-- Registro -->
								<li class="dropdown search dropdown-slide">
									<a href="components/cerrarSesion.php">Cerrar Sesión</a>
								</li><!-- / Registro -->
							';
							echo $paginas;
						
						}else{
							$paginas = '
								<!-- Login -->
								<li class="dropdown search dropdown-slide">
									<a href="login.php">Login</a>
								</li><!-- / Login -->
			
								<!-- Registro -->
								<li class="dropdown search dropdown-slide">
									<a href="signin.php">Registro</a>
								</li><!-- / Registro -->
							';
							echo $paginas;
						}
					?>

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="home.php">Home</a>
					</li><!-- / Home -->

					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Tienda <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-12 col-md-4 mb-sm-3">
									<ul>
										<li class="dropdown-header">Secciones</li>
										<li role="separator" class="divider"></li>
										<li><a href="shop.php">Tienda</a></li>
										<li><a href="cart.php">Carrito</a></li>
									</ul>
								</div>

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->

					<!-- Contacto -->
					<li class="dropdown ">
					<a href="contact.php">Contacto</a>
					</li><!-- / Contacto -->

				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Contacto</h1>
					<ol class="breadcrumb">
						<li><a href="home.php">Home</a></li>
						<li class="active">Contacto</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="col-md-6 ">
					<h2 class="mt-40">Acerca</h2>
					<BLOCKQUOTE>
						La Navidad: Local de Antojitos Mexicanos.
					</BLOCKQUOTE>
					<BLOCKQUOTE>
						Creada por Rodolfo Rubio Anguiano, para la materia de Desarrollo de Aplicaciones Web. 
					</BLOCKQUOTE>
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map">
						<div id="map"></div>
					</div>
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Universidad Anáhuac México Norte, Huixquilucan, México</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Teléfono: 55-49-63-31-64</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: rodolfo.rubioan@anahuac.mx</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="https://www.facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="https://www.twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-googleplus-outline"></i></a></li>
							<li><a href="https://themefisher.com/"><i class="tf-ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
	
  
<section class="team-members ">
	<div class="container">
		<div class="row">
			<div class="title"><h2>Miembros del Equipo</h2></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="../images/team/reno.png" width="220px" height="220px">
					<h4>Rodolfo el Reno</h4>
					<p>Reno</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="../images/team/kush.jpg" width="220px" height="220px">
					<h4>Kush</h4>
					<p>Motivador principal</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="../images/team/pato.jpg" width="220px" height="220px">
					<h4>Pato con casco</h4>
					<p>Es un pato con casco</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="../images/team/twinky.jpg" width="220px" height="220px">
					<h4>Twinky</h4>
					<p>Así se llama</p>
				</div>
			</div>
		</div>
	</div>
</section>




<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.php">CONTACTO</a>
					</li>
					<li>
						<a href="shop.php">TIENDA</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="../plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../js/script.js"></script>
    


  </body>
  </html>