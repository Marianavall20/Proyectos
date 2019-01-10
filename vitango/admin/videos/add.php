<?php require('../header.php'); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Agregar Video</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_video" value="add_video">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_video">Nombre: </label>
						<input type="text" id="nombre_video" name="nombre_video" class="form-control" placeholder="Nombre del Video" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="link_video">Link de YouTube: </label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-youtube-play"></i></div>
							<input type="text" id="link_video" name="link_video" class="form-control" placeholder="Link del Video" required="required">
						</div>
					</div>
					<div class="col-md-4 form-group">
						<label for="usuario">Usuario que publica el video: </label>
						<input type="text" id="usuario" name="usuario" value="<?php echo ucwords($_SESSION['usuario'][0]['nombre']); ?>" class="form-control" readonly="readonly">
						<input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_SESSION['usuario'][0]['id']; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="observaciones">Observaciones: </label>
						<textarea name="observaciones" id="observaciones" cols="30" rows="5" class="form-control" placeholder="Observaciones del Video"></textarea>
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