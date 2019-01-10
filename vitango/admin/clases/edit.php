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
		$query = mysqli_query($conex, 'SELECT * FROM clases WHERE id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Editar Clase</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_clase" value="edit_clase">
				<input type="hidden" name="id_clase" value="<?php echo $reg[0]; ?>">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_clase">Nombre: </label>
						<input type="text" id="nombre_clase" name="nombre_clase" class="form-control" value="<?php echo $reg[1]; ?>" required="required">
					</div>
					<div class="col-md-4">
						<label>Imagen que tienes en este momento: </label>
						<img src="<?php echo $reg[2]; ?>" alt="<?php echo $reg[1]; ?>" width="200" height="200" class="img-responsive">
						<input type="hidden" name="img_calse_ext" id="img_calse_ext" value="<?php echo $reg[2]; ?>">
					</div>
					<div class="col-md-4">
						<label for="imagenes">Seleccione una Imágen:</label>
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="imagen_clase[]" id="imagen_clase" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>