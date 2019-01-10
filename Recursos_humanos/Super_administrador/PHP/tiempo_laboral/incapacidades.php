
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

    <title>Calendario</title>
     <link rel="shortcut icon" href="../../../imagenes/perfil.jpeg">
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
<style type="text/css">
  .body{
      width: 130%;
        }
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

  <body class="nav-md">
  
    <div class="container body" 
    style="margin-right: 100px;
    margin-left: -15px;
    padding-left: 15px;
    padding-right: 15px;">

      <div class="main_container" style="width:1330px;">
        <div class="col-md-3 left_col" style="height: 850px;">
          <div class="left_col scroll-view">
          

            <div class="clearfix" ></div>

            <!-- menu profile quick info -->
            <div>
              <div>
                <img src="../../imgadmin/otra.png" alt="..." class="img-circle profile_img">
              </div>              
            </div>
            <!-- /menu profile quick info -->

            <br>

            
               <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                  <li><a href="../inicio/index.php"><i class="fa fa-home"></i> Inicio </a>                 
                  </li>
                  <li><a href="../Empleados/index.php"><i class="fa fa-edit"></i> Registro de empleados </a>                  
                  </li>
                  <li><a href="../Disponibles/Registro.php"><i class="fa fa-plus-square"></i> Disponibles </a>                  
                  </li>
                  <li><a href="../Contratacion/Contratacion.php"><i class="fa fa-file-pdf-o"></i>Contratación</a>           
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Evaluación desempeño<span class="fa fa-chevron-down"></span></a>
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
                  <li><a href="../Compras_ventas/Grafica.php"><i class="fa fa-clone"></i>Desempeño en compras y ventas </a>        
                  </li>
                </ul>
              </div>            

            </div>
            <!-- /sidebar menu -->

            <!-- Botones footer menu -->
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
                    $admin = mysqli_query($conexion, "SELECT nombres, segundo_apellido FROM administradores WHERE id=id and nombres=nombres and segundo_apellido=segundo_apellido");
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
      
        <div class="right_col" role="main" style="padding-right:0px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendario</h3>
              </div>
              <?php
              include("../../../calendario/index.php");
              ?>    
            </div>
           </div>
            
        </div>
        <!-- /page content -->
        <footer>
          <div class="pull-right">
            Gestión de recursos humanos
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- footer content -->
   
      </div>
    </div>

    <!-- Custom Theme Scripts -->
    <script src="../../../build/js/custom.min.js"></script>

  </body>
</html>
<?php
}else{
  echo '<script> window.location="../../../index.php";</script>';
}

?> 