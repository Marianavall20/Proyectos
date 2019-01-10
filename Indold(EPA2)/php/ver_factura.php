<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/normas.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
    

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

         <!--Menú horizontal-->
   <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>

          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="../index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Buscar-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!--Cerrar cuenta-->
                <li class="nav-item"><a href="cerrar.php" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!--Menú vertical-->
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center" >
            <!--Imagen administrador-->
            <div class="avatar"><img src="../img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Nombre del Administrador</h1>
              <p>Administrador</p>
            </div>
          </div>
          
           <!--Item menú-->
          <ul class="list-unstyled">
                    <li><a href="../index.php"> <i class="icon-home"></i>Inicio </a></li>
                    <li><a href="formulario.php"> <i class="icon-padnote"></i>Formulario de Registro </a></li>
                    <li><a href="registro.php"> <i class="icon-grid"></i>Registro de Trabajadores </a></li>
                    <li><a href="factura.php"> <i class="fa fa-bar-chart"></i>Registro de consumo</a></li>
                    <li><a href="registro_factura.php"> <i class="fa fa-bar-chart"></i>Registro de factura</a></li>
                    <li class="active"><a href="ver_factura.php"> <i class="fa fa-bar-chart"></i>Factura</a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Normas ambientales</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="decreto.php">Decretos</a></li>
                        <li><a href="ley.php">Leyes</a></li>
                        <li><a href="resolucion.php">Resoluciones</a></li>
                      </ul>
                    </li>
                     <li><a href="curiosidades.php"> <i class="icon-paper-airplane"></i>Datos curiosos </a></li>
                    

        </nav>
        <!--Cierre menú-->

           <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Registro</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb" >
              <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Registro</li>
            </ul>
          </div>
          <section class="tables" >   
            <div class="container-fluid">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                      </div>
                    </div>
                    
 <div id="buscar">
<form method="POST" action="menu.php">

<input type="text" name="busqueda" placeholder="Realice una búsqueda" id="busqueda">
<button type="submit" class="btn btn-link link" value="Realice una búsqueda"><i class="icon-search"></i></button>

</form>
</div>

 <?php
include("../conexion/conexion.php");

$user_id=null;
$sql1= "SELECT * from factura";
$query = $cone->query($sql1);
?>

<?php if($query->num_rows>0):?>

<div class="card-header d-flex align-items-center">
                      <h3 id="nombre">Factura</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
<th>Ruta</th>
<th>Código</th>
<th>Dirección</th>
<th>Código postal</th>
<th>Suscriptor</th>
<th>Estrato</th>
<th>Uso</th>
<th>Codigo contador</th>
<th>Sin recargo</th>
<th>con recargo</th>
<th>periodo facturado</th>
<th>cuentas vencidas</th>
<th>consumo desde</th>
<th>consumo hasta</th>
<th>dias consumo</th>
<th>no lectura</th>
<th>lectura actual</th>
<th>lectura anterior</th>
<th>consumo</th>
<th>vertimiento</th>
<th>promedio</th>
<th>promedio estrato</th>
<th>ultimo pago</th>
                            </tr>
                          </thead>

                          <?php while ($r=$query->fetch_array()):?>
                          <tbody>
                            
                              
<tr>
<td><?php echo $r["ruta"]; ?></td>
<td><?php echo $r["codigo"]; ?></td>
<td><?php echo $r["direccion"]; ?></td>
<td><?php echo $r["codigo_postal"]; ?></td>
<td><?php echo $r["suscriptor"]; ?></td>
<td><?php echo $r["estrato"]; ?></td>
<td><?php echo $r["uso"]; ?></td>
<td><?php echo $r["codigo_contador"]; ?></td>
<td><?php echo $r["sin_recargo"]; ?></td>
<td><?php echo $r["con_recargo"]; ?></td>
<td><?php echo $r["periodo_facturado"]; ?></td>
<td><?php echo $r["cuentas_vencidas"]; ?></td>
<td><?php echo $r["consumo_desde"]; ?></td>
<td><?php echo $r["consumo_hasta"]; ?></td>
<td><?php echo $r["dias_consumo"]; ?></td>
<td><?php echo $r["no_lectura"]; ?></td>
<td><?php echo $r["lectura_actual"]; ?></td>
<td><?php echo $r["lectura_anterior"]; ?></td>
<td><?php echo $r["consumo"]; ?></td>
<td><?php echo $r["vertimiento"]; ?></td>
<td><?php echo $r["promedio"]; ?></td>
<td><?php echo $r["promedio_estrato"]; ?></td>
<td><?php echo $r["ultimo_pago"]; ?></td>
</tr>


</script>
</td>
</tr>
<?php endwhile;?>
</table>
</div>


<?php else:?>
<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>




<!--?php include("../../footer/footer.php") ?-->
</body>
         