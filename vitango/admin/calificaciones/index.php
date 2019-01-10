<?php require('../../conex/conex.php');
  require('../header.php');  
  if(!isset($_GET['tipo'])){
    $_SESSION['mensaje'] = '<script>alert("No puede ingresar a esta parte")</script>';
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $url2 = $_SERVER['HTTP_HOST'];
    for($i=1;$i<count($url);$i++){
      if($i != 4){
        $url2 = $url2.'/'.$url[$i];
      }else{
        break;
      }

    }
    $urlrequest = 'http://'.$url2.'.php'; ?>
    <script> location.href = '<?php echo $urlrequest; ?>' </script>
<?php }else{ 
    if(isset($_SESSION['mensaje'])){echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);}
    if($_GET['tipo'] == 2){
      $tit = 'Profesores';
      $tit2 = 'Profesor';
      $item = 2;
      $query = mysqli_query($conex, 'SELECT usuarios.id, usuarios.nombre, usuarios.apellidos, usuarios.tipo_usuario, calificaciones.id, calificaciones.nota, calificaciones.id_usuario_calificando, item.id, item.definicion FROM usuarios INNER JOIN calificaciones ON(usuarios.id = calificaciones.id_usuario_calificado) INNER JOIN item ON(calificaciones.id_item = item.id) WHERE usuarios.tipo_usuario = 2');
    }else if($_GET['tipo'] == 3){
      $tit = 'Estudiantes';
      $tit2 = 'Estudiante';
      $item = 1;
      $query = mysqli_query($conex, 'SELECT usuarios.id, usuarios.nombre, usuarios.apellidos, usuarios.tipo_usuario, calificaciones.id, calificaciones.nota, calificaciones.id_usuario_calificando, item.id, item.definicion FROM usuarios INNER JOIN calificaciones ON(usuarios.id = calificaciones.id_usuario_calificado) INNER JOIN item ON(calificaciones.id_item = item.id) WHERE usuarios.tipo_usuario = 3');
    } ?>
<!-- page content -->
  <div class="right_col" role="main">
    <section id="tit-prod" class="row">
      <div class="col-md-8">
        <h3 class="ps-sem">Calificaciones de <?php echo $tit; ?></h3>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4 col-md-offset-7">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCalificar" title="Calificar"><i class="fa fa-star"></i> Calificar</button>
          </div>
          <!--<div class="col-md-8 no-padding">
            <form action="">
              <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-search"></i></div>
                  <input type="text" class="form-control" id="buscar-prod" placeholder="Buscar...">
                </div>
            </form>
          </div>-->
        </div>
      </div>
    </section>
    <section id="info-prod">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre Calificado</th>
              <th>Calificación</th>
              <th>Item</th>
              <th>Calificador</th>
            </tr>
          </thead>
          <tbody>
            <?php $cont = 0;
              while($reg = mysqli_fetch_array($query)): ?>
                <tr>
                  <td><?php echo $reg[4]; ?></td>
                  <td><?php 
                      if($_SESSION['usuario'][0]['tipo'] == '2' || $_SESSION['usuario'][0]['tipo']){ 
                          if($reg[3] == 1){ 
                            $nombre = $reg[1].' '.$reg[2]; 
                            echo ucwords($nombre); 
                          }else {
                            if($_GET['tipo'] == 2){ ?>
                                <a href="../profesores/view.php?id=<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a>
                            <?php }else{ ?>
                                <a href="../estudiantes/view.php?id=<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a>
                            <?php } ?>  
                      <?php } 
                      }else{ 
                          if($_GET['tipo'] == 2){ ?>
                            <a href="../profesores/view.php?id=<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a>
                        <?php }else{ ?>
                            <a href="../estudiantes/view.php?id=<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a>
                        <?php } ?>
                    <?php } ?>
                  </td>
                  <td><?php echo $reg[5]; ?>/10</td>
                  <td><?php echo $reg[8]; ?></td>
                  <td><?php 
                      $query_user = mysqli_query($conex, 'SELECT * FROM usuarios WHERE id = "'.$reg[6].'"');
                      $reg_user = mysqli_fetch_array($query_user); ?>
                      <?php 
                      if($_SESSION['usuario'][0]['tipo'] == '2' || $_SESSION['usuario'][0]['tipo']){ 
                          if($reg_user[12] == 1){ 
                            $nombre = $reg_user[1].' '.$reg_user[2]; 
                            echo ucwords($nombre); 
                          }else {
                            if($_GET['tipo'] == 2){ ?>
                                <a href="../profesores/view.php?id=<?php echo $reg_user[0]; ?>"><?php $nombre = $reg_user[1].' '.$reg_user[2]; echo ucwords($nombre) ?></a>
                            <?php }else{ ?>
                                <a href="../estudiantes/view.php?id=<?php echo $reg_user[0]; ?>"><?php $nombre = $reg_user[1].' '.$reg_user[2]; echo ucwords($nombre) ?></a>
                            <?php } ?>  
                      <?php } 
                      }else{ 
                          if($_GET['tipo'] == 2){ ?>
                            <a href="../profesores/view.php?id=<?php echo $reg_user[0]; ?>"><?php $nombre = $reg_user[1].' '.$reg_user[2]; echo ucwords($nombre) ?></a>
                        <?php }else{ ?>
                            <a href="../estudiantes/view.php?id=<?php echo $reg_user[0]; ?>"><?php $nombre = $reg_user[1].' '.$reg_user[2]; echo ucwords($nombre) ?></a>
                        <?php } ?>
                    <?php } ?>
                  </td>
                </tr>
            <?php $cont++;
            endwhile; ?>
            <div id="cont-raiting" style="display:none"><?php echo $cont-1; ?></div>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalCalificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Calificar al <?php echo $tit2; ?></h4>
        </div>
        <form action="<?php echo URL; ?>/admin/controller.php" method="post">
        <input type="hidden" name="add_cali" id="add_cali" value="add_cali">
        <input type="hidden" name="id_calificador" id="id_calificador" value="<?php echo $_SESSION['usuario'][0]['id']; ?>">
        <input type="hidden" name="tipo" id="tipo" value="<?php echo $_GET['tipo']; ?>">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6" style="text-align: center">
                <label for="id_calificado">Seleccione el <?php echo $tit2; ?>: </label>
                <select name="id_calificado" id="id_calificado" class="form-control" required="required">
                  <option value="" disabled="disabled" selected="selected">Seleccione un <?php echo $tit2; ?></option>
                <?php $query = mysqli_query($conex, 'SELECT * FROM usuarios WHERE tipo_usuario = "'.$_GET['tipo'].'"');
                    while($reg = mysqli_fetch_array($query)){ ?>
                      <option value="<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre); ?></option> 
                    <?php  } ?>
                </select>
            </div>
            <div class="col-md-6" style="text-align: center">
                <label for="id_calificado">Seleccione el Item: </label>
                <select name="id_item" id="id_item" class="form-control" required="required">
                  <option value="" disabled="disabled" selected="selected">Seleccione un item</option>
                <?php $query = mysqli_query($conex, 'SELECT * FROM item WHERE tipo = "'.$item.'"');
                    while($reg = mysqli_fetch_array($query)){ ?>
                      <option value="<?php echo $reg[0]; ?>"><?php echo $reg[1]; ?></option> 
                    <?php  } ?>
                </select>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-12" style="text-align: center">
              <label for="id_calificado">Califique el <?php echo $tit2; ?>: </label>
              <select id="star-rating" name="val_cali">
                <option value="" selected="selected" disabled="disabled">Califique!</option>
                <option value="10">Excelente</option>
                <option value="9">Muy Bueno</option>
                <option value="8">Bueno</option>
                <option value="7">Sobresaliente</option>
                <option value="6">Aceptable</option>
                <option value="5">Medio Aceptable</option>
                <option value="4">Bajo</option>
                <option value="3">Muy Bajo</option>
                <option value="2">Pésimo</option>
                <option value="1">Terrible</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Calificar</button>
        </div>
        </form>
      </div>
    </div>
    <style type="text/css">
      .menu{
     
      }
    </style>
  </div>
<!-- /page content -->
<?php }
  require('../footer.php'); ?>