
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
    <title>Contratación</title>
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

            <!-- Botones footer menu-->
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
                    $admin = mysql_query($conexion, "SELECT nombres, segundo_apellido FROM administradores WHERE id=id and nombres=nombres and segundo_apellido=segundo_apellido");
                  $row=mysqli_fetch_assoc($admin);

                  ?>
                    <img src="images/img.jpg" alt="">
                  <?php
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
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Contratación</h3>
              </div>            
            </div>

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
        

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro <small>Contratación</small></h2>
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
      $mysql = new mysqli("mysql.gestionrecursoshumanos.org", "user_recursos", "Recursos2018", "db_recursoshumanos");   
      if ($mysql->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
          exit();
      }
      $consulta= "SELECT * FROM periodo_prueba";
      if ($resultado = $mysql->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
      {         
          echo "<tr>";
        
          echo"<td>";           
          echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-apellidos='" .$fila[2] ."' data-lugar_trabajo='" .$fila[3] ."' data-fecha_inicio='" .$fila[4] ."' data-horario='" .$fila[5] ."' data-duracion='" .$fila[6] ."'></span></a>";  
          echo"<td>";     
          echo "<a href='eliminar.php?id=" .$fila[0] ."'></a>";

          echo "</td>";
          echo "</tr>";
      }
      $resultado->close();
      }
      $mysqli->close();       
      ?>
                    <!-- Smart Wizard -->
                    <p>CONTRATO INDEFINIDO DE TRABAJO.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal contrate">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                            Registro
                            <br>
                            <small>Información</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                            Cláusulas
                            <br>
                            <small>Información</small>
                            </span>
                          </a>
                        </li>                        
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                            Cláusulas
                            <br>
                            <small>Información</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                            Cláusulas
                            <br>
                            <small>Información</small>
                            </span>
                          </a>
                        </li>
                      </ul>
             
<div id="step-1">

<form action="Registro_empresa.php" method="POST"> 

<h5><b>DATOS DE LA EMPRESA</b></h5>
<div class="nit"><input type="text"  placeholder="NIT" name="nit"></div>
<div class="empresa"><input type="text"  placeholder="D./DÑA." name="dna_empresa"></div>
<div  class="nif"><input type="text"  placeholder="NIF" name="nif_empresa"></div>
<div  class="concepto"><input type="text"  placeholder="EN CONCEPTO" name="concepto_empresa"></div>
<div class="razon_social"><input type="text"  placeholder="NOMBRE O RAZÓN SOCIAL DE LA EMPRESA" name="razon_social"></div>
<div class="direccion"><input type="text"  placeholder="DOMICILIO SOCIAL" name="domicilio_empresa"></div>
<div class="country"><input type="text"  placeholder="PAÍS" name="pais_empresa"></div>
<div  class="town"><input type="text"  placeholder="MUNICIPIO" name="municipio_empresa"></div>
<div  class="postal"><input type="text"  placeholder="CÓDIGO POSTAL" name="codigo_postal"></div>

<h5><b>DATOS DE LA CUENTA DE COTIZACIÓN</b></h5>
<div class="regimen"><input type="text"  placeholder="RÉGIMEN" name="regimen"></div>
<div class="cod"><input type="text"  placeholder="COD.PROV" name="cod_prov"></div>
<div class="digitos"><input type="text"  placeholder="NÚMERO" name="numero_cotizacion"></div>
<div class="dig_contrato"><input type="text"  placeholder="DIG.CONTR" name="digito_contrato"></div>
<div class="actividad"><input type="text"  placeholder="ACTIVIDAD ECONÓMICA" name="actividad_economica"></div>

<h5><b>DATOS DEL CENTRO DE TRABAJO</b></h5>
<div class="pais_empresa"><input type="text"  placeholder="PAIS" name="pais_centro"></div>
<div class="municipio_empresa"><input type="text" placeholder="MUNICIPIO" name="municipio_centro"></div>


<h5><b>DATOS DEL/DE LA TRABAJADOR/A</b></h5>
<div class="empresa"><input type="text"  placeholder="D./DÑA." name="nombre_trabajador"></div>
<div  class="nif"><input type="text"  placeholder="NÚMERO DE IDENTIDAD" name="identificacion"></div>
<div  class="concepto"><input type="date"  placeholder="FECHA DE NACIMIENTO" name="fecha_nacimiento"></div>
<div class="country"><input type="text"  placeholder="N° AFILIACIÓN S.S" name="num_afiliacion"></div>
<div  class="town"><input type="text"  placeholder="NIVEL FORMATIVO" name="nivel_formativo"></div>
<div  class="postal"><input type="text"  placeholder="NACIONALIDAD" name="nacionalidad"></div>
<div class="razon_social"><input type="text"  placeholder="MUNICIPIO DE DOMICILIO" name="domicilio_trabajador"></div>
<div class="direccion"><input type="text"  placeholder="PAÍS DOMICILIO" name="pais_trabajador"></div>
<button type="submit" class="btn btn-dark btempresa" name="Enviar">Guarde para continuar</button>
</form>
</div>

<div class="clausulas">

<form method="POST" action="Clausulas.php">

<div id="step-2" >
  
<h3><b><center>DECLARAN</center></b></h3>

<p><b>Que el/la trabajador/a, esté admitido/a en el Programa de Activación para el Empleo y esté en posesión del documento acreditativo o resolución del SEPE. </b></p>
<br>

<h3><b><center>CLÁUSULAS</center></b></h3>

<b>PRIMERA:</b> El/la trabajador/a prestará sus servicios como (3) <b><input type="text" name="profesion_trabajador" class="in"></b>, incluido en el grupo profesional de (4) <b><input type="text" name="grupo_profesional" class="in"></b> para la realización de las funciones (5) <b><input type="text" name="funciones" class="in"></b> de acuerdo con el sistema de clasificación profesional vigente en la empresa. 
<p></p>

En el centro de trabajo ubicado en (calle, nº y localidad):<b><input class="in" type="text" name="direccion_centro"></b> 
<p></p>

<b>SEGUNDA:</b> EI contrato se concierta para realizar trabajos periódicos de carácter discontinuo consistentes en (6): <b><input class="in" type="text" name="actividad_trabajador"></b> dentro de la actividad cíclica intermitente de (7)<b><input type="text" class="in" name="actividad"></b> cuya duración será de (8) <b><input type="text" class="in" name="duracion_actividad"></b>.
<p></p>

La duración estimada de la actividad será de (9) <b><input type="text" name="duracion_estimada" class="in"></b>.Los/as trabajadores/as serán llamados en el orden y forma que se determine en el Convenio Colectivo de (10)<b><input type="text" name="convenio" class="in"></b>. La jornada estimada dentro del periodo de actividad será de <b><input type="text" name="jornada_actividad" class="in"></b> (11) y la distribución horaria será <b><input type="text" name="distribucion_horaria" class="in"></b>. 
<p></p>
Si el convenio colectivo de ámbito sectorial permite en los contratos fijos discontinuos utilizar la modalidad de tiempo parcial, indique si se acoge al mismo. 
<label><input type="checkbox" id="cbox1" value="si" name="tiempo_parcial">Si</label>
<input type="checkbox" id="cbox2" value="no" name="tiempo_parcial"> <label for="cbox2">No</label>

</div>

<div id="step-3">

<b>TERCERA:</b> La jornada de trabajo será: 
<p></p>

<li><b>A tiempo completo:</b> La jornada de trabajo será de<b><input class="in" type="text" name="jornada_completa" class="in"></b> horas semanales, prestadas de <b><input type="time" class="in" name="hora_inicio"></b> a <b><input type="time" name="hora_final" class="in"></b>, con los descansos establecidos legal o convencionalmente.</li>
<br>
<li><b>A tiempo parcial:</b> La jornada de trabajo ordinaria será de (12) <b><input class="in" type="text" name="jornada_parcial"></b> horas 
<label><input type="checkbox" id="cbox1" value="al dia" name="tiempo">al día</label>
<input type="checkbox" id="cbox2" value="a la semana" name="tiempo"> <label for="cbox2">a la semana</label>
<input type="checkbox" id="cbox2" value="al anio" name="tiempo"> <label for="cbox2">al año</label>
     siendo esta jornada inferior a la de un/a trabajador/a a tiempo completo.
</li>
<br>
La distribución del tiempo de trabajo será de (14) <b><input class="in" type="text" name="distribucion_tiempo"></b>. 
<br>
En el caso de jornada a tiempo parcial señálese si existe o no pacto sobre la realización de horas complementarias (15):
<label><input type="checkbox" id="cbox1" value="si" name="extras">Si</label>
<input type="checkbox" id="cbox2" value="no" name="extras"> <label for="cbox2">No</label>

<b>CUARTA:</b> La duración del presente contrato será INDEFINIDA, iniciándose la relación laboral en fecha <b><input class="in" type="date" name="fecha_inicio"></b> y se establece un período de prueba de (16) <b><input type="text" class="in" name="periodo_prueba"></b> días.
<p></p>

<b>QUINTA:</b> El/la trabajador/a percibirá una retribución total de <b><input class="in" type="text" name="salario"></b> pesos brutos que se distribuirán en los siguientes conceptos salariales (18): <b><input type="text" class="in" name="concepto_salarial"></b>.
<p></p>

<b>SEXTA:</b> La duración de las vacaciones anuales será de (19)<b><input type="text" class="in" name="duracion_vacaciones"></b> días.
<p></p>

<b>SÉPTIMA:</b> En lo no previsto en este contrato, se estará a la legislación vigente que resulte de aplicación y particularmente, el Estatuto de los Trabajadores aprobado por el Real Decreto Legislativo 2/2015, de 23 de octubre (BOE de 24 de octubre) y el Convenio Colectivo de: <b><input type="text" class="in" name="convenio_colectivo"></b>. 
                     
</div>

<div id="step-4" class="ultimo">
<b>OCTAVA:</b> El presente contrato se formaliza bajo la modalidad de contrato de relevo: 
<label><input type="checkbox" id="cbox1" value="Si" name="contrato_relevo">Si</label>
<input type="checkbox" id="cbox2" value="No" name="contrato_relevo"> <label for="cbox2">No</label>
<p></p>

El/la trabajador/a:
Que está en desempleo e inscrito/a como demandante en Lanbide de <b><input class="in" type="text" name="desempleado"></b>.
<br>
Que tiene concertado con la empresa un contrato de duración determinada que fue comunicado con el número <b><input type="text" class="in" name="numero_contrato"></b>con fecha <b><input type="date" class="in" name="fecha_contrato"></b>.
<p></p>
El/la representante de la Empresa: Que el/la trabajador/a de la Empresa D/Dña. <b><input type="text" class="in" name="nombre_trabajador"></b>.nacido el <b><input type="date" class="in" name="fecha_nacimiento"></b> que presta sus servicios en el centro de trabajo ubicado en (calle, nº y localidad): <b><input class="in" type="text" name="direccion"></b>con la profesión de , incluido en el grupo/laboral/nivel profesional <b><input type="text" class="in" name="grupo_laboral"></b> de acuerdo con el sistema de clasificación profesional vigente en la empresa que reduce su jornada ordinaria de trabajo y su salario en un (20)<b><input class="in" type="text" name="salario_jubilacion"></b>por acceder a la situación de jubilación parcial regulada en el Real Decreto-Ley 5/2013 de 15 de marzo ha suscrito con fecha <b><input class="in" type="date" name="fecha_decreto"></b> y hasta <b><input class="in" type="date" name="fecha_final_decreto"></b> el correspondiente contrato de trabajo a tiempo parcial, comunicado con el número<b><input class="in" type="text" name="num_contrato"></b> y con fecha <b><input class="in" type="date" name="fecha_finaldecreto"></b>

<input type="submit" value="Enviar" name="Enviar" class="btn btn-dark guardar">
<style type="text/css">
  .guardar{
    margin-top: 40px;
    margin-left: 350px;
    width: 200px;
  }
</style> 

</div>
                 
</form>
</div>


                    </div>
                    <!-- End SmartWizard Content -->

     
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
    <!-- jQuery Smart Wizard -->
    <script src="../../../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    
  </body>  
</html>
<?php
}else{
  echo '<script> window.location="../../../index.php";</script>';
}

?> 