

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empleados</title>
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
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
  </head>
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
  <body class="nav-md encabezado" >
    <div class="container body">
      <div class="main_container">
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
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                  <li><a href="../inicio/index.php"><i class="fa fa-home"></i> Inicio </a>                 
                  </li>
                  <li><a href="index.php"><i class="fa fa-edit"></i> Registro de empleados </a>                  
                  </li>
                  <li><a href="Seguridad_social/Seguridad_social.php"><i class="fa fa-file-text-o"></i>Seguridad social</a>                  
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
            <a data-toggle="tooltip" data-placement="top" title="Salir" href="../../cerrarsesion.php">
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
                    <h2 style="text-align:center">Registro de Empleados</h2> 
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
                    
          
      <div class="container">
      <div class="row">
        
      </div>
      
      <div class="row">
        <a class="btn btn-info añadir " data-toggle="modal" data-target="#nuevoUsu" ><span class="icono izquierda icon-plus"></span> Nuevo Empleado</a></small></h2>
      </div>
      
      <br>
      
      <div class="row table-responsive registre">
   
<table class="display" id="mitabla">
<style type="text/css">
#mitabla::-webkit-scrollbar {
  width: 10px;
  background: #00b19c;
}

#mitabla::-webkit-scrollbar-thumb {
  background: rgba(255,255,255, .2);
  border-radius: 10px;
  border-right: 2px solid #021b79;
}
</style>
  <thead>
    <tr>
    <th>Id</th>
    <th>Nombres</th>
    <th>Primer apellido</th>
    <th>Segundo apellido</th>
    <th>Documento de identidad</th>
    <th>Teléfono</th>
    <th>Dirección</th>
    <th>Correo electrónico</th>
    <th>Usuario</th>
    <th>Estado</th>
    <th>privilegio</th>
    <td></td>
    <td></td>
    </tr>
  </thead>
</table>
    </div>
    </div>

    <!--Ventana modal para registrar trabajador -->

<div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Ingresar empleado</h4> 
                    </div>

                    <div class="modal-body">                    
                    <br>
                       <form role="form" action="guardar.php" method="POST" onsubmit="return validate()" name="empleadotabla">                  
                          <div class="form-group">
                            <label >Nombres:</label>
                            <input class="form-control" id="usrnombre" name="nombres" type="text" placeholder="Nombres" autocomplete="off" required="">
                            <span id="nombre" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label>Primer apellido:</label>
                            <input class="form-control" id="usrprimer_apellido" name="primer_apellido" type="text" placeholder="Apellidos" autocomplete="off">
                            <span id="apellido" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label>Segundo apellido:</label>
                            <input class="form-control" id="usrsegundo_apellido" name="segundo_apellido" type="text" placeholder="Apellidos" autocomplete="off">
                            <span id="sapellido" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Documeno de identidad:</label>
                            <input class="form-control" id="usridentidad" name="identidad" type="text" placeholder="Identidad" autocomplete="off">
                            <span id="identid" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Telefono:</label>
                            <input class="form-control" id="usrtelefono" name="telefono" type="text" placeholder="Telefono" autocomplete="off">
                            <span id="telefone" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Direccion:</label>
                            <input class="form-control" id="usrdireccion" name="direccion" type="text" placeholder="Direccion" autocomplete="off">
                            <span id="direcc" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Correo electrónico:</label>
                            <input class="form-control" id="usremail" name="email" type="email" placeholder="E-mail" autocomplete="off">
                            <span id="ema" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Usuario:</label>
                            <input class="form-control" id="usrusuario" name="usuario" type="text" placeholder="Usuario" autocomplete="off">
                            <span id="usuar" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Contraseña:</label>
                            <input class="form-control" id="usrcontrasenia" name="contrasenia" type="password" placeholder="contraseña" autocomplete="off">
                            <span id="password" class="text-danger font-weight-bold"></span></input>
                          </div>
                           <div class="form-group">
                            <label >confirmar Contraseña:</label>
                            <input class="form-control" id="usrccontrasenia" name="confirmar_contrasenia" type="password" placeholder="contraseña" autocomplete="off">
                            <span id="cpassword" class="text-danger font-weight-bold"></span></input>
                          </div>
                          <div class="form-group">
                            <label >Estado:*</label>
                            <input type="checkbox" name="estado" value="Activo"> Activo
                            <input type="checkbox" name="estado" value="Inactivo"> Inactivo
                          </div>
                          <div class="form-group">
                            <label >Privilegio:*</label>
                            <input type="checkbox" name="privilegio" value="Usuario"> Usuario
                          </div>

                          <div class="modal-footer">
                             <button type="submit" class="btn btn-dark" name="Enviar">Enviar</button> 
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                         </div>              
                      </form>
                    </div>                   
                </div>
            </div>
        </div> 

<script type="text/javascript">
  function validate(){
    var usrnombre = document.getElementById('usrnombre').value;
    var primer_apellido = document.getElementById('usrprimer_apellido').value;
    var segundo_apellido = document.getElementById('usrsegundo_apellido').value;
    var usridentidad = document.getElementById('usridentidad').value;
    var usrtelefono = document.getElementById('usrtelefono').value;
    var usrdireccion = document.getElementById('usrdireccion').value;
    var usremail= document.getElementById('usremail').value;
    var usrusuario= document.getElementById('usrusuario').value;
    var usrcontrasenia= document.getElementById('usrcontrasenia').value;
    var usrccontrasenia= document.getElementById('usrccontrasenia').value;
   


  if (usrnombre ==""){
      document.getElementById('nombre').innerHTML ="** Ingrese el nombre";
       return false;
       }
       if((usrnombre.length <= 2) || (usrnombre.length > 20)){
        document.getElementById('nombre').innerHTML ="** la longitud es de 2 a 20";
        return false;
       }

    if (!isNaN(usrnombre)){
      document.getElementById('nombre').innerHTML ="** Solo letras";
      return false;
    }



    
    if (primer_apellido ==""){
      document.getElementById('apellido').innerHTML ="** Ingrese el apellido";
       return false;
    }
     if((primer_apellido.length <= 2) || (primer_apellido.length > 20)){
        document.getElementById('apellido').innerHTML ="** la longitud es de 2 a 20";
        return false;
       }
           if (!isNaN(primer_apellido)){
      document.getElementById('apellido').innerHTML ="** Solo letras";
      return false;
    }
    if (segundo_apellido ==""){
    document.getElementById('sapellido').innerHTML ="** Ingrese el segundo apellido";
       return false;
    }
         if((segundo_apellido.length <= 2) || (segundo_apellido.length > 20)){
        document.getElementById('sapellido').innerHTML ="** la longitud es de 2 a 20";
        return false;
       }
           if (!isNaN(segundo_apellido)){
      document.getElementById('sapellido').innerHTML ="** Solo letras";
      return false;
    }
    if (usridentidad ==""){
      document.getElementById('identid').innerHTML ="** Ingrese el Usuario";
       return false;
    }
    if (!parseInt(usridentidad)){
      document.getElementById('identid').innerHTML ="** Solo numeros";
      return false;
    }
    if (usrtelefono ==""){
      document.getElementById('telefone').innerHTML ="** Ingrese el contraseña";
       return false;
    }
    if (!parseInt(usrtelefono)){
      document.getElementById('telefone').innerHTML ="** Solo numeros";
      return false;
    }
      if (usrdireccion ==""){
      document.getElementById('direcc').innerHTML ="** Ingrese la contraseña";
       return false;
    }
       if (usremail ==""){
      document.getElementById('ema').innerHTML ="** Ingrese la contraseña";
       return false;
    }
       if (usrusuario ==""){
      document.getElementById('usuar').innerHTML ="** Ingrese la contraseña";
       return false;
    }
       if (usrcontrasenia ==""){
      document.getElementById('password').innerHTML ="** Ingrese la contraseña";
       return false;
    }
       if (usrccontrasenia ==""){
      document.getElementById('cpassword').innerHTML ="** Ingrese la contraseña";
       return false;
    }
       if(usrcontrasenia!=usrccontrasenia){
      document.getElementById('cpassword').innerHTML ="** las contraseñas no coinciden ";
      return false;
    }

    
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
          <div class="modal-body"></div>
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
