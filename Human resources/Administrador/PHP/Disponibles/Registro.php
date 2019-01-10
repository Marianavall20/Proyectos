
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

    <title>Vacantes</title>
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

            <!-- /menu footer buttons -->
            
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
                      <li><a href="../Evaluacion_desempeno/evaluacion_tecnica/index.php">Evaluación técnica</a></li>
                      <li><a href="../Evaluacion_desempeno/evaluacion_psicologica/index.php">Evaluación psicológica</a       
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
            <a data-toggle="tooltip" data-placement="top" title="Salir" href="../../cerrarsesion.php">
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

        <!-- Pagina de contenido -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Vacantes disponibles</h3>
              </div>    
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro <small>Vacantes</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                  <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                    <?php 
                    include("Conexion.php");
                    $Conexion=mysql_connect($host,$usuariodb,$clavedb,$basededatos) or die (" ):(");
                    mysql_select_db($basededatos, $Conexion)or die("):( ");
                    $area="SELECT nombre from area";
                    $rematricula=mysql_query($area);
                    ?>
              <form action="Ingresar.php" method="POST" class="form-horizontal form-label-left">
              <div class="form-group">
                <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Area<span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                   <select name="area"><br>
                   <option value="Area">Seleccione área</option>
                    <?php 
                    while ($fila=mysql_fetch_row($rematricula)) {
                    echo "<option value='".$fila['0']."'>".$fila['0']. "</option>";
                    }
                    ?>
                    </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Correspondencia<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="correspondencia">
                      <option>Corresponde a...</option>
                      <option>Creación de cargo</option>
                      <option>Reemplazo temporal</option>
                      <option>Reestructuración de cargo</option>
                      <option>Reemplazo definitivo</option>
                    </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Motivo de la vacante<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="motivo">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Perfil del cargo<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="perfil">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Funciones<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="funciones">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha cubrimiento vacante<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" class="form-control" id="recipient-name" name="fecha">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sueldo asignado<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="sueldo">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Prestaciones ofrecidas<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="prestaciones">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Jornada laboral<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="jornada_laboral">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad de vacantes<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control" id="recipient-name" name="cantidad">
                    </div>
                </div>

        
                <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                   <button  type="submit" class="btn btn-info" name="Guardar">Enviar</button>        
                </div>
                </div>
                </div>          
              </form>

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

              <div class="clearfix"></div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <form method="POST" action="Busqueda.php">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Realice una busqueda" name="busqueda">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                 </form>
                </div>
              </div>
          
  <table id="datatable-responsive" class="table table-striped " cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Área</th>
            <th>Correspondencia</th>
            <th>Motivo de la vacante</th>
            <th>Perfil del cargo</th>
            <th>Funciones</th>
            <th>Fecha cubrimiento de la vacante</th>
            <th>sueldo asignado</th>
            <th>Prestaciones ofrecidas</th>
            <th>Jornada laboral</th>
            <th>Cantidad</th>
            <th></th>
            <th></th>
  <?php
      $mysql = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");   
      if ($mysql->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
          exit();
      }
      $consulta= "SELECT * FROM vacante";
      if ($resultado = $mysql->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td><td>$fila[10]</td>";  
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-area='" .$fila[1] ."' data-correspondencia='" .$fila[2] ."' data-motivo='" .$fila[3] ."' data-perfil='" .$fila[4] ."' data-funciones='" .$fila[5] ."' data-fecha='" .$fila[6] ."' data-sueldo='" .$fila[7] ."' data-prestaciones='" .$fila[8] ."' data-jornada_laboral='" .$fila[9] ."' data-cantidad='" .$fila[10] ."'><img src='../../imgadmin/plus.png'></span></a>";  
          echo"<td>";     
          echo "<a href='Eliminar.php?id=" .$fila[0] ."'><img src='../../imgadmin/cancel.png'></a>";
          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();      
  ?>
          </tr>
        </thead>    
  </table>          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Ventana modal para editar trabajador -->

    <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="Actualizar.php" method="POST">                    
                                  
                              <input  id="id" name="id" type="hidden" ></input>                                       
                              <div class="form-group">
                                <label for="nombre">Motivo:</label>
                                <input class="form-control" id="motivo" name="motivo" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="edad">Perfil:</label>
                                <input class="form-control" id="perfil" name="perfil" type="text" ></input>
                              </div>
                              <div class="form-group">
                                <label for="direccion">Funciones:</label>
                                <input class="form-control" id="funciones" name="funciones" type="text" ></input>
                              </div> 
                              <div class="form-group">
                                <label for="direccion">Fecha:</label>
                                <input class="form-control" id="fecha" name="fecha" type="date" ></input>
                              </div>  
                              <div class="form-group">
                                <label for="direccion">Sueldo:</label>
                                <input class="form-control" id="sueldo" name="sueldo" type="text" ></input>
                              </div>  
                              <div class="form-group">
                                <label for="direccion">Prestaciones:</label>
                                <input class="form-control" id="prestaciones" name="prestaciones" type="text" ></input>
                              </div>  
                              <div class="form-group">
                                <label for="direccion">Jornada Laboral:</label>
                                <input class="form-control" id="jornada_laboral" name="jornada_laboral" type="text" ></input>
                              </div> 
                              <div class="form-group">
                                <label for="direccion">Cantidad:</label>
                                <input class="form-control" id="cantidad" name="cantidad" type="text" ></input>
                              </div>                   
                                                 
                    </div>
                    <div class="modal-footer">
                         <button type="submit" class="btn btn-info">Enviar </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                       </form>
                </div>
            </div>
    </div> 
</div>

  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>  

  <script>       
      $('#editUsu').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('id')      
      var recipient1 = button.data('motivo')
      var recipient2 = button.data('perfil')
      var recipient3 = button.data('funciones')
      var recipient4 = button.data('fecha')
      var recipient5 = button.data('sueldo')
      var recipient6 = button.data('prestaciones')
      var recipient7 = button.data('jornada_laboral')
      var recipient8 = button.data('cantidad')
  
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id').val(recipient0)     
      modal.find('.modal-body #motivo').val(recipient1)
      modal.find('.modal-body #perfil').val(recipient2)
      modal.find('.modal-body #funciones').val(recipient3)
      modal.find('.modal-body #fecha').val(recipient4) 
      modal.find('.modal-body #sueldo').val(recipient5) 
      modal.find('.modal-body #prestaciones').val(recipient6) 
      modal.find('.modal-body #jornada_laboral').val(recipient7)  
      modal.find('.modal-body #cantidad').val(recipient8)
          
    });    
  </script>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page content -->
      
        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Gestión de Recursos Humanos
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

  </body>
</html>
<?php
}else{
  echo '<script> window.location="../../../index.php";</script>';
}

?> 