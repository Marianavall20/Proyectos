
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empleados</title>
    <link rel="stylesheet" type="text/css" href="../../../menu/fonts/style.css">
<link rel="stylesheet" type="text/css" href="../../CSS/Inicio.css">
    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">

      
    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container menu">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
               <div >
              <div >
                <img src="../../imgadmin/otra.png" alt="..." class="img-circle profile_img">
              </div>
              
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Inicio </a>                 
                  </li>
                  <li><a href="../Empleados/Registro.php"><i class="fa fa-edit"></i> Registro de empleados </a>                  
                  </li>
                  <li><a href="../Disponibles/Registro.php"><i class="fa fa-desktop"></i> Disponibles </a>
                    
                  </li>
                  <li><a href="../Contratacion/Contratacion.php"><i class="fa fa-table"></i>Contratación</a>
                    
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Tiempo laboral<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Registro de hora de ingreso y salida</a></li>
                      <li><a href="chartjs2.html">Incapacidades</a></li>
                      <li><a href="morisjs.html">Permisos</a></li>
                    
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Evaluación de desempeño
                  </a>
                   
                  </li>
                  <li><a href="../Compras_ventas/Grafica.php"><i class="fa fa-clone"></i>Desempeño en compras y ventas
                  </a>
                   
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
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
                    <img src="images/img.jpg" alt="">Administrador
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Cuenta</a></li>
                  
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Cerrar sesión</a></li>
                  </ul>
                </li>

                
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col inicio" role="main">
          <div class="">
          <?php
          include ("../../../calendario/index.php");
          ?>
    

</div>
</div>
</div>
        <!-- /page content -->

        <!-- footer content -->
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


  </body>
</html>