<?php require('conex/conex.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>VITANGO Compañía de Baile</title>

<meta charset="UTF-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
<!--CSS galeria-->
<!---->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/galeria.css">
<link rel="stylesheet" type="text/css" href="css/cursos.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<!--edecanes!-->
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />		
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>


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
    <link href="bailes/css/creative.min.css" rel="stylesheet">

<!--ir_arriba!-->
	<link rel="stylesheet" href="ir_arriba/fonts.css">
	<link rel="stylesheet" href="ir_arriba/estilosarriba.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="ir_arriba/arriba.js"></script>
<!--fin_ir_arriba!-->
</head>
<body>

	<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/tr">
		<div class="center-container">
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
								<li><a data-hover="Galeria" href="#galeria">Galería</a></li>
								<li><a data-hover="Cursos" href="#cursos">Cursos</a></li>
								<li><a data-hover="Noticias" href="#noticias">Noticias</a></li>
								<li><a data-hover="Nosotros" href="#nosotros">Nosotros</a></li>
								<li><a data-hover="Edecanes" href="#edecanes">Edecanes</a></li>
								<li><a data-hover="Contacto" href="#contactenos">Contáctenos</a></li>
								<li><a data-hover="Ingresar" href="login.php">Ingresar</a></li>
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
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="w3ls_banner_info">
				<div class="container">
					<h3>¡PASIÓN EN MOVIMIENTO!</h3>
					<br><br><br>
					
					<div class="more">
						<a href="#" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModal">Leer Más</a>
					</div>
					<!--Video-->
					<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									VITANGO
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<img src="images/p3.jpg" alt=" " class="img-responsive" />
										<p class="modal-text" style="font-size: 16px;">Vitango es una compañía de baile en La Ceja del Tambo (Antioquia – Colombia), con proyección artística, social y cultural en el municipio y la región. Ofrecemos servicios profesionales de danza moderna y de salón, clases grupales y personalizadas, show de baile y proyección de grupos artísticos.
Formación técnica y escénica de los principales géneros rítmicos tradicionales, contemporáneos y de salón como líneas de enseñanza, interpretación y creación. Amplia experiencia en ritmos modernos y folclóricos con grupos de proyección.
</p>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-->

	<!--Bienvenida-->
							 <section class="no-padding" id="galeria">

						 <h3 class="tittle2">Enseñamos... </h3>
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
            	<?php $query = mysqli_query($conex, 'SELECT * FROM clases'); 
            	 while( $reg = mysqli_fetch_array($query) ): ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo $reg[2]; ?>" class="portfolio-box">
                        <img src="<?php echo $reg[2]; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    <?php echo $reg[1]; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            	<?php endwhile; ?>
            </div>
        </div>
        </section>

    <!--cursos!-->
<div class="grades" id="cursos">
	<div class="container">
		<h3 class="tittle2">Nuestros Cursos</h3>
		<?php $aux = 0; $aux2 = 0; $aux3 = 0;
		$query = mysqli_query($conex, 'SELECT * FROM cursos'); 
    	 while( $reg = mysqli_fetch_array($query) ):
    	 if($aux == 0 && $aux2 == 0){ $aux2 = 1; echo '<div class="main row">'; }else if($aux == 0 && $aux2 == 1){ echo '<section class="row">'; $aux3 = 1; } $aux++; ?>
			<div class="col-md-4">
				<?php if($reg[0] != 6){ ?>
				<h3><?php echo $reg[1]; ?> <br> <?php echo $reg[2]; ?></h3>
				<p style="text-align:center"> 
					<?php echo $reg[3]; ?></br>
					<?php echo '$'.number_format($reg[4]); ?>
				</p>
				<?php }else{ ?>
				<h3><?php echo $reg[1]; ?></h3>
				<p style="text-align:center"><?php echo $reg[3]; ?>: <?php echo '$'.number_format($reg[4]); ?></br>
				8 clases mensuales: <?php echo '$'.number_format($reg[5]); ?></br>
				</p>
				<?php } ?>
			</div>
		<?php if($aux == 3){echo '</div>'; $aux = 0; }
			if($aux3 == 1 && $aux == 3){echo '</section>';}
		endwhile; ?>
	</div>
</div>
    <!--fin cursos!-->

			<!--testimonios-->
			<div class="testimonial" id="noticias" class="bacha">
				<div class="container">
					<div class="testimonial-grids">
							<div class="col-md-8 testimonial-grid">
								<h3 class="tittle">Últimos Eventos</h3>
								<div class="latest-grids">
									<?php $query = mysqli_query($conex, 'SELECT * FROM eventos ORDER BY id DESC LIMIT 2');
    	 								while( $reg = mysqli_fetch_array($query) ): ?>
										<div class="col-md-6 latest-grid">
											<img src="<?php echo $reg[4]; ?>" class="img-responsive" alt=""/>
											<h4 style="color: #ffffff"><?php echo $reg[1]; ?></h4><br>
											<h5 style="color: #ffffff"><?php echo date('d/m/Y', strtotime($reg[3])); ?></h5>
											<p class="eventos"><?php echo $reg[2]; ?></p>
										</div>
									<?php endwhile; ?>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4 testimonial-grid1">
								<h3 class="tittle">Testimonios</h3>
								<?php $query = mysqli_query($conex, 'SELECT * FROM testimonios ORDER BY id DESC LIMIT 3');
    	 							while( $reg = mysqli_fetch_array($query) ): ?>
									<div class="testimonial-info">
										<p><span>"</span><?php echo $reg[2]; ?><span>"</span></p>
										<h5><?php echo $reg[1] ?></h5>
									</div>
								<?php endwhile; ?>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--testimonios-->
				<div class="who" id="nosotros">
					<div class="container">
						<div class="who-grids">
							<div class="col-md-6 who-grid">
								<h3 class="tittle1">¿Quiénes somos?</h3>
								<h4>Reseña de Vitango </h4>
								<p class="who-text" id="Historia" style="font-size:14px;">Vitango es una compañía de baile en La Ceja del Tambo, con amplia proyección artística y cultural en el municipio y la región. Fue fundada en el 2009 con el propósito de brindar una alternativa rítmica a los habitantes de La Ceja y el Oriente antioqueño. El 18 de junio de ese año abrió sus puertas al público, bajo la dirección de Jorge y Jaime García.

Esta iniciativa sin precedentes se ganó la confianza del público con rapidez, consolidando su presencia local y regional con la participación en festivales y encuentros artísticos desde el 2010. En el 2011 se realiza el lanzamiento oficial de la Compañía como escuela de formación y proyección artística, consolidándose como una especial opción de academia y entretenimiento cultural en el Oriente. La Gran Noche de Clausura que se hace cada año se convirtió en la muestra por excelencia de los talentos formados en nuestros procesos.

Fruto de un arduo y apasionado trabajo, Vitango se ha convertido en la base de importantes procesos rítmicos que se ejecutan en la localidad. A lo largo de su historia ha compartido escenarios con los más prestigiosos embajadores de la cultura en festivales, encuentros, fiestas populares y eventos artísticos de Antioquia. 
									</p>

							</div>
							<div class="col-md-6 who-grid1">
								<h3 class="tittle1">¿Por qué elegirnos?</h3>
								</br> </br> </br>
								<div class="care">
									<div class="left-grid">
										<p>01</p>
									</div>
									<div class="right-grid">
										<p style="font-size:14px;">Somos una Compañía con amplia experiencia en la realización de espectáculos artísticos profesionales.</p></br> </br> </br>
									</div>
										<div class="clearfix"></div>
								</div>
								<div class="care">
									<div class="left-grid">
										<p>02</p>
									</div>
									<div class="right-grid">
										<p style="font-size:14px;">Nuestros procesos formativos tienen el sello de calidad y el reconocimiento de instructores de renombre nacional e internacional.</p></br> </br> </br>
									</div>
										<div class="clearfix"></div>
								</div>
								<div class="care">
									<div class="left-grid">
										<p>03</p>
									</div>
									<div class="right-grid">
										<p style="font-size:14px;">Tenemos una formación con calidez humana y visión creativa.</p>
									</div>
										<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					</div>
				</div>

  <!--edecanes!-->
<div class="fondoe" id="servicio">
<div class="edecanes" id="edecanes">
<div class="container">
    <h3 class="tittle2" class="estiloo">Acompañamiento en Shows</h3>
<div id="ca-container" class="ca-container">
			<div class="ca-wrapper">
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">
						<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-lock"></span></button>
							<h3 class="edetittle">Asesoría y acompañamiento</h3>
							<h4>
								<!--<span class="ca-quote">&ldquo;</span>!-->
							<p class="glyphicon glyphicon-ok" style="font-size:"> Asesoría para el vals y protocolo con la familia y/o amigos: $30.000 / hora</p>		</br></br>
							<p class="glyphicon glyphicon-ok" style="font-size:">	Acompañamiento en misa de 6 edecanes: $260.000.
								(Aplica descuento del 50% por la contratación de cualquiera de los paquetes adicionales.)</p>
							</h4>
						</div>
					</div>

					<div class="ca-item ca-item-2">
						<div class="ca-item-main">		
							<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-music"></span></button>
							<h3 class="edetittle">Traje formal</h3>
							<h4>
								<!--<span class="ca-quote">&ldquo;</span>!-->
								<p>(Pantalón negro, camisa negra, chaleco negro y corbata blanca) + montaje coreográfico (entrada especial y vals):</p>
								<p class="glyphicon glyphicon-ok"> 2 edecanes traje formal: $200.000</p>
								<p class="glyphicon glyphicon-ok"> 4 edecanes traje formal: $350.000</p>
								<p class="glyphicon glyphicon-ok"> 6 edecanes traje formal: $400.000</p>
							</h4>
						</div>		
					</div>

					<div class="ca-item ca-item-3">
						<div class="ca-item-main">
							<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-glass"></span></button>
							<h3 class="edetittle">Smoking</h3>
							<h4>
								<!--<span class="ca-quote">&ldquo;</span>!-->
								<p>(Pantalón negro, camisa blanca, saco negro, corbatín y bastón) + montaje coreográfico (entrada especial y vals):</p>
								<p class="glyphicon glyphicon-ok"> 2 edecanes en smoking: $250.000</p>
								<p class="glyphicon glyphicon-ok"> 4 edecanes en smoking: $480.000</p>
								<p class="glyphicon glyphicon-ok"> 6 edecanes en smoking: $600.000</p>
							</h4>	
						</div>					
					</div>
					<div class="ca-item ca-item-4">
						<div class="ca-item-main">
							<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-flag"></span></button>
							<h3 class="edetittle">Marina</h3>
							<h4>
								<!--<span class="ca-quote">&ldquo;</span>!-->
								<p>Traje de la Marina + montaje coreográfico (marcha militar y vals):</p></br>
								<p class="glyphicon glyphicon-ok"> 2 edecanes: $280.000</p>
								<p class="glyphicon glyphicon-ok"> 4 edecanes: $480.000</p>
								<p class="glyphicon glyphicon-ok"> 6 edecanes: $680.000</p>
							</h4>		
						</div>	
					</div>

					<div class="ca-item ca-item-5">
						<div class="ca-item-main">
							<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-star-empty"></span></button>
							<h3 class="edetittle">Show de sombrillas	(Agente 007)</h3></br>
							<h4>
								<!--<span class="ca-quote">&ldquo;</span>!-->
								<p>(pantalón negro, camisa blanca, saco negro, corbatín, sombrilla y escopeta) + montaje coreográfico</p>
								<p class="glyphicon glyphicon-ok"> 4 edecanes en smoking: $550.000</p>
								<p class="glyphicon glyphicon-ok"> 6 edecanes de smoking: $800.000</p>
							</h4>
						</div>
					</div>
					<div class="ca-item ca-item-6">
						<div class="ca-item-main">
							<button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-certificate"></span></button></br>
							<h3 class="edetittle">Show de baile</h3>
							<h4>
								<!--<span class="ca-quote">&ldquo;</span>!-->
								<p class="glyphicon glyphicon-ok"> 1 bailarín: $220.000</p>
								<p class="glyphicon glyphicon-ok"> 2 bailarines: $300.000</p>
								<p class="glyphicon glyphicon-ok"> 4 bailarines: $400.000</p>
								<p class="glyphicon glyphicon-ok"> 6 bailarines: $480.000</p>
							</h4>
						</div>
					</div>
			</div>
		</div>
			</div> 
		</div>

<!--			<?php $i = 0; 
//			$query = mysqli_query($conex, 'SELECT * FROM edecanes LIMIT 6');
//			while( $reg = mysqli_fetch_array($query) ): 
//				if($i == 0){echo '<div class="row">';} $i++; ?>
//			   		<div class="col-md-6">
//			   		<h3><?php echo $reg[1]; ?></h3>
//		   			<p> <?php echo $reg[2]; ?> </p>
			   		</div>
//	   		<?php if($i == 2){ echo '</div>'; }
//   		endwhile; ?>
   		<!--<div class="row">
	   		<div class="col-md-12">
	   			<strong><span>* Aplica el 5% de descuento si se adquiere un paquete de edecanes + show de baile</br>
					*Aplica 10% de descuento para clientes recurrentes de la Compañía.
	   			</span></strong>
	   		</div>
   		</div>!-->>

</div>
</div>	
</div>	

 	<!--edecanes!-->

<!--contactenos!-->	

<div id="contactenos">
<div class="container">
	<div class="main row">
        <div class="col-md-12 one-column-text">
            <h2 style="color:#031C44">¡Contáctenos! Queremos saber de usted.</h2>
            <h3>Solicita mayor información sobre nuestros programas.</h3>
        </div>
    </div>
<div class="row">
	<div class="col-md-5">
		<form class="form-basic" method="post" action="#">

		    <div class="form-group">
		    	<label for="nombre" style="color:#000">Nombre: </label>
				<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
		    </div>

		    <div class="form-group">
		    	<label for="correo" style="color:#000">Correo: </label>
				<input type="email" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico">
		    </div>

		    <div class="form-group">
		    	<label for="phone" style="color:#000">Teléfono: </label>
				<input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono">
		    </div>

		    <div class="form-group">
		    	<label for="mensaje" style="color:#000">Mensaje: </label>
		    	<textarea name="mensaje" class="form-control" placeholder="Déjanos Tu mensaje!"></textarea>
		    </div>
		    <div class="form-group">
		    	<button type="submit" class="btn btn-success">ENVIAR!</button>
		    </div>
		</form>		
	</div>
	<div class="col-md-6 col-md-offset-1">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7307956904497!2d-75.43111802773788!3d6.031636365422439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469753b2c53faf%3A0x98f58d3dabdce7d7!2sVitango+Compa%C3%B1%C3%ADa+de+Baile!5e0!3m2!1ses!2ses!4v1501116160573" width="600" height="450" frameborder="0" style="border:0; float:right;" allowfullscreen></iframe>
	</div>
</div>
</div>
</div>
<p></p>
<p></p>
<p></p>
<!--contactenos!-->

<!-- footer -->
<div class="footer-agileinfo">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-6 footer-grid">
					<div class="col-sm-2 footer-left">
					<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
				</div>
				<div class="col-sm-10 footer-right">
					<h4>Información</h4>
						<p style="color: #fff; font-family:'Open Sans', sans-serif; font-size:13px">Si quieres conocer más sobre nosotros síguenos el paso en nuestras redes sociales</p>
							<div class="social-icon">
								<a href="https://www.facebook.com/vitangobaile/	"><i class="icon"></i></a>
								<a href="https://twitter.com/vitangobaile/"><i class="icon1"></i></a>
								<a href="https://www.instagram.com/vitangobaile/"><i class="icon2"></i></a>
								<a href="https://www.youtube.com/user/vitangobaile/"><i class="icon3"></i></a>
							</div>
				</div>
			</div>
			
			<div class="col-md-6 footer-grid">
				<div class="col-sm-10 footer-right">
					<h3><img src="images/logo.png" alt="" width="300" height="auto"></h3>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<p class="copy-right">VITANGO 2017 | Todos los derechos reservados</a></p>
	</div>
</div>
<!-- //footer -->

	 <span class="ir-arriba icon-arrow-up"></span>
		

				<!-- ARCHIVOS JS NECESARIOS -->
				<script src="js/bootstrap.min.js"></script>
				<script src='js/jquery.min.js'></script>
				<script src="js/index.js"></script>
</body>
</html>
