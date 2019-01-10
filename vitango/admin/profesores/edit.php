<?php require('../../conex/conex.php');
	require('../header.php');  
	if(!isset($_GET['id'])){
		$_SESSION['mensaje'] = '<script>alert("No puede ingresar a esta parte")</script>';
		$url = explode('/', $_SERVER['REQUEST_URI']);
		$url2 = $_SERVER['HTTP_HOST'];
		for($i=1;$i<count($url);$i++){
			if($i != 4){
				$url2 = $url2.'/'.$url[$i];
			}else{
				break;
			}
		}
		$urlrequest = 'http://'.$url2.'.php'; ?>
		<script> location.href = '<?php echo $urlrequest; ?>' </script>
<?php }else{ 
		$query = mysqli_query($conex, 'SELECT * FROM usuarios WHERE id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Editar Profesor</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_profesor" value="edit_profesor">
				<input type="hidden" name="id_profesor" value="<?php echo $reg[0]; ?>">
				<div class="row">
					<div class="col-md-3 form-group">
						<label for="nombre_profesor">Nombre: </label>
						<input type="text" id="nombre_profesor" name="nombre_profesor" class="form-control" value="<?php echo $reg[1]; ?>" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="apellido">Apellido: </label>
						<input type="text" id="apellido" name="apellido" class="form-control" value="<?php echo $reg[2]; ?>" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="documento">Documento: </label>
						<input type="text" id="documento" name="documento" class="form-control" value="<?php echo $reg[3]; ?>" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="genero">Genero: </label>
						<select name="genero" id="genero" class="form-control" required="required">
							<option value="" disabled="disabled">Seleccione una opción</option>
							<option value="Hombre" <?php if($reg[7] == 'Hombre'){ ?> selected="selected" <?php } ?> >Hombre</option>
							<option value="Mujer" <?php if($reg[7] == 'Mujer'){ ?> selected="selected" <?php } ?> >Mujer</option>
							<option value="Otro" <?php if($reg[7] == 'Otro'){ ?> selected="selected" <?php } ?> >Otro</option>
							<option value="Prefiero no decirlo" <?php if($reg[7] == 'Prefiero no decirlo'){ ?> selected="selected" <?php } ?> >Prefiero no decirlo</option>
						</select>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3 form-group">
						<label for="usuario">Usuario: </label>
						<input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $reg[4]; ?>" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="email">Correo: </label>
						<input type="email" id="email" name="email" class="form-control" value="<?php echo $reg[5]; ?>" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="pass">Contraseña: </label>
						<input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña del Profesor" >
						<input type="hidden" name="pass2" id="pass2" value="<?php echo $reg[6]; ?>">
					</div>
					<div class="col-md-3 form-group">
						<label for="fecha_nacimiento">Fecha de Nacimiento: </label>
						<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="<?php echo $reg[8]; ?>" required="required">
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3 form-group">
						<label for="telefono">Teléfono: </label>
						<input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $reg[9]; ?>" required="required">
					</div>
					<div class="col-md-3 form-group">
						<label for="direccion">Dirección: </label>
						<input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $reg[10]; ?>" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="imagenes">Imágen:</label>
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="imagen_profesor[]" id="imagen_profesor" />
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						<label>Imagen que tienes en este momento: </label>
						<img src="<?php echo $reg[11]; ?>" alt="<?php echo $reg[11]; ?>" width="200" height="200" class="img-responsive">
						<input type="hidden" name="img_profesor_ext" id="img_profesor_ext" value="<?php echo $reg[11]; ?>">
					</div>
					<div class="col-md-2 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>