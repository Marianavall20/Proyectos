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

    <title>Evaluacion de desempeño</title>
        <link rel="shortcut icon" href="../../../imagenes/perfil.jpeg">


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


  <body class="nav-md" >

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

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Salir" href="../../../Administrador/cerrarsesion.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" >
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

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="height: 660px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> <small>Evaluación de desempeño</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <form method="POST" action="">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar empleado">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>          

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Evaluacion Psicológica<small> <a class="btn btn-info añadir " data-toggle="modal" data-target="#nuevoUsu" ><span class="icono izquierda icon-plus"></span> Nueva evaluación</a></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Visualice la calificaciones realizadas
                    </p>
          
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
         <thead> 
          <th>Id</th>
          <th>Empleado</th>
          <th>Administrador que evalúa</th>
          <th>Componente</th>
          <th>Calificación</th>
          <td></td>
          <td></td>
         </thead>
           <?php
              $mysqli = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");   
              if ($mysqli->connect_errno) {
                  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                  exit();
              }
              $consulta= "SELECT id_psicologica, empleado, admin, componente, calificacion  FROM evaluacion_psicologica";
              if ($resultado = $mysqli->query($consulta)) 
              {
                while ($fila = $resultado->fetch_row()) 
                {         
                  echo "<tr>";
                  echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>";  
                  echo"<td>";           
                  echo "<a data-toggle='modal' data-target='#editUsu' data-id_tecnica='" .$fila[0] ."' data-empleado='" .$fila[1] ."' data-admin='" .$fila[2] ."' data-componente='" .$fila[3] ."' data-calificacion='" .$fila[4] ."'><img src='../../imgadmin/plus.png'></span></a>";  
                  echo"<td>";     
                  echo "<a href='evaluacion_tecnica/eliminar_tecnica.php?id_tecnica=" .$fila[0] ."'><img src='../../imgadmin/cancel.png'></a>";

                  echo "</td>";
                  echo "</tr>";
                }
                $resultado->close();
              }
              $mysqli->close();  

          ?>
        </tr>
  </table>

  </div>
           <?php
             include("../Conexion/conexion.php");
             $consultpsicologica="SELECT * FROM calificacion_psicologica";
             $resultpsicologica=mysqli_query ($conexion, $consultpsicologica);
           ?>

<!--Ventana modal para registrar evaluacion -->

        <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Evaluación psicológica</h4> 
                    </div>

                    <div class="modal-body">                    
                    <br>
                       <form role="form" action="evaluacion_psicologica/evaluacion_psicologica.php" method="POST" onsubmit="return validate()" name="empleadotabla">                  
                          <div class="form-group">
                            <label >Empleado:</label>
                            <input class="form-control" id="empleado" name="empleado" type="text" placeholder="" autocomplete="off">
                            <span id="empleado" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label>Administrador que evalúa:</label>
                            <input class="form-control" id="admin" name="admin" type="text" placeholder="" autocomplete="off">
                            <span id="admin" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">                            
                            <label>Item:</label>
                            <select required="" class="form-control" id="message-text" name="componente">
                            <?php
                            include("../Conexion/conexion.php");

                            $consultpsicologica="SELECT * FROM calificacion_psicologica";
                            $resultpsicologica=mysqli_query($conexion, $consultpsicologica);
                            ?>

                            <option value="item">Seleccione calificación</option>
                            <?php
                            while($fila=mysqli_fetch_array($resultpsicologica)){
                            echo "<option value='".$fila['1']."'> ".$fila['1']."</option>";
                            echo "<option value='".$fila['2']."'> ".$fila['2']."</option>";
                            echo "<option value='".$fila['3']."'> ".$fila['3']."</option>";
                            echo "<option value='".$fila['4']."'> ".$fila['4']."</option>";
                            echo "<option value='".$fila['5']."'> ".$fila['5']."</option>";
                            echo "<option value='".$fila['6']."'> ".$fila['6']."</option>";
                            }
                            ?>
                          </div>

                            <input type="checkbox" name="calificacion" value="alto">Alto
                            <input type="checkbox" name="calificacion" value="medio">Medio
                            <input type="checkbox" name="calificacion" value="bajo">Bajo
                            </div>

                          <div class="modal-footer">
                             <button type="submit" class="btn btn-info" name="Enviar">Enviar</button> 
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                          </div>              
                      </form>
                    </div>                   
                </div>
            </div>
        </div> 

   <script type="text/javascript">
    function validate(){
    var empleado = document.getElementById('empleado').value;
    var admin = document.getElementById('admin').value;
    var componente = document.getElementById('componente').value;
    var calificacion = document.getElementById('calificacion').value;}   
   </script>


<!--Ventana modal para editar evaluacion-->

        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar evaluación</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="evaluacion_psicologica/actualizar_psicologica.php" method="POST" onsubmit="return validation()">               
                              <input  id="id_tecnica" name="id_psicologica" type="hidden" ></input>       
                              <div class="form-group">
                                <label for="nombre">Empleado:</label>
                                <input class="form-control" id="empleado" name="empleado" type="text" autocomplete="off" ><span id="idempleado" class="text-danger font-weight-bold"></span></input>
                              </div>
                              <div class="form-group">
                                <label for="admin">Administrador que evalúa:</label>
                                <input class="form-control" id="admin" name="admin" type="text"  autocomplete="off"><span id="idadmin" class="text-danger font-weight-bold"></span></input>
                              </div>
                              <div class="form-group">
                                <label for="componente">Componente:</label>
                                <input class="form-control" id="componente" name="componente" type="text"  autocomplete="off"><span id="idcomponwntw" class="text-danger font-weight-bold"></span></input>
                              </div>
                              <div class="form-group">
                                <label for="calificacion">Calificación:</label>
                                <input class="form-control" id="calificacion" name="calificacion" type="text" autocomplete="off" ><span id="calificacion" class="text-danger font-weight-bold"></span></input>
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
      var recipient0 = button.data('id_psicologica')
      var recipient1 = button.data('empleado')
      var recipient2 = button.data('admin')
      var recipient3 = button.data('componente')
      var recipient4 = button.data('calificacion')
      
       // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
     
      var modal = $(this)    
      modal.find('.modal-body #id_psicologica').val(recipient0)
      modal.find('.modal-body #empleado').val(recipient1)
      modal.find('.modal-body #admin').val(recipient2)
      modal.find('.modal-body #componente').val(recipient3)
      modal.find('.modal-body #calificacion').val(recipient4) 
             
      });    
      </script>
      <script type="text/javascript">
       function validation(){
         var empleado = document.getElementById('empleado').value;
         var admin = document.getElementById('admin').value;
         var componente = document.getElementById('componente').value;
         var calificacion = document.getElementById('calificacion').value;}   
      </script>

        <!-- /page content -->
   </div>
   </div>
   </div>

  </div>
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