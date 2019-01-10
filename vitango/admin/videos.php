<?php require('../conex/conex.php');
  require('header.php');
  if(isset($_SESSION['mensaje'])){echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);} ?>
<!-- page content -->
  <div class="right_col" role="main">
    <section id="tit-prod" class="row">
      <div class="col-md-8">
        <h3 class="ps-sem">Videos</h3>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4 col-md-offset-7">
             <?php if($_SESSION['usuario'][0]['tipo'] == '1' || $_SESSION['usuario'][0]['tipo'] == '2'){ ?>
              <a href="videos/add.php" title="Agregar Testimonio" role="button" class="ps-reg btn btn-info"><i class="fa fa-plus"></i> Agregar</a>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <section id="info-prod">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre Video</th>
              <th>Usuario</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $query = mysqli_query($conex, 'SELECT usuarios.id, usuarios.nombre, usuarios.apellidos, user_video.id, user_video.nombre, user_video.observaciones, user_video.link_video, usuarios.tipo_usuario FROM user_video INNER JOIN usuarios ON(user_video.id_usuario = usuarios.id)');
              while($reg = mysqli_fetch_array($query)): ?>
                <tr>
                  <td><?php echo $reg[3]; ?></td>
                  <td><?php echo $reg[4]; ?></td>
                  <td><?php if($_SESSION['usuario'][0]['tipo'] == '2' || $_SESSION['usuario'][0]['tipo']){ 
                        if($reg[7] == 1){ 
                          $nombre = $reg[1].' '.$reg[2]; 
                          echo ucwords($nombre) ?>
                      <?php }else { ?>  
                              <a href="profesores/view.php?id=<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a></td>
                      <?php } 
                      }else{ ?>
                    <a href="profesores/view.php?id=<?php echo $reg[0]; ?>"><?php $nombre = $reg[1].' '.$reg[2]; echo ucwords($nombre) ?></a></td>
                    <?php } ?>
                  <td>
                    <a href="videos/view.php?id=<?php echo $reg[3]; ?>" role="button" class="btn btn-default" title="Ver Video"><i class="fa fa-eye"></i></a>
                    <?php if($_SESSION['usuario'][0]['tipo'] == '1' || $_SESSION['usuario'][0]['tipo'] == '2'){
                        if($_SESSION['usuario'][0]['id'] == $reg[3]){ ?>
                      <a href="videos/edit.php?id=<?php echo $reg[3]; ?>" role="button" class="btn btn-warning" title="Editar Video"><i class="fa fa-pencil"></i></a>
                      <a href="controller.php?delete_video=true&id=<?php echo $reg[3]; ?>" role="button" class="btn btn-danger" title="Eliminar Video" onclick="return confirm('Está seguro que desea eliminar este video?');"><i class="fa fa-trash"></i></a>
                    <?php }
                    } ?>
                  </td>
                </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
<!-- /page content -->
<?php require('footer.php'); ?>