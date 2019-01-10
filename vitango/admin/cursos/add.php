<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Curso</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_curso" value="add_curso">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_curso">Nombre: </label>
						<input type="text" id="nombre_curso" name="nombre_curso" class="form-control" placeholder="Nombre del Curso" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="horario">Horario: </label>
						<input type="text" id="horario" name="horario" class="form-control" placeholder="Horario del Curso" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="edad">Edad: </label>
						<input type="text" id="edad" name="edad" class="form-control" placeholder="Horario del Curso">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="precio">Precio: </label>
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required="required">
						</div>
					</div>
					<div class="col-md-4 form-group">
						<label for="precio2">Precio 2: <small>(opcional)</small></label>
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="text" class="form-control" name="precio2" id="precio2" value="0">
						</div>
					</div>
					<div class="col-md-4 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php require('../footer.php'); ?>