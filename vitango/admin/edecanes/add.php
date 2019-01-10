<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Edecan</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_edecan" value="add_edecan">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_edecan">Nombre: </label>
						<input type="text" id="nombre_edecan" name="nombre_edecan" class="form-control" placeholder="Nombre del Edecan" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="descripcion">Descripción: </label>
						<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción del Edecan" required="required"></textarea>
					</div>
					<div class="col-md-4 form-group">
						<div class="col-md-4 form-group">
							<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
						</div>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php require('../footer.php'); ?>