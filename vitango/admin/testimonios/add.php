<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Testimonio</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_testimonio" value="add_testimonio">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_testimonio">Nombre: </label>
						<input type="text" id="nombre_testimonio" name="nombre_testimonio" class="form-control" placeholder="Nombre del Testimonio" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="descripcion">Relato: </label>
						<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Relato del Testimonio" required="required"></textarea>
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