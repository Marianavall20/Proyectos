<?php require('../conex/conex.php');
  require('header.php');
  if(isset($_SESSION['mensaje'])){echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);} ?>
<!-- page content -->
  <div class="right_col" role="main">
    <section id="tit-prod" class="row">
      <div class="col-md-8">
        <h3 class="ps-sem">Testimonios</h3>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4 col-md-offset-7">
            <a href="testimonios/add.php" title="Agregar Testimonio" role="button" class="ps-reg btn btn-info"><i class="fa fa-plus"></i> Agregar</a>
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
              <th>Testigo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $query = mysqli_query($conex, 'SELECT * FROM testimonios');
              while($reg = mysqli_fetch_array($query)): ?>
                <tr>
                  <td><?php echo $reg[0]; ?></td>
                  <td><?php echo $reg[1]; ?></td>
                  <td>
                    <a href="testimonios/view.php?id=<?php echo $reg[0]; ?>" role="button" class="btn btn-default" title="Ver Testimonio"><i class="fa fa-eye"></i></a>
                    <a href="testimonios/edit.php?id=<?php echo $reg[0]; ?>" role="button" class="btn btn-warning" title="Editar Testimonio"><i class="fa fa-pencil"></i></a>
                    <a href="controller.php?delete_testimonio=true&id=<?php echo $reg[0]; ?>" role="button" class="btn btn-danger" title="Eliminar Testimonio" onclick="return confirm('Está seguro que desea eliminar este testimonio?');"><i class="fa fa-trash"></i></a>
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