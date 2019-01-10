<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Vitango</title>
<!-- Metatags buscador -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Awesome Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta  -->
<!-- css -->
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="css/font-awesome.css"> 
<!-- //css -->
<!-- fuentes -->
<link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,vietnamese" rel="stylesheet">
<!-- //fuentes -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/bailes.css" rel="stylesheet">
<!--Para version Movil-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Aquatic Life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//version movil-->
<script src="js/jquery.min.js"></script>
<!---->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>


<!---->

<link rel="stylesheet" href="ir_arriba/fonts.css">
	<link rel="stylesheet" href="ir_arriba/estilosarriba.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="ir_arriba/arriba.js"></script>

</head>
</head>
<body>
<?php if(isset($_SESSION['mensaje'])){echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);} ?>
<!--Menu-->
<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/social2">
			<div class="navigation">
				<div class="container">
					<div class="logo">
						<h1><a href="index.php"><img src="images/logo.png" alt="" width="150px" height="auto"></a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li class="active"><a data-hover="Inicio" href="index.php">Inicio</a></li>
								<li><a data-hover="Nosotros" href="about.html">Nosotros</a></li>
								<li><a data-hover="Servicios" href="servicios.html" >Servicios</a></li>
								<li><a data-hover="Galeria" href="galeria.html">Galeria</a></li>
								<li><a data-hover="Contacto" href="contacto.html">Contacto</a></li>
								<li><a data-hover="Ingresar" href="login.html">Ingresar</a></li>
							</ul>
						</nav>
							<!-- script para el menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animacion completa.
									  });
									 });
								</script>
							<!-- /script -->
					</div>
				</div>

	<div class="center-container">
		<!--//header-->
		<!--formulario-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Ingresa</h2>
			</div>
			<div class="sub-main-w3">	
				<form action="admin/controller.php" method="post">
					<input placeholder="Usuario" name="mail" type="email" required="required">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input placeholder="Contraseña" name="password" type="password" required="required">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
					<div class="rem-w3">
						<span class="check-w3"><input type="checkbox" />Recuerdame</span>
						<a href="#">Olvidaste tu contraseña?</a>
						<div class="clear"></div>
					</div>
					<input type="submit" name="btn-ini-ses" id="btn-ini-ses" value="Ingresar">
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
<!-- footer -->
				<div class="footer-agileinfo">
					<div class="container">
						<h3><img src="images/logo.png" alt="" width="300" height="auto"></h3>
						<p class="para">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</p>
						<div class="footer-grids">
							<div class="col-md-6 footer-grid">
								<div class="col-sm-2 footer-left">
									<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
								</div>
								<div class="col-sm-10 footer-right">
									<h4>Informacion</h4>
									<p>Si quieres conocer mas sobre nosotros ven y visitanos en nuestras redes sociales</p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-md-6 footer-grid">
								<div class="col-sm-2 footer-left">
									<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
								</div>
								<div class="col-sm-10 footer-right">
									<h4>Mantente informado</h4>
									<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</p>
									<form action="#" method="post">
										<input type="text" name="Your email" value="Tu correo electronico o numero de celular" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu correo electronico o numero de celular';}" required="">
										<input type="submit" value="Suscribete">
									</form>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<p class="copy-right">VITANGO 2017 | Todos los derechos reservados</a></p>
					</div>
				</div>
				<!-- //footer -->
	<!--//formulario-->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //js -->
</body>
</html>