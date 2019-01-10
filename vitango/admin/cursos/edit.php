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
		$query = mysqli_query($conex, 'SELECT * FROM cursos WHERE id = "'.$_GET['id'].'"');
		$reg = mysqli_fetch_array($query); ?>
	<div class="right_col" role="main">
		<section id="tit-prod" class="row">
			<div class="col-md-6">
				<h3 class="ps-sem">Editar Clase</h3>
			</div>
		</section><br>
		<section id="info-prod">
			<form action="<?php echo URL; ?>/admin/controller.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_curso" value="edit_curso">
				<input type="hidden" name="id_curso" value="<?php echo $reg[0]; ?>">
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="nombre_curso">Nombre: </label>
						<input type="text" id="nombre_curso" name="nombre_curso" class="form-control" value="<?php echo $reg[1]; ?>" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="horario">Horario: </label>
						<input type="text" id="horario" name="horario" class="form-control" value="<?php echo $reg[3]; ?>" required="required">
					</div>
					<div class="col-md-4 form-group">
						<label for="edad">Edad: </label>
						<input type="text" id="edad" name="edad" class="form-control" value="<?php echo $reg[2]; ?>" required="required">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group">
						<label for="precio">Precio: </label>
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="text" class="form-control" name="precio" id="precio" value="<?php echo $reg[4]; ?>" required="required">
						</div>
					</div>
					<div class="col-md-4 form-group">
						<label for="precio2">Precio 2: <small>(opcional)</small></label>
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="text" class="form-control" name="precio2" id="precio2" value="<?php echo $reg[5]; ?>">
						</div>
					</div>
					<div class="col-md-4 form-group">
						<button type="submit" class="btn btn-primary btn-env"><i class="fa fa-floppy-o"></i> Guardar</button>
					</div>
				</div>
			</form>
		</section>
	</div>
<?php }
	require('../footer.php'); ?>