


<html>
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  

 
<link rel="stylesheet" type="text/css" href="Index/css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" type="text/css" href="Index/css/reset.css">
    <link rel="stylesheet" type="text/css" href="Index/css/main.css">
    <link rel="stylesheet" type="text/css" href="Index/css/galeria.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" type="text/css" href="Index/css/filosofia.css">
    <link rel="stylesheet" href="Index/css/galeria.css">
    <link rel="stylesheet" type="text/css" href="Index/css/acercade.css">
    <link rel="stylesheet" type="text/css" href="Index/css/servicios.css">
    <link rel="stylesheet" type="text/css" href="Index/fonts/style.css">
      <link href="Index/css/bootstraptestimonios.css" rel="stylesheet" type="text/css">
  <link href="Index/css/styletestimonios.css" rel="stylesheet" type="text/css">
  <link href="Index/css/animatetestimonios.css" rel="stylesheet" type="text/css">

    <style type="text/css">
   /*footer*/
   footer.nb-footer {
background: #222;
border-top: 4px solid #00b19c; }
footer.nb-footer .about {
margin: 0 auto;
margin-top: 40px;
max-width: 1170px;
text-align: center; }
footer.nb-footer .about p {
font-size: 13px;
color: #999;
margin-top: 30px; }
footer.nb-footer .about .social-media {
margin-top: 15px; }
footer.nb-footer .about .social-media ul li a {
display: inline-block;
width: 45px;
height: 45px;
line-height: 45px;
border-radius: 50%;
font-size: 25px;
color: #00b19c;
border: 1px solid rgba(255, 255, 255, 0.3);
 }
footer.nb-footer .about .social-media ul li a:hover {
background: #00b19c;
color: #fff;
border-color: #00b19c; }
footer.nb-footer .footer-info-single {
margin-top: 30px; }
footer.nb-footer .footer-info-single .title {
color: #aaa;
text-transform: uppercase;
font-size: 16px;
border-left: 4px solid #00b19c;
padding-left: 5px; }
footer.nb-footer .footer-info-single ul li a {
display: block;
color: #aaa;
padding: 2px 0; }
footer.nb-footer .footer-info-single ul li a:hover {
color: #00b19c; }
footer.nb-footer .footer-info-single p {
font-size: 13px;
line-height: 20px;
color: #aaa; }
footer.nb-footer .copyright {
margin-top: 15px;
background: #111;
padding: 7px 0;
color: #999; }
footer.nb-footer .copyright p {
margin: 0;
padding: 0; }
.redes{
  padding-top:8px;
}
    </style>


   
  
</head>
<body>
    <!-- scroll -->
  <script src="Index/lib/smooth-scroll.min.js"></script>
  <script>
  var scroll = new SmoothScroll('a[href*="#"]', {
  // Selectors
  ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
  header: null, // Selector for fixed headers (must be a valid CSS selector)

  // Speed & Easing
  speed: 1000, // Integer. How fast to complete the scroll in milliseconds
  offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
  easing: 'easeInOutCubic', // Easing pattern to use
  customEasing: function (time) {

    // Function. Custom easing pattern
    // If this is set to anything other than null, will override the easing option above

    // return <your formulate with time as a multiplier>

    // Example: easeInOut Quad
    return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

  },

  // Callback API
  before: function (anchor, toggle) {}, // Callback to run before scroll
  after: function (anchor, toggle) {} // Callback to run after scroll
});
  </script>
<div id="sec"></div>
  <div id="header">
    
        <img src="Index/images/logo.png" width="220px" height="100px">
        <div id="main_menu">
        <div class="menu-fixed">
            <ul >
<li class="first_list"><a data-scroll href="#sec" class="main_menu_first ">Inicio</a></li>
                <li class="first_list "><a data-scroll href="#Nosotros" class="main_menu_first">nosotros</a></li>
                <li class="first_list "><a data-scroll href="#Acerca_de" class="main_menu_first">acerca de</a></li>
                <li class="first_list "><a data-scroll href="#Servicios" class="main_menu_first">servicios</a></li>
                <li class="first_list "><a data-scroll href="#Testimonios" class="main_menu_first">testimonios</a></li>
            </ul>
            </div>
    </div> <!-- END #main_menu -->

  </div><!-- END .<header></header> -->
        
<?php
include("Index/PHP/galeria.php")
?>
<!-- Section nosostros -->
<div id="Nosotros"></div>
<?php
include("Index/PHP/filosofia.php");
?>
<!-- Finaliza section nosotros -->      
        
<!-- Section servicios --> 
<div id="Acerca_de"></div>
<?php
include("Index/PHP/acercade.php");
?>
<div id="Servicios"></div>
<?php
include("Index/PHP/servicios.php");
?> 
<?php
include("Index/PHP/parallax.php");
?> 
<!-- testimonios -->
<div id="Testimonios"></div>

<?php
include("Index/PHP/testimonios.php");
?>
<!-- Finaliza servicios -->
<footer class="nb-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about">
	<img src="images/logo.png" class="img-responsive center-block" alt="">
	<p>Administrar Recursos Humanos significa conquistar y mantener a las personas y miembros de una organización, en un ambiente de trabajo armonioso, positivo y favorable. Representa todas aquellas cosas que hacen que el personal permanezca en la organización.</p>

	<div class="social-media">
		<ul class="list-inline">
			<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook redes"></i></a></li>
			<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter redes"></i></a></li>
			<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-google-plus redes"></i></a></li>
			<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-linkedin redes"></i></a></li>
		</ul>
	</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Nuestra empresa</h2>
	<ul class="list-unstyled">
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Automatizar procesos</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Vinculación empresarial</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Sistematización de procesos</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Procesamiento de datos</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Contacto</h2>
	<ul class="list-unstyled">
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Recursoshumanos@gmail.com</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Abejoral, Antioquia</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>3125684575</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>S.A.S</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Compañia</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Servicios</h2>
	<ul class="list-unstyled">
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Gestión empresarial</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Privacidad</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Interacción</a></li>
		<li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i>Sistematización</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Recursos Humanos</h2>
	<p>La Gestión de Recursos Humanos consiste en planear, organizar y desarrollar todo lo concerniente a promover el desempeño eficiente del personal que compone una estructura</p>
	
</div>
</div>
</div>
</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p>Copyright © 2018. Gestión de Recursos Humanos.</p>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</footer>

</body>
</html>
