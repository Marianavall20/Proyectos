<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Clase</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_clase" value="add_clase">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_clase">Nombre: </label>
						<input type="text" id="nombre_clase" name="nombre_clase" class="form-control" placeholder="Nombre de la Clase" required="required">
					</div>
					<div class="col-md-4">
						<label for="imagenes">Imágen:</label>
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="imagen_clase[]" id="imagen_clase" required="required" />
					</div>
					<div class="col-md-4 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php require('../footer.php'); ?>