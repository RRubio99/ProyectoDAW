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

	require_once('./components/catalogoTienda.php');

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
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
  
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
									<a href="components/cerrarSesion.php">Cerrar Sesi??n</a>
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
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="home.php">Home</a></li>
						<li class="active">Checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Detalles de Cliente</h4>
                  <form class="checkout-form">
					 <?php

						echo '
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" readonly
								value="'.$_SESSION['nombre_usuario'].'">
						</div>
						<div class="form-group">
							<label for="direccion">Direcci??n</label>
							<input type="text" class="form-control" id="direccion" readonly
								value="'.$_SESSION['direccion_usuario'].'">
						</div>
						<div class="form-group" >
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" readonly
								value="'.$_SESSION['correo_usuario'].'">
						</div>
						<div class="form-group">
							<label for="user_country">Pa??s</label>
							<input type="text" class="form-control" id="user_country" readonly
								value="'.$_SESSION['pais_usuario'].'">
						</div>
						
						';

					 ?>
                     
                  </form>
               </div>
               <div class="block">
                  <h4 class="widget-title">M??todo de Pago</h4>
                  <p>Detalles de Tarjeta (Pago Seguro)</p>
                  <div class="checkout-product-details">
                     <div class="payment">
                        <div class="card-details">
                           <form  class="checkout-form">
							   <?php
									echo '
									<div class="form-group">
										<label for="tarjeta"># de tarjeta <span class="required">*</span></label>
										<input  id="tarjeta" class="form-control"   type="tel" readonly
											value="'.$_SESSION['tarjeta_usuario'].'">
									</div>
									
									';
							   ?>
                              
                              <a href="components/confirmarCompra.php" class="btn btn-main mt-20">Finalizar Compra</a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Resumen de Orden</h4>
                     
					 <?php

						$con=mysqli_connect("localhost","root","","proyectofinal");

						// Check connection
						if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						$product_id = array_column($_SESSION['carrito'],'product_id');

						$result = mysqli_query($con,"SELECT * FROM carrito c INNER JOIN productos p ON 
							c.id_producto = p.id_producto; ");
						
						$total = 0;
						
						while($row = mysqli_fetch_array($result)) {

							foreach($product_id as $id){
								if($row['id_producto']== $id){
									elementoCheckout($row['nombre_producto'], $row['precio_producto'],
										$row['fotos_producto'], $row['cantidad']);

									$totalParcial = (int)$row['precio_producto'] * (int)$row['cantidad'];
									$total = $total + (int)$totalParcial;
								}
							}
						}
						

					 echo '
						<ul class="summary-prices">
							<li>
								<span>Subtotal:</span>
								<span class="price">$'.$total.'</span>
							</li>
							<li>
								<span>Env??o:</span>
								<span>Gratis</span>
							</li>
						</ul>
						<div class="summary-total">
							<span>Total</span>
							<span>$'.$total.'</span>
						</div>

					 ';

                     
					 ?>
                     <div class="verified-icon">
                        <img src="../images/shop/verified.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   

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