<?php
session_start();
include("../../Conexion/conexion.php");

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

    <title>Empleados</title>
<link rel="shortcut icon"  href="../../../imgadmin/perfil.png">
    <!-- Bootstrap -->
    <link href="../../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.dataTables.min.js"></script>
    
    <script>
      $(document).ready(function(){
        $('#mitabla').DataTable({
          "order": [[1, "asc"]],
          "language":{
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrada de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search": "Explore sus empleados:",
            "zeroRecords":    "No se encontraron registros coincidentes",
            "paginate": {
              "next":       "Siguiente",
              "previous":   "Anterior"
            },          
          },
          "bProcessing": true,
          "bServerSide": true,
          "sAjaxSource": "server_process.php"
        }); 
      });
      
    </script>

    <!-- Custom Theme Style -->
    <link href="../../../../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md encabezado" >
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
               <div >
              <div >
                <img src="../../../imgadmin/otra.png" alt="..." class="img-circle profile_img">
              </div>
              
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                  <li><a href="../../inicio/index.php"><i class="fa fa-home"></i> Inicio </a>                 
                  </li>
                  <li><a href="../../Empleados"><i class="fa fa-edit"></i> Registro de empleados </a>                  
                  </li>
                  <li><a href="../../Empleados/Seguridad_social/Seguridad_social.php"><i class="fa fa-file-text-o"></i>Seguridad social</a>                  
                  </li>
                  <li><a href="../../Disponibles/Registro.php"><i class="fa fa-plus-square"></i> Disponibles </a>                  
                  </li>

                  <li><a href="../../Contratacion/Contratacion.php"><i class="fa fa-file-pdf-o"></i>Contratación</a>               
                  </li>
                  <li><a><i class="fa fa-star"></i>Evaluación desempeño<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../evaluacion_tecnica">Evaluación técnica</a></li>
                      <li><a href="#">Evaluación psicológica</a></li>        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clock-o"></i> Tiempo laboral<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Registro de hora de ingreso y salida</a></li>
                      <li><a href="../../tiempo_laboral/incapacidades.php">Permisos e incapacidades</a></li>                  
                    </ul>
                  </li>                 
                  <li><a href="../../Compras_ventas/Grafica.php"><i class="fa fa-bar-chart-o"></i>Desempeño en compras y ventas </a>     
                  </li>
                </ul>
              </div>
            </div>            
           
            <!-- /sidebar menu -->
         <!-- Botones footer menu -->
         <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Salir" href="../../../cerrarsesion.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
            
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
                  include("../../Conexion/conexion.php");
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
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
        <div class="right_col" role="main" >
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Administrador <small>Gestion De Recursos Humanos</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

           

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="text-align:center">Evaluacion Psicologica</h2> 
                  
                    <ul class="nav navbar-right panel_toolbox">
                      
                       <li><a class="añadir texto" data-toggle="modal" data-target="#nuevoUsu" >Añadir<i class="fa fa-star star"></i></a>
                    <style type="text/css">
                      .star{ 
                        font-size: 28px;
                        color: #fff705de;
                      }
                    </style>
                      </li>  
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                  
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
          
                   <div class="container">
      <div class="row">
        
      </div>
      
      <div class="row">
        </small></h2>
      </div>
      
      <br>
      
      <div class="row table-responsive registre">
   
        <table class="display" id="mitabla">
          <style type="text/css">
table::-webkit-scrollbar {
  width: 7px;
}

table::-webkit-scrollbar-thumb {
  background: #ff9d00;
  border-radius: 5px;
}
          </style>
          <thead>
            <tr>
              <th>Id</th>
    <th>Empleado</th>
    <th>Administrador que evalua</th>
    <th>Componente</th>
    <th>Calificacion</th>
    <th>Area</th>
    <th>Periodo evaluado</th>
    <th>Cargo empleado</th>
    <th>tiempo de servicio</th>
    <th>Fecha</th>
    <th>Primera pregunta</th>
    <th>Segunda pregunta</th>
    <th>Justificacion</th>
    
    <td></td>
    <td></td>
            </tr>
          </thead>
          
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

    <!--Ventana modal para registrar trabajador -->


        <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Ingresar Evaluación</h4> 

                    </div>
                    <div class="modal-body">
                    
                    <br>
                       <form role="form" action="guardar.php" method="POST" onsubmit="return validate()" name="empleadotabla">                  
                          <div class="form-group">
                            <label >Empleado:</label>
                            <input class="form-control" id="empleado" name="empleado" type="text" placeholder="Empleado a evaluar" autocomplete="off">
                            <span id="empleado" class="text-danger font-weight-bold"></span></input>
                          </div>

                          <div class="form-group">
                            <label>Administrador que evalúa:</label>
                            <input class="form-control" id="admin" name="admin" type="text" placeholder="Administrador que evalua" autocomplete="off">
                            <span id="admin" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">                            
                            <label>Componente</label>
                            <select required="" class="form-control" id="message-text" name="componente">
                            <?php
                            include("conexion/conexion.php");

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
                         <div class="form-group">
                            <label>Periodo Evaluado:</label>
                            <input class="form-control" id="periodo_evaluado" name="periodo_evaluado" type="text" placeholder="Periodo Evaluado" autocomplete="off">
                            <span id="periodo_evaluado" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">                            
                            <label>Area:</label>
                            <select required="" class="form-control" id="message-text" name="area">
                            <?php
                            include("conexion/conexion.php");

                            $consultpsicologica="SELECT * FROM modulos";
                            $resultpsicologica=mysqli_query($conexion, $consultpsicologica);
                            ?>

                            <option value="item">Seleccione Area</option>
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
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Cargo Empleado:</label>
                            <input class="form-control" id="cargo_empleado" name="cargo_empleado" type="text" placeholder="Cargo empleado" autocomplete="off">
                            <span id="cargo_empleado" class="text-danger font-weight-bold"></span></input>
                          </div>
                           <div class="form-group">
                            <label>Tiempo de servicio:</label>
                            <input class="form-control" id="tiempo_servicio" name="tiempo_servicio" type="text" placeholder="Tiempo de servicio" autocomplete="off">
                            <span id="tiempo_servicio" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label>Fecha:</label>
                            <input class="form-control" id="fecha" name="fecha" type="date" placeholder="Fecha" autocomplete="off">
                            <span id="fecha" class="text-danger font-weight-bold"></span></input>
                          </div>
                                <div class="form-group">
                           <label>Calificación</label>                     
                            <div class="radio circulo">
                            <label>
                              <input type="radio" class="flat" name=" calificacion" value="Alto"> Alto
                            </label>
                            </div>
                            <div class="radio">
                            <label>
                              <input type="radio" class="flat" name=" calificacion" value="Medio"> Medio
                            </label>
                            </div>
                            <div class="radio">
                            <label>
                              <input type="radio" class="flat" name=" calificacion" value="Bajo"> Bajo
                            </label>
                            </div>  

                            <style type="text/css">
                              .radio{
                                margin-left: -21px;
                              }
                          
                            </style>                         

                          </div>
                          <div class="form-group">
                            <label>¿Cual ha sido el aspecto que mas ha mejorado el colaborador durante el periodo evaluado?:</label>
                            <input class="form-control" id="pregunta1" name="pregunta1" type="text" placeholder="Pregunta" autocomplete="off">
                            <span id="pregunta1" class="text-danger font-weight-bold"></span></input>
                          </div>
                         <div class="form-group">
                            <label>¿El colaborador tiene potencial de desarrollo dentro de la organizacion?:</label>
                            <input type="radio" name="pregunta_nueva" value="Si"> Si
                            <input type="radio" name="pregunta_nueva" value="No"> No
                           
                          </div>
                          <div class="form-group">
                            <label>Justificacion:</label>
                            <input class="form-control" id="justificacion" name="justificacion" type="text" placeholder="Justificacion" autocomplete="off">
                            <span id="justificacion" class="text-danger font-weight-bold"></span></input>
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
    var calificacion = document.getElementById('calificacion').value;
   


  if (empleado ==""){
      document.getElementById('empleado').innerHTML ="** Ingrese el Empleado";
       return false;
       }
       if((empleado.length <= 2) || (empleado.length > 20)){
        document.getElementById('empleado').innerHTML ="** la longitud es de 2 a 20";
        return false;
       }

    if (!isNaN(admin)){
      document.getElementById('admin').innerHTML ="** Solo letras";
      return false;
    }



    
    if (componente ==""){
      document.getElementById('componente').innerHTML ="** Ingrese el apellido";
       return false;
    }
     
</script>



    
    <!-- Modal -->

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
          </div>
          
          <div class="modal-body">
            ¿Desea eliminar este registro?
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-danger btn-ok">Eliminar</a>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script> 

 <div class="modal" id="confirm-edit" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">                      
                                          
          </div>
        </div>               
           
   
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
        <footer class="footer_index">
          <div class="pull-right">
            Gestión de recursos humanos
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    </div>


    <!-- jQuery -->
    <script src="../../../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../../../../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../../../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../../../../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../../../../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../../../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../../../build/js/custom.min.js"></script>

  </body>
</html>
<?php
}else{
  echo '<script> window.location="../../../../index.php";</script>';
}

?>
