<?php require('header.php'); ?>
<!-- page content -->
  <section class="content-header">
      <h1>
        Administrador
        <small>Panel de control</small>
      </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> INICIO</a></li>
	    <li class="active"></li>
	  </ol>
	</section>
	   <!-- Main -->
    <section class="content">
      <!-- Caja pequeña -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- Caja pequeña -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><i class="fa fa-film"></i></h3>

              <p>Videos</p>
            </div>
            <div class="icon">
              <i class="ion-videocamera"></i>
            </div>
            <a href="<?php echo URL; ?>/admin/videos.php" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php if($_SESSION['usuario'][0]['tipo'] == '1' || $_SESSION['usuario'][0]['tipo'] == '3'){ ?>
        <div class="col-lg-3 col-xs-6">
          <!-- Caja pequeña -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><i class="fa fa-user"></i></h3>

              <p>Profesores</p>
            </div>
            <div class="icon">
              <i class="ion ion-easel"></i>
            </div>
            <a href="<?php echo URL; ?>/admin/profesores.php" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->
        <?php if($_SESSION['usuario'][0]['tipo'] == '1' || $_SESSION['usuario'][0]['tipo'] == '2'){ ?>
        <div class="col-lg-3 col-xs-6">
          <!-- Caja pequeña -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><i class="fa fa-graduation-cap"></i></h3>

              <p>Estudiantes</p>
            </div>
            <div class="icon">
              <i class="ion ion-edit"></i>
            </div>
            <a href="<?php echo URL; ?>/admin/estudiantes.php" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- Caja pequeña -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><i class="fa fa-info"></i></h3>

              <p>Calificaciones</p>
            </div>
            <div class="icon">
              <i class="ion-android-checkmark-circle"></i>
            </div>
            <a href="<?php echo URL; ?>/admin/calificaciones.php" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

<!-- /page content -->
<?php require('footer.php'); ?>
