<?php require('../conex/conex.php');
  require('header.php');
  if(isset($_SESSION['mensaje'])){echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);} ?>
<!-- page content -->
  <div class="right_col" role="main">
    <section id="tit-prod" class="row">
      <div class="container">
        <div class="row">
          <?php 
          if($_SESSION['usuario'][0]['tipo'] == 1 || $_SESSION['usuario'][0]['tipo'] == 3){ ?>
            <div class="col-md-4 col-md-offset-1 cont-cali">
              <a href="calificaciones/index.php?tipo=2">
                <i class="fa fa-user fa-5x"></i>
                <h3>Calificar Profesor</h3>
              </a>
            </div>
          <?php }
         
         if($_SESSION['usuario'][0]['tipo'] == 1 || $_SESSION['usuario'][0]['tipo'] == 3)
         { ?>
            <div class="col-md-4 col-md-offset-1 cont-cali">
              <a href="calificaciones/notasedu.php?tipo=3">
                <i class="fa fa-user fa-5x"></i>
                <h3>Mis Calificaciones Estudiante</h3>
              </a>
            </div>
          <?php }
            
          if($_SESSION['usuario'][0]['tipo'] == 1 || $_SESSION['usuario'][0]['tipo'] == 2){ ?>
            <div class="col-md-4 col-md-offset-1 cont-cali">
              <a href="calificaciones/index.php?tipo=3">
                <i class="fa fa-user fa-5x"></i>
                <h3>Calificar Estudiante</h3>
              </a>
            </div>
          <?php }
          if($_SESSION['usuario'][0]['tipo'] == 1 || $_SESSION['usuario'][0]['tipo'] == 2){ ?>
            <div class="col-md-4 col-md-offset-1 cont-cali">
              <a href="calificaciones/notasdoc.php?tipo=2">
                <i class="fa fa-user fa-5x"></i>
                <h3>Mis Calificaciones Docente</h3>
              </a>
            </div>
            <?php } ?>
        </div>
      </div>
    </section>
  </div>
<!-- /page content -->
<?php require('footer.php'); ?>