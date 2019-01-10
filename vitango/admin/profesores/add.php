<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Profesor</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_profesor" value="add_profesor">
				<div class="row">
					<div class="col-md-3 form-group">
						<label for="nombre_profesor">Nombre: </label>
						<input type="text" id="nombre_profesor" name="nombre_profesor" class="form-control" placeholder="Nombre del Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="apellido">Apellido: </label>
						<input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido del Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="documento">Documento: </label>
						<input type="text" id="documento" name="documento" class="form-control" placeholder="Documento el Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="genero">Genero: </label>
						<select name="genero" id="genero" class="form-control" required="required">
							<option value="" disabled="disabled" selected="selected">Seleccione una opción</option>
							<option value="Hombre">Hombre</option>
							<option value="Mujer">Mujer</option>
							<option value="Otro">Otro</option>
							<option value="Prefiero no decirlo">Prefiero no decirlo</option>
						</select>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3 form-group">
						<label for="usuario">Usuario: </label>
						<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario del Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="email">Correo: </label>
						<input type="email" id="email" name="email" class="form-control" placeholder="Coreo del Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="pass">Contraseña: </label>
						<input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña del Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="fecha_nacimiento">Fecha de Nacimiento: </label>
						<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required="required">
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3 form-group">
						<label for="telefono">Teléfono: </label>
						<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono del Profesor" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="direccion">Dirección: </label>
						<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección del Profesor" required="required">
					</div>
					<div class="col-md-4">
						<label for="imagenes">Imágen:</label>
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="imagen_prefesor[]" id="imagen_prefesor" required="required" />
					</div>
					<div class="col-md-2 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php require('../footer.php'); ?>