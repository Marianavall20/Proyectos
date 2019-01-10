<?php
session_start();
include("../Conexion/conexion.php");

if(isset($_SESSION['usuario'])) 
{
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>
        <link rel="shortcut icon" href="../../../imagenes/perfil.jpeg">

    <link rel="stylesheet" type="text/css" href="../../../menu/fonts/style.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Inicio.css">
    <!-- Bootstrap -->
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container menu">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">         

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div>
              <div>
                <img src="../../imgadmin/otra.png" alt="..." class="img-circle profile_img">
              </div>              
            </div>
            <!-- /menu profile quick info --><br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                  <li><a href="../inicio/index.php"><i class="fa fa-home"></i> Inicio </a>                 
                  </li>                
                  <li><a href="../Contratacion/Busqueda.php"><i class="fa fa-file-pdf-o"></i>Contratación</a>               
                  </li>
                  <li><a><i class="fa fa-star"></i>Evaluación desempeño<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../Evaluacion_desempeno/evaluacion_desempeno.php">Evaluación técnica</a></li>
                      <li><a href="../Evaluacion_desempeno/evaluacion_psicologica.php">Evaluación psicológica</a></li>        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clock-o"></i> Tiempo laboral<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Registro de hora de ingreso y salida</a></li>
                      <li><a href="../tiempo_laboral/incapacidades.php">Permisos e incapacidades</a></li>                  
                    </ul>
                  </li>                 
                  <li><a href="../Compras_ventas/Grafica.php"><i class="fa fa-bar-chart-o"></i>Desempeño en compras y ventas </a>     
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->


<style type="text/css">

  body::-webkit-scrollbar {
  width: 10px;
  background: #00b19c;
}

  body::-webkit-scrollbar-thumb {
  background: rgba(255,255,255, .2);
  border-radius: 10px;
  border-right: 2px solid #021b79;
}
</style>
            <!-- Footer botones menu -->
            <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Salir" href="../../../Administrador/cerrarsesion.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

       <!-- top navigation -->
          <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <?php
                  include("../conexion/conexion.php");
                    $admin = mysqli_query($conexion, "SELECT nombres, segundo_apellido FROM empleados WHERE id=id and nombres=nombres and segundo_apellido=segundo_apellido");
                  $row=mysqli_fetch_assoc($admin);

                  ?>
                    <img src="images/img.jpg" alt=""><?php
                  echo $row['nombres'];
                  echo $row['segundo_apellido'] ;


                  ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Cuenta</a></li>
                  
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Cerrar sesión</a></li>
                  </ul>
                </li> 
              </ul>              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col inicio" role="main">
  <div class="">
     <div class="page-title">
        <div class="title_left">
                <h3>Inicio <small>Manual de usuario</small></h3>
        </div>

              <div class="cajamanual">
               <span class="iconoplay icon-play3"></span>
               <div class="manual">Encuentre los servicios disponibles en nuestro sitio web.</div>
               <div class="megall">
               <div class="gall">   
            <ul>
               <li>
                <a href=""><span class="icon-profile icon"></span><br>1.Empleados</a>
                <div id="info">
                <p class="headline">Registrar los empleados de la empresa</p>
                </div>
               </li>
               <li>
                <a href=""><span class="icon-file-word icon"></span><br>3.Contratación</a>
                <div id="tiempo">
                <p class="time">Sitematizar el proceso de contratación</p>
                  </div>
               </li>
               <li>
                <a href=""><span class="icon-stats-dots icon"></span><br>5.Evaluación </a> 
                <div id="configuracion">
                <p class="cogf">Realizar la evaluación individual de desempepeño</p>
                </div>
               </li>
               <li>
                <a href=""><span class="icon-user-plus icon"></span><br>2.Vacantes</a>
                <div id="vacantes">
                <p class="vacan2">Registrar las vacantes disponibles en cada área</p>
                </div>
               </li>
               <li>
                <a href=""><span class="icon-calendar icon"></span><br>4. Tiempo laboral</a>
                <div id="nomina">
                <p class="nomi4">Registrar el tiempo laboral de cada empleado</p>
                </div>
               </li>
               <li>
                <a href=""><span class="icon-cog icon"></span><br>6.Configuración</a>
                <div id="cuenta">
                <p class="cue6">Configurar y personalizar la cuenta</p>
                </div>
               </li>
           </ul>
       </div>
   </div>
</div>

<div class="contrato">
    <h3>CONTRATACIÓN / VACANTES</h3>
    <span class="control icon-cog"></span>    
<div class="cajacontrol">Registre mediante un control biométrico el tiempo laboral de los empleados</div>
</div>

<div class="administracion">    
    <h3>TIEMPO LABORAL</h3><div class="texto1">Registre hora de ingreso y salida de trabajadore </div>
    <div class="cajacontrol">Registre mediante un control biométrico el tiempo laboral de los empleados</div>
</div>

<div class="nomina">    
    <h3>NÓMINA</h3>       
    <h6>Tus <b>registros de nómina</b> se reflejaran en esta gráfica.</h6>
    <button type="button" class="boton"><b>INGRESA EL REGISTRO DEL SALARIO</b></button>
</div>

<div class="config">    
    <h3>CONFIGURACION</h3><div class="texto">Configura la página</div>  
    <div class="cajaconf">Configura la cuenta según el funcionamiento de tu empresa</div>
</div>

</div>
</div>
</div>
    
        <footer>
          <div class="pull-right">
            Gestión de Recursos Humanos
          </div>
          <div class="clearfix"></div>
        </footer>
       </div> 
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../../../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../../../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../../../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../../build/js/custom.min.js"></script>

  </body>
</html>
<?php
}else{
  echo '<script> window.location="../../../index.php";</script>';
}

?> 