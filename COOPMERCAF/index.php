<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COOPMERCAF</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.png">
</head>

<body id="page-top">
<a name="arriba"></a>
<?php
                      @ob_start();
                      @session_start();                  
                      @$_SESSION["sesion_exito"];
?>
<?php 

include("abrir_conexion.php");

$consulta = mysqli_query($conexion,"SELECT id,departamento FROM $tabla_db4 ORDER BY departamento asc");
            ?>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">coopmercaf</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#modal3" data-toggle="modal">Más Información</a> 
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Galería de Imágenes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#footer">Contáctenos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#modal1" data-toggle="modal">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#modal2" data-toggle="modal">Regístrese</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><img class="logotipo" src="img/LOGOTIPO.png"/></h1>
                <hr>
                <p style="color:#fff; font-size:20px;"><b>COOPERATIVA MULTIACTIVA DE PRODUCCIÓN Y COMERCIALIZACIÓN DE PRODUCTOS AGROPECUARIOS DEL EJE CAFETERO</b></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Seguir Leyendo</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">QUIÉNES SOMOS:</h2>
                    <hr class="light">
                    <div style="">
                        <p class="" style="font-size:20px;">Es una empresa cooperativa de los pequeños y medianos productores agrícolas y de los sectores populares para la producción, transformación y comercialización de productos agropecuarios, que busca evitar la intermediación y la elevación de precios a los productores y rebajarlos al consumidor final.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>VISIÓN:</h2>
                <hr class="light">
                <p class="" style="font-size:20x;">Elevar la calidad de vida de los campesinos y de las entidades vinculadas directa o indirectamente a la cooperativa, asociados y consumidores de sus productos</p>
                <a class="page-scroll btn btn-default btn-xl sr-button" href="#modal3" data-toggle="modal">Más Información</a>
            </div>
        </div>
    </aside>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    COOPMERCAF
                                </div>
                                <div class="project-name">
                                    Imagen 1
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    COOPMERCAF
                                </div>
                                <div class="project-name">
                                    Imagen 2
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    COOPMERCAF
                                </div>
                                <div class="project-name">
                                    Imagen 3
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    COOPMERCAF
                                </div>
                                <div class="project-name">
                                    Imagen 4
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    COOPMERCAF
                                </div>
                                <div class="project-name">
                                    Imagen 5
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    COOPMERCAF
                                </div>
                                <div class="project-name">
                                    Imagen 6
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center">
        Imagenes tomadas de: "Freepic"
    </div>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading">¡CONTÁCTENOS!</h2>
                    <hr class="primary">
                    <p style="font-size:20px;">Si necesita información adicional sobre la empresa, sobre nuestros servicios o nuestras promociones, puede llamarnos o enviarnos un mensaje.</p>
                </div>
                <div class="col-lg- text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>310-433-63-61</p>
                </div>
                <div class="col-lg-4 text-center">
                    <a class="page-scroll" href="#modal4" data-toggle="modal"><i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>Enviar un mensaje</p></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center" id="footer" style="background:#f2f2f2; padding: 10px 0px;">
       2017 Aprendices SENA - Fundación Celia Duque de Duque &copy Todos los derechos reservados.
    </footer>


    <div class="modal fade" id="modal1">
    	<div class="modal-dialog">
    		<div class="modal-content">
    		<!-- header de la ventana -->
    			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<h2 class="modal-title text-center">Ingrese</h2>
    			</div>
    			
    			<!-- contenido de la ventana -->
    			<div class="modal-body">
    					<div class="text-center">
                        <form role="form" method="post" action="user/pages/index.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="contrasena" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recuerdame
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar" name="inicio">
                            </fieldset>
                        </form>
                        <?php 

                        
                        if ($_SESSION['sesion_exito']==2) {
                            echo "
                                    <script>
                                    alert('Los datos son obligatorios')
                                    </script>
                                ";
                        }elseif ($_SESSION['sesion_exito']==3) {
                            echo "
                                    <script>
                                    alert('Datos incorrectos')
                                    </script>
                                ";
                        }

                        $_SESSION['sesion_exito']=0;
                     ?>
                    </div>
                </div>
    			<!-- footer de la ventana -->
    			<div class="modal-footer">
    				<div class="col-md-12 text-center">
    					<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="modal fade" id="modal2">
    	<div class="modal-dialog">
    		<div class="modal-content">
    		<!-- header de la ventana -->
    			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<h2 class="modal-title text-center">Registrese</h2>
    			</div>
    			
    			<!-- contenido de la ventana -->
    			<div class="modal-body">
    					<div class="text-center">
                    <div class="service-box">
                        
                        <form action="index.php" method="POST" role="form" name="form1">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" maxlength="45" placeholder="Numero documento de identidad" name="doc" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="45" placeholder="Nombres" name="nombre" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="45" placeholder="Apellidos" name="apellidos" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                <select class="form-control" id=""  name="departamento" onchange="from(document.form1.departamento.value,'midiv','municipio.php')">
                                    <option value="">Seleccione Departamento...</option>
                                    <?php 
                                        while($fila = mysqli_fetch_array($consulta))
                                            {
                                                echo "<option value='".$fila['0']."'> ".$fila['1']."</option>";
                                            }
                                     ?>
                                </select>
                                </div>
                                <div id="midiv">
                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="45" placeholder="dirección" name="direccion" type="e-mail" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="45" placeholder="Correo" name="correo" type="e-mail" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="45" placeholder="Telefono" name="telefono" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="12" placeholder="Usuario" name="usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" maxlength="12" placeholder="Contraseña" name="contrasena" type="password" value="">
                                </div>
                                
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="REGISTRARSE" name="enviar" >
                            </fieldset>
                            <?php 
                                if (isset($_POST['enviar'])) {
                                   $doc = $_POST['doc'];
                                   $nombre = $_POST['nombre'];
                                   $apellidos = $_POST['apellidos'];
                                   $departamento = $_POST['departamento'];
                                   $municipio = $_POST['municipio'];
                                   $direccion = $_POST['direccion'];
                                   $correo = $_POST['correo'];
                                   $telefono = $_POST['telefono'];
                                   $usuario = $_POST['usuario'];
                                   $contrasena = $_POST['contrasena'];

mysqli_query($conexion, "INSERT INTO $tabla_db11(nombres,apellidos,documento,correo,telefono,departamentos_id,municipios_id,direccion,tipo,usuario,contrasena) values('$nombre','$apellidos','$doc','$correo','$telefono','$departamento','$municipio','$direccion','B','$usuario','$contrasena')");
                            
                            echo "
                                <script>
                                    alert('Su registro ha sido exitoso');
                                </script>
                            ";
                                }
                             ?>
                        </form>
                    </div>
                </div>
    			<!-- footer de la ventana -->
    			<div class="modal-footer">
    				<div class="col-md-12 text-center">
    					<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

    <div class="modal fade" id="modal4">
    	<div class="modal-dialog">
    		<div class="modal-content">
    		<!-- header de la ventana -->
    			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<h2 class="modal-title text-center">¡CONTÁCTENOS!...</h2>
    			</div>
    			
    			<!-- contenido de la ventana -->
    			<div class="modal-body">
                    <form role="form" action="index.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                    <input id="nombres" class="form-control" placeholder="Nombres" name="nombre" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                    <input id="apellidos" class="form-control" placeholder="Apellidos" name="apellidos" type="text" value="" required="required">
                                </div>
                                <div class="form-group">
                                <label for="celular">Telefono celular:</label>
                                    <input id="celular" class="form-control" placeholder="Telefono Celular" name="cel" type="text" value="" required="required">
                                </div>
                                <div class="form-group">
                                <label for="correo">Correo:</label>
                                    <input id="correo" class="form-control" placeholder="Correo" name="correo" type="e-mail" value="" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea style="min-height:125px" class="form-control" id="mensaje" placeholder="Escribe tu mensaje:" name="mensaje" required="required"></textarea>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit"name="email" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                            <?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "info@coopmercaf.org";
$email_subject = "Desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['apellidos']) ||
!isset($_POST['correo']) ||
!isset($_POST['cel']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Apellido: " . $_POST['apellidos'] . "\n";
$email_message .= "E-mail: " . $_POST['correo'] . "\n";
$email_message .= "Teléfono: " . $_POST['cel'] . "\n";
$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "

    <script>
    alert('Mensaje Enviado Correctamente');
    </script>

";
}
?>
                        </form>
                </div>
    			<!-- footer de la ventana -->
    			<div class="modal-footer">
    				<div class="col-md-12 text-center">
    					<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="modal fade" id="modal3">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- header de la ventana -->
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title text-center">MAS INFORMACIÓN</h2>
                </div>
                
                <!-- contenido de la ventana -->
                <div class="modal-body">
                    <div class="">
                        <div class="vertical-menu text-center">
                            <a href="general.html">Objetivo General</a>
                            <a href="especificos.html">Objetivos específicos</a>
                            <a href="proyecto.html">Proyecto productivo</a>
                            <a href="organigrama.html">Organigrama</a>
                            <a target="_blank" href="otros/estatutos.pdf">Estatutos</a>
                        </div>
                    </div>
                </div>
                <!-- footer de la ventana -->
                <div class="modal-footer">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    
    <!-- Other Javascript -->
    <script src="js/index.js"></script>
    <script type="text/javascript" language="javascript" src="js/ajax.js"></script>

</body>

</html>
