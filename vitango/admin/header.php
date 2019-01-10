<?php session_start();
  if(!isset($_SESSION['usuario'])){
    header('Location: ../login.php');
  }
  $url = explode('/', $_SERVER['REQUEST_URI']);
  $url2 = $_SERVER['HTTP_HOST'];
  for($i=1;$i<count($url);$i++){
    if($i != 2){
      $url2 = $url2.'/'.$url[$i];
    }else{
      break;
    }
  }
  @define(URL, 'http://'.$url2); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador Vitango</title>
  <!-- Responsive -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Fuentes -->
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Iconos -->
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- estilo -->
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo URL; ?>/admin/assets2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link href="<?php echo URL; ?>/admin/assets/css/star-rating.min.css" rel="stylesheet">
  <link href="<?php echo URL; ?>/admin/assets/css/style.css" rel="stylesheet">

  <!-- Fuentes de google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="indexadmin.html" class="logo"> <img src="<?php echo URL; ?>/admin/assets2/images/logo.png" alt="" width="150px" height="auto"></a>
      <!-- mini logo -->
      <span class="logo-mini">
      <!-- logo normal -->
      <span class="logo-lg">
    </a>
    <!-- -->
    <nav class="navbar navbar-static-top">
      <!-- Menu-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Menu de navegacion</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo URL; ?>/admin/index.php">
              <i class="fa fa-home"></i> Home
            </a>
          </li>
          <!-- Módulos -->
          <?php if($_SESSION['usuario'][0]['tipo'] == '1' || $_SESSION['usuario'][0]['tipo'] == '2'){ ?>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-book"></i> Módulos
            </a>
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                  <li><a href="<?php echo URL; ?>/admin/clases.php">Clases</a></li>
                  <?php if($_SESSION['usuario'][0]['tipo'] == '1'){ ?>
                    <li><a href="<?php echo URL; ?>/admin/cursos.php">Cursos</a></li>
                    <li><a href="<?php echo URL; ?>/admin/eventos.php">Eventos</a></li>
                    <li><a href="<?php echo URL; ?>/admin/testimonios.php">Testimonios</a></li>
                    <li><a href="<?php echo URL; ?>/admin/edecanes.php">Edecanes</a></li>
                  <?php } ?>
                </ul>
              </li>
            </ul>
          </li>
          <?php } 
          if($_SESSION['usuario'][0]['tipo'] == '1'){ ?>
          <!-- Usuarios-->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-users"></i> Usuarios
            </a>
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                    <li><a href="<?php echo URL; ?>/admin/profesores.php">Profesores</a></li>
                    <li><a href="<?php echo URL; ?>/admin/estudiantes.php">Estudiantes</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <?php } ?>
          <!-- Información -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-info"></i> Información
            </a>
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                  <li><a href="<?php echo URL; ?>/admin/videos.php">Videos</a></li>
                  <?php if($_SESSION['usuario'][0]['tipo'] == '2'){ ?>
                  <li><a href="<?php echo URL; ?>/admin/estudiantes.php">Estudiantes</a></li>
                  <?php }elseif ($_SESSION['usuario'][0]['tipo'] == '3') { ?>
                  <li><a href="<?php echo URL; ?>/admin/profesores.php">Profesores</a></li>
                  <?php } ?>
                  <li><a href="<?php echo URL; ?>/admin/calificaciones.php">Calificaciones</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- cuenta -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo URL; ?>/admin/assets2/dist/img/descarga1.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ucwords($_SESSION['usuario'][0]['nombre']); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Imagen de usuario -->
              <li class="user-header">
                <img src="<?php echo URL; ?>/admin/assets2/dist/img/descarga1.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo ucwords($_SESSION['usuario'][0]['nombre']); ?>
                  <small>Administrador general</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo URL; ?>/admin/controller.php?logout=true" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Panel -->
      <div class="user-panel">
      <div class="pull-left image">
          <img src="<?php echo URL; ?>/admin/assets2/dist/img/descarga1.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
<style type="text/css">
  p{
    font-family: Arial;
    font-size: 1.5em;

  }
</style>       
          <p>BIENVENIDOS</p>
        </div>-->
      </div>
      <!-- Buscador 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
  </aside>

  <!-- admin -->
  <div class="content-wrapper">
    <section class="content">
