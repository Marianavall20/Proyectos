<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Clase</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_evento" value="add_evento">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_evento">Nombre: </label>
						<input type="text" id="nombre_evento" name="nombre_evento" class="form-control" placeholder="Nombre del Evento" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="fecha_evento">Fecha: </label>
						<input type="date" id="fecha_evento" name="fecha_evento" class="form-control" placeholder="Fecha del Evento" required="required">
					</div>
					<div class="col-md-4">
						<label for="imagenes">Imágen:</label>
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="imagen_evento[]" id="imagen_evento" required="required" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="descripcion">Descripción: </label>
						<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción del Edecan" required="required"></textarea>
					</div>
					<div class="col-md-4 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php require('../footer.php'); ?>