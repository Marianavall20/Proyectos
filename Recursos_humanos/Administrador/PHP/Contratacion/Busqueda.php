<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contratación</title>
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
    <link href="../../CSS/contratacion.css" rel="stylesheet">
  </head>

<body class="nav-md">
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
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">         

            <div class="clearfix"></div>

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
                   <li><a href="../Empleados/Seguridad_social/Seguridad_social.php"><i class="fa fa-file-text-o"></i>Seguridad social</a>                  
                  </li>
                  <li><a href="../Disponibles/Registro.php"><i class="fa fa-plus-square"></i> Disponibles </a>                  
                  </li>
                  <li><a href="../Contratacion/Contratacion.php"><i class="fa fa-file-pdf-o"></i>Contratación</a>               
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

            <!-- Botones footer menu -->
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
            <!-- /Botones footer menu -->
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
                    <img src="images/img.jpg" alt="">Administrador
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
        <div class="right_col" role="main">
          <div class="">           
            <div class="clearfix"></div>             
          </div>
          
        <div class="row"></div>         
        <!-- End SmartWizard Content --> 
                      
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información<small>Vacantes</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>

                 <?php
                 include "../Conexion/conexion.php";

                 $buscar=$_POST['busqueda'];
                 $sql1= "select * from contratos where numero_contrato='$buscar'";
                 $query = $conexion->query($sql1);
                 ?>

                 <?php if($query->num_rows>0):?>
                   
                  <div class="clearfix"></div>
                 
                  <div class="x_content">
                  <br>
                    <p class="text-muted font-13 m-b-30">
                      Visualice y exporte el contrato del empleado buscado.
                    </p>
                  
                   <div class="col-md-6 col-sm-6 col-xs-12">             
                
                   </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th># Contrato</th>
                          <th>Nombre trabajador</th>
                          <th>Funciones</th>
                          <th>Dirección del centro de trabajo</th>                         
                          <th>Fecha del contrato</th>
                          <th>Fecha límite del contrato</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php while ($r=$query->fetch_array()):?>
                          <th scope="row"><?php echo $r["id"]; ?></th>
                          <th ><?php echo $r["numero_contrato"]; ?></th>
                          <td><?php echo $r["nombre_trabajador"]; ?></td>
                          <td><?php echo $r["funciones"]; ?></td>
                          <td><?php echo $r["direccion_centro"]; ?></td>
                          <td><?php echo $r["fecha_contrato"]; ?></td>
                          <td><?php echo $r["fecha_final_decreto"]; ?></td>
                          <td><a href="dompdf/Contrato.php?id=<?php echo $r['id'];?>"><i class="fa fa-file-pdf-o document"></i></a></td>
                          <style type="text/css">
                          .document{
                                font-size: 25px;
                                color: #777;
                                    }
                          </style>
                        </tr>                       
                      </tbody>
                  <?php endwhile;?>
                    </table>
                  <?php else:
                  print "<script>alert(\"No hay resultados.\");window.location='Contratacion.php';</script>";
                  endif;?>
                  </div>
                </div>
              </div>             
                                           
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
              
      
 <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
    <!-- Custom Theme Scripts -->
    <script src="../../../build/js/custom.min.js"></script> 
    <!-- jQuery Smart Wizard -->
    <script src="../../../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
</body> 
</html>