<?php require('../conex/conex.php');
  require('header.php');
  if(isset($_SESSION['mensaje'])){echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);} ?>
<!-- page content -->
  <div class="right_col" role="main">
    <section id="tit-prod" class="row">
      <div class="col-md-8">
        <h3 class="ps-sem">Eventos</h3>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4 col-md-offset-7">
            <a href="eventos/add.php" title="Agregar Evento" role="button" class="ps-reg btn btn-info"><i class="fa fa-plus"></i> Agregar</a>
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
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Miniatura</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $query = mysqli_query($conex, 'SELECT * FROM eventos');
              while($reg = mysqli_fetch_array($query)): ?>
                <tr>
                  <td><?php echo $reg[0]; ?></td>
                  <td><?php echo $reg[1]; ?></td>
                  <td><?php $date = $reg[3];
                       $my_date = date('d/m/Y', strtotime($date));
                       echo $my_date; ?></td>
                  <td><img src="<?php echo $reg[4]; ?>" alt="<?php echo $reg[1]; ?>" width="80" height="80" class="img-responsive"></td>
                  <td>
                    <a href="eventos/view.php?id=<?php echo $reg[0]; ?>" role="button" class="btn btn-default" title="Editar Evento"><i class="fa fa-eye"></i></a>
                    <a href="eventos/edit.php?id=<?php echo $reg[0]; ?>" role="button" class="btn btn-warning" title="Editar Evento"><i class="fa fa-pencil"></i></a>
                    <a href="controller.php?delete_evento=true&id=<?php echo $reg[0]; ?>" role="button" class="btn btn-danger" onclick="return confirm('Está seguro que desea eliminar este evento?');"><i class="fa fa-trash"></i></a>
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